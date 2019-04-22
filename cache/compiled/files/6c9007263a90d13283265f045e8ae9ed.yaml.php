<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/daniel/Sites/greenspeedstudio/user/themes/greenspeed/blueprints.yaml',
    'modified' => 1555170984,
    'data' => [
        'name' => 'GreenSpeed',
        'version' => '1.1.2',
        'description' => 'Greenspeed is a modern and stylish vCard website template.',
        'icon' => 'id-card-o',
        'author' => [
            'name' => 'Devlom',
            'email' => 'info@devlom.com',
            'url' => 'https://devlom.com'
        ],
        'homepage' => 'https://devlom.com/en/blog/greenspeed-stylish-grav-theme',
        'demo' => 'http://demo.devlom.com/grav/greenspeed/',
        'keywords' => 'greenspeed, theme, styleshout, vcard, devlom, responsive, html5, css3',
        'bugs' => 'https://github.com/devlom/grav-theme-greenspeed/issues',
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
                    'destination' => 'theme://images/logo',
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
