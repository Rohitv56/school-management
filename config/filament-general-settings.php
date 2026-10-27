<?php

use Joaopaulolndev\FilamentGeneralSettings\Enums\TypeFieldEnum;

return [
    'show_application_tab' => true,
    'show_logo_and_favicon' => true,
    'show_analytics_tab' => true,
    'show_seo_tab' => true,
    'show_email_tab' => true,
    'show_social_networks_tab' => true,
    'expiration_cache_config_time' => 60,
    'show_custom_tabs' => true,
    'custom_tabs' => [
        'more_configs' => [
            'label' => 'More Configs',
            'icon' => 'heroicon-o-plus-circle',
            'columns' => 1,
            'fields' => [
                'default_sms' => [
                    'type' => TypeFieldEnum::Select->value,
                    'label' => 'Default Message Type',
                    'placeholder' => 'Default Message Type',
                    'required' => true,
                    'options' => [
                        'sms' => 'SMS',
                        'wp' => 'WhatsApp'
                    ],
                    'default' => 'sms'
                ],
                'currency' => [
                    'type' => TypeFieldEnum::Text->value,
                    'label' => 'Curency',
                    'placeholder' => 'Curency',
                    'required' => true,
                    'rules' => 'required|string|max:255',
                ],
                'address' => [
                    'label' => 'Address',
                    'type' => TypeFieldEnum::Textarea->value,
                    'placeholder' => 'Address',
                    'required' => true,
                    'rules' => 'required|string|max:255',
                    'rows' => 3,
                ],
                'id_card_slogan' => [
                    'type' => TypeFieldEnum::Text->value,
                    'label' => 'ID Card Slogan',
                    'placeholder' => 'ID Card Slogan',
                    'required' => true,
                    'rules' => 'required|string|max:255',
                ],
                'employee_id_card_slogan' => [
                    'type' => TypeFieldEnum::Text->value,
                    'label' => 'Employee ID Card Slogan',
                    'placeholder' => 'Employee ID Card Slogan',
                    'required' => true,
                    'rules' => 'required|string|max:255',
                ],
                'authorized_signature' => [
                    'type' => TypeFieldEnum::Text->value,
                    'label' => 'Authorized Sign',
                    'placeholder' => 'Authorized Sign',
                    'required' => true,
                    'rules' => 'required|string|max:255',
                ],
                'card_footer_text' => [
                    'type' => TypeFieldEnum::Textarea->value,
                    'label' => 'ID Card Footer Text',
                    'placeholder' => 'ID Card Footer Text',
                    'required' => true,
                    'rows' => 3,
                    'rules' => 'required|string|max:255',
                ],
                'employee_id_card_footer_text' => [
                    'type' => TypeFieldEnum::Textarea->value,
                    'label' => 'Employee ID Card Footer Text',
                    'placeholder' => 'Employee ID Card Footer Text',
                    'required' => true,
                    'rows' => 3,
                    'rules' => 'required|string|max:255',
                ],
            ]
        ],
    ]
];
