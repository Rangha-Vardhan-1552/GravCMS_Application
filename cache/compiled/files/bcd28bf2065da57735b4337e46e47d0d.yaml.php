<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/grav-admin-v1.7.45/grav-admin/user/plugins/chatbot/blueprints.yaml',
    'modified' => 1713180595,
    'size' => 1863,
    'data' => [
        'name' => 'Chatbot',
        'slug' => 'chatbot',
        'type' => 'plugin',
        'version' => '0.1.0',
        'description' => 'chatbot plugin for GRAV site',
        'icon' => 'plug',
        'author' => [
            'name' => 'rangha vardhan',
            'email' => 'rangavardhan1908@gmail.com'
        ],
        'homepage' => 'https://github.com/rangha-vardhan-1552/grav-plugin-chatbot',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/rangha-vardhan-1552/grav-plugin-chatbot/issues',
        'docs' => 'https://github.com/rangha-vardhan-1552/grav-plugin-chatbot/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'chatbot_name' => [
                    'type' => 'text',
                    'label' => 'Chatbot_name',
                    'help' => 'select the chatbot name'
                ],
                'api_url' => [
                    'type' => 'text',
                    'label' => 'API URL',
                    'default' => 'https://localhost:8000/aibot',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'query_param' => [
                    'type' => 'select',
                    'label' => 'Query Parameter',
                    'help' => 'Select the query parameter',
                    'options' => [
                        'browser' => 'browser',
                        'question' => 'question'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'query_output' => [
                    'type' => 'select',
                    'label' => 'Query Output',
                    'help' => 'Select the query output',
                    'options' => [
                        'JSON' => 'JSON',
                        'TEXT' => 'TEXT'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'Latitude' => [
                    'type' => 'number',
                    'label' => 'Latitude',
                    'help' => 'select the latitude'
                ],
                'Longitude' => [
                    'type' => 'number',
                    'label' => 'Longitude',
                    'help' => 'select the longitude'
                ]
            ]
        ]
    ]
];
