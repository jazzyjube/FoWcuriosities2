<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav/user/config/groups.yaml',
    'modified' => 1563368687,
    'data' => [
        'Contributeur' => [
            'groupname' => 'Contributeur',
            'readableName' => 'Contributeur',
            'access' => [
                'site' => [
                    'login' => 'true'
                ],
                'admin' => [
                    'super' => 'false',
                    'login' => 'true',
                    'cache' => 'false',
                    'configuration' => 'false',
                    'configuration_system' => 'false',
                    'configuration_site' => 'false',
                    'configuration_media' => 'false',
                    'configuration_info' => 'false',
                    'settings' => 'false',
                    'pages' => 'false',
                    'maintenance' => 'false',
                    'statistics' => 'false',
                    'plugins' => 'false',
                    'themes' => 'false',
                    'tools' => 'false',
                    'users' => 'false',
                    'flex-directory' => 'true'
                ],
                'admin-addon-user-manager' => [
                    'users' => 'false',
                    'groups' => 'false',
                    'users_expert' => 'false'
                ]
            ]
        ]
    ]
];
