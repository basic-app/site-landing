<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Entities;

use BasicApp\Core\SettingsEntity;

class SiteContactUs extends SettingsEntity
{
    protected $attributes = [
        'title' => null,
        'content_html' => null
    ];

    public function rules() : array
    {
        return [
            'title' => [
                'label' => 'Admin.Site Contact Us Title',
                'rules' => ['max_length[255]', 'permit_empty']
            ],
            'content_html' => [
                'label' => 'Admin.Site Contact Us Content (HTML)',
                'rules' => ['max_length[65535]', 'permit_empty']
            ]
        ];
    }
}