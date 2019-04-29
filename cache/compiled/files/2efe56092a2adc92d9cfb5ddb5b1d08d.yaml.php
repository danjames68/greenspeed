<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dan/Sites/greenspeed/user/themes/greenspeed/blueprints.yaml',
    'modified' => 1556109035,
    'data' => [
        'name' => 'GreenSpeed',
        'version' => '1.1.2',
        'description' => 'Greenspeed is based on Hola template by DevCom studios.',
        'icon' => 'id-card-o',
        'author' => [
            'name' => 'GreenSpeedStudio',
            'email' => 'info@greenspeedstudio.co.uk',
            'url' => 'https://www.greenspeedstudio.com'
        ],
        'homepage' => 'https://www.greenspeedstudio.com',
        'demo' => 'https://www.greenspeedstudio.com',
        'keywords' => 'greenspeed, theme,',
        'bugs' => 'https://github.com/danjames68/',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.4.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'header_section' => [
                    'type' => 'section',
                    'title' => 'Header Defaults',
                    'underline' => true
                ],
                'custom_logo' => [
                    'type' => 'file',
                    'label' => 'Custom Logo',
                    'size' => 'large',
                    'destination' => 'theme://images/spiral-logo',
                    'multiple' => false,
                    'markdown' => true,
                    'description' => 'Will be used instead of default logo `theme://images/grav-logo.svg`',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'footer_section' => [
                    'type' => 'section',
                    'title' => 'Footer Defaults',
                    'underline' => true
                ],
                'footer-text' => [
                    'type' => 'text',
                    'label' => 'Copyright Bottom Message'
                ],
                'footer-design' => [
                    'type' => 'text',
                    'label' => 'About Design And Project Description'
                ],
                'footer-additional-text' => [
                    'type' => 'text',
                    'label' => 'Additional Text Beneath Footer Copyright Text'
                ],
                'footer-social' => [
                    'type' => 'list',
                    'label' => 'Social icons',
                    'style' => 'vertical',
                    'fields' => [
                        '.socialIconClass' => [
                            'type' => 'text',
                            'label' => 'Icon Class'
                        ],
                        '.socialIconText' => [
                            'type' => 'text',
                            'label' => 'Icon Name'
                        ],
                        '.socialIconLink' => [
                            'type' => 'text',
                            'label' => 'Url'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
