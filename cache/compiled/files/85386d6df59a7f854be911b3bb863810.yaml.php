<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/daniel/Sites/greenspeedstudio/user/config/plugins/email.yaml',
    'modified' => 1556479768,
    'data' => [
        'enabled' => true,
        'from' => 'info@greenspeed.co.uk',
        'from_name' => 'Dan',
        'to' => 'info@greenspeed.co.uk',
        'to_name' => 'Dan',
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'danjames68@me.com',
                'password' => 'Bobbins--2734'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
