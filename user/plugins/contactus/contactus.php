<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\File\CompiledJsonFile;
use Grav\Common\Plugin;

class ContactusPlugin extends Plugin
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onPluginsInitialized' => [
                ['autoload', 100000],
                ['onPluginsInitialized', 0]
            ],
            'onFormProcessed' => ['onFormProcessed', 0],
        ];
    }

    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    public function onPluginsInitialized(): void
    {
        if ($this->isAdmin()) {
            $this->enable([
                'onAdminMenu' => ['onAdminMenu', 0],
                'onAdminPageInitialized'=> ['onAdminPageInitialized',0],
                'onGetContactData' => ['onGetContactData', 0]
            ]);
            return;
        }

        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onPageInitialized' => ['handlePostRequest', 0],   
        ]);
    }

    public function onTwigTemplatePaths($event)
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    public function onAdminMenu()
    {
        $this->grav['twig']->plugins_hooked_nav['contact_data'] = [
            'route' => 'contact_data',
            'icon' => 'fa-envelope',
            'authorize' => ['admin.pages', 'admin.super'],
            'priority' => 8 
        ];
    }

    public function handlePostRequest()
    {
        if ($this->grav['uri']->post() && $this->grav['uri']->route() === '/contactus') {
            $postData = $this->grav['uri']->post() ;
            $this->storeData($postData);
            echo json_encode(['success' => true,'response' => $postData]);
            exit();
        }
    }

    public function onAdminPageInitialized()
    {
        if ($this->isAdminPlugin() && $this->grav['uri']->route() === 'contact_data') {
            $contactData = $this->readExistingData();
            $this->grav['twig']->template = 'contact_data.html.twig';
            $this->onGetContactData();

        }
    }

    public function onGetContactData()
{
    // if (!$this->grav['user']->authenticated || !$this->grav['user']->authorize('admin.pages')) {
    //     header('HTTP/1.1 403 Forbidden');
    //     exit();
    // }

    // Get the path to the JSON file
    $filePath = 'user://data/contactus/data.json';

    // Create an instance of CompiledJsonFile
    $file = CompiledJsonFile::instance($filePath);

    // Get the content of the JSON file
    $data = $file->content();
    // Return the data as JSON
    header('Content-Type: application/json');
    $jsondata=json_encode($data);
    $this->grav['twig']->twig_vars['items'] = $jsondata;
    echo $jsondata;
    exit();
}

    public function storeData($data)
    {
        $existingData = $this->readExistingData();
        $existingData[] = $data;
        $file = $this->grav['locator']->findResource('user://data/contactus/data.json', true, true);
        $content = json_encode($existingData);
        file_put_contents($file, $content);
        // $conData = $this->onGetContactData();
    }

    public function readExistingData()
    {
        $file = $this->grav['locator']->findResource('user://data/contactus/data.json', true, true);
        if (file_exists($file)) {
            $content = file_get_contents($file);
            return json_decode($content, true);
        } else {
            return [];
        }
    }
}
