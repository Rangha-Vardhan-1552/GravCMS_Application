<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Plugin;

/**
 * Class ContactusPlugin
 * @package Grav\Plugin
 */
class ContactusPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onPluginsInitialized' => [
                // Uncomment following line when plugin requires Grav < 1.7
                // ['autoload', 100000],
                ['onPluginsInitialized', 0]
            ],
            'onFormProcessed' => ['onFormProcessed', 0]
        ];
    }

    /**
     * Composer autoload
     *
     * @return ClassLoader
     */
    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized(): void
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main events we are interested in
        $this->enable([
            // Put your main events here
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onPageInitialized' => ['handlePostRequest', 0]

            
        ]);
    }
    public function onTwigTemplatePaths($event)
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    public function handlePostRequest()
    {
        // Check if it's a POST request
        if ($this->grav['uri']->post()) {
            // Get the POST data
            $postData = $this->grav['uri']->post();

            // Process the data as needed
            // For example, store it in a file
            $this->storeData($postData);

            // Return a response if needed
            echo json_encode(['success' => true,'response' => $postData]);
            exit();
        }
    }

    public function storeData($data)
{
    // Read existing data from the JSON file, if any
    $existingData = $this->readExistingData();

    // Append new data to the existing data
    $existingData[] = $data;

    // Save the updated data to the JSON file
    $file = $this->grav['locator']->findResource('user://data/contactus/data.json', true, true);
    $content = json_encode($existingData);
    file_put_contents($file, $content);
}

public function readExistingData()
{
    $file = $this->grav['locator']->findResource('user://data/contactus/data.json', true, true);
    if (file_exists($file)) {
        $content = file_get_contents($file);
        return json_decode($content, true);
    } else {
        // If the file doesn't exist yet, return an empty array
        return [];
    }
}

    
}
