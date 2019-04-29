<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/daniel/Sites/greenspeedstudio/user/themes/greenspeed/blueprints/modular/intro.yaml',
    'modified' => 1556480849,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.smallTitle' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'Small Upper Title'
                                ]
                            ]
                        ],
                        'GreenSpeed-Settings' => [
                            'type' => 'tab',
                            'title' => 'Greenspeed Settings',
                            'fields' => [
                                'image' => [
                                    'type' => 'image',
                                    'title' => 'image thumbnail'
                                ],
                                'background' => [
                                    'type' => 'section',
                                    'title' => 'Section Background Color',
                                    'underline' => true
                                ],
                                'header.sectionBackground' => [
                                    'type' => 'selectize',
                                    'label' => 'Additional Section Background Class',
                                    'description' => 'For Gray Background Please Use Class \'grey-section\' for White Background leave field empty.'
                                ],
                                'leftText' => [
                                    'type' => 'section',
                                    'title' => 'Text Section',
                                    'underline' => true,
                                    'fields' => [
                                        'header.row' => [
                                            'type' => 'list',
                                            'label' => 'Text Row',
                                            'fields' => NULL,
                                            '.image' => [
                                                'type' => 'filepicker',
                                                'folder' => '@self',
                                                'label' => 'Photo',
                                                'preview_images' => true,
                                                'accept' => [
                                                    0 => '.png',
                                                    1 => '.jpg'
                                                ],
                                                '.firstColumnTitle' => [
                                                    'type' => 'text',
                                                    'label' => 'First Column Title'
                                                ],
                                                '.firstColumnContent' => [
                                                    'type' => 'textarea',
                                                    'label' => 'First Column Content',
                                                    'description' => 'If using only one column please leave second column fields empty.'
                                                ],
                                                '.secondColumnTitle' => [
                                                    'type' => 'text',
                                                    'label' => 'Second Column Title'
                                                ],
                                                '.secondColumnContent' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Second Column Content'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
