<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Entities;

use BasicApp\Core\SettingsEntity;

class SiteServices extends SettingsEntity
{
    protected $attributes = [
        'title' => null,
        'content_html' => null
    ];

    public function rules() : array
    {
        return [
            'title' => [
                'label' => 'Admin.Site Services Title',
                'rules' => ['max_length[255]', 'required']
            ],
            'content_html' => [
                'label' => 'Admin.Site Services Content (HTML)',
                'rules' => ['max_length[65535]', 'required']
            ]
        ];
    }
}