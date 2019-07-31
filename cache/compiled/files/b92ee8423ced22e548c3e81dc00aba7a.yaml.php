<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/FoWcuriosities/user/plugins/flex-directory/blueprints/entries.yaml',
    'modified' => 1564391220,
    'data' => [
        'title' => 'Curiositées',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'title' => [
                    'label' => 'Titre de la curiosité',
                    'type' => 'text',
                    'style' => 'vertical',
                    'size' => 'medium',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'numero' => [
                    'label' => 'Numéro de la curiosité',
                    'type' => 'number',
                    'size' => 'small',
                    'style' => 'vertical',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'image_cover' => [
                    'label' => 'Image',
                    'name' => 'image_cover',
                    'type' => 'file',
                    'destination' => 'user/images/curiosities/',
                    'random_name' => true,
                    'multiple' => false,
                    'size' => 'medium',
                    'style' => 'vertical',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'description' => [
                    'label' => 'Description de la curiosité',
                    'type' => 'tinymce',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'why' => [
                    'label' => 'Pourquoi ca nous interpelle sur le futur du travail ?',
                    'type' => 'tinymce'
                ],
                'learnmore' => [
                    'label' => 'Sources, Pour en savoir plus...',
                    'type' => 'tinymce'
                ],
                'tools_section' => [
                    'type' => 'section',
                    'field_classes' => 'overlay bottom',
                    'fields' => [
                        '_post_entries_save' => [
                            'label' => 'PLUGIN_FLEX_DIRECTORY.AFTER_SAVE',
                            'type' => 'save-redirect',
                            'default' => 'list'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
