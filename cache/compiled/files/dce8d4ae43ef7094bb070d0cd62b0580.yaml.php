<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dan/Sites/greenspeed/system/config/site.yaml',
    'modified' => 1555166397,
    'data' => [
        'title' => 'GreenSpeed',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Daniel James',
            'email' => 'danjames68@me.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'GreenSpeed is a small London agency that builds fast green websites hosted on eco-efficient servers powered by renewable energy'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
