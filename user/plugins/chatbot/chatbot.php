<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class ChatbotPlugin
 * @package Grav\Plugin
 */
class ChatbotPlugin extends Plugin
{
    /**
     * Register plugin events.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['initialize', 0]
        ];
    }

    /**
     * Initialize the plugin.
     */
    public function initialize()
    {
        if ($this->isAdmin()) {
            return;
        }

        $this->enable([
            'onPageInitialized' => ['handleAiBotRequest', 0]
        ]);
    }

    /**
     * Handle AI bot request.
     */
    /**
 * Handle AI bot request.
 */
public function handleAiBotRequest(Event $event)
{
    $request = $this->grav['request'];

    // Check if the request method is POST and the requested URL matches '/aibot'
    if ($request->getMethod() === 'POST' && $request->getUri()->getPath() === '/aibot') {
        $body = (string) $request->getBody(); // Get request body as string
        $data = json_decode($body, true); // Decode JSON string into associative array

        // Check if the request data contains the 'message' key
        if (isset($data['message'])) {
            // Get the message from the request data
            $message = strtolower($data['message']); // Convert message to lowercase for case-insensitive matching

            // Determine response based on the keyword
            switch ($message) {
                case 'hi':
                case 'hello':
                    $response = [
                        'status' => 'success',
                        'message' => 'Hello! How can I assist you?'
                    ];
                    break;
                case 'bye':
                    $response = [
                        'status' => 'success',
                        'message' => 'Goodbye! Have a great day!'
                    ];
                    break;
                default:
                    $response = [
                        'status' => 'error',
                        'message' => 'Sorry, I didn\'t understand that.'
                    ];
                    break;
            }

            // Send the response as JSON
            header('Content-Type: application/json');
            echo json_encode($response);
            exit(); // Stop further processing
        }
    }
}


}
