<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;
use Grav\Common\File\CompiledJsonFile;

class JobAgreementPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }
    public function onPluginsInitialized(): void
    {
        if ($this->isAdmin()) {
            $this->enable([
                'onAdminMenu' => ['onAdminMenu', 0],
                'onAdminPageInitialized'=> ['onAdminPageInitialized',0],
                'onAdminTwigTemplatePaths' => ['onAdminTwigTemplatePaths',0]
                
                
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

    public function onAdminTwigTemplatePaths($event)
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }
    
    public function onAdminMenu()
    {
        $this->grav['twig']->plugins_hooked_nav['job_data'] = [
            'route' => 'jobagreement_data',
            'icon' => 'fa-database',
            'authorize' => ['admin.pages', 'admin.super'],
            'priority' => 9
        ];
    }

    public function handlePostRequest()
    {
        if ($this->grav['uri']->post() && $this->grav['uri']->route() === '/jobagreement') {
            $postData = $this->grav['uri']->post();
            $this->storeData($postData);
            $twig = $this->grav['twig'];
            $twig->twig_vars['myVariable'] = $postData;
            echo json_encode(['success' => true,'response' => $postData]);
            exit();
        }
    }

    public function onAdminPageInitialized()
    {
        if ($this->isAdminPlugin() && $this->grav['uri']->route() === 'jobagreement_data') {
            $contactData = $this->onTwigSiteVariables();
            // $this->grav['twig']->twig_paths[] = __DIR__ . '/../../themes/grav/templates'; 
            $this->grav['twig']->template = 'jobagreement_data.html.twig';

           
        }
    }

    public function onTwigSiteVariables()
    {
        // if (!$this->grav['user']->authenticated || !$this->grav['user']->authorize('admin.pages')) {
        //     header('HTTP/1.1 403 Forbidden');
        //     exit();
        // }

        $file = CompiledJsonFile::instance($this->grav['locator']->findResource('user://data/jobagreement/jobData.json', true, true));
        $data = $file->content();

        header('Content-Type: application/json');
        $jobData_json=json_encode($data);
        $this->grav['twig']->twig_vars['items'] = $jobData_json;
        $this->grav['debugger']->addMessage($jobData_json);
        echo $jobData_json;
        exit(); 
    }

    public function storeData($data)
    {
        $existingData = $this->readExistingData();
        $existingData[] = $data;
        $file = $this->grav['locator']->findResource('user://data/jobagreement/jobData.json', true, true);
        $content = json_encode($existingData);
        file_put_contents($file, $content);
    }

    public function readExistingData()
    {
        $file = $this->grav['locator']->findResource('user://data/jobagreement/jobData.json', true, true);
        if (file_exists($file)) {
            $content = file_get_contents($file);
            return json_decode($content, true);
        } else {
            return [];
        }
    }

}
