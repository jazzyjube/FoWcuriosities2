<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav/user/config/plugins/advanced-pagecache.yaml',
    'modified' => 1563195083,
    'data' => [
        'enabled' => false,
        'disabled_with_params' => true,
        'disabled_with_query' => true,
        'disabled_extensions' => [
            0 => 'rss',
            1 => 'xml',
            2 => 'json'
        ],
        'whitelist' => [
            0 => '/cache-this-page'
        ],
        'blacklist' => [
            0 => '/error',
            1 => '/random',
            2 => '/dont-cache-this-page'
        ]
    ]
];
