<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/grav-admin-v1.7.45/grav-admin/user/plugins/admin/blueprints/admin/pages/new_folder.yaml',
    'modified' => 1713019266,
    'size' => 527,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADD_FOLDER'
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'help' => 'PLUGIN_ADMIN.FOLDER_NAME_HELP',
                    'validate' => [
                        'rule' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'parents',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];