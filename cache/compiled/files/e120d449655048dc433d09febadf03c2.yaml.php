<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/grav-admin-v1.7.45/grav-admin/user/config/plugins/chatbot.yaml',
    'modified' => 1713176503,
    'size' => 294,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Chatbot** plugin (disable plugin to remove)',
        'active' => true,
        'route' => '/plugin/chatbot',
        'filters' => [
            'category' => 'blog'
        ],
        'chatbot_name' => 'Q&A Chatbot',
        'api_url' => 'http://localhost:8000/aibot',
        'query_param' => 'question',
        'query_output' => 'JSON',
        'Latitude' => 11,
        'Longitude' => 15
    ]
];
