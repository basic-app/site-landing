<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Entities;

use BasicApp\Core\SettingsEntity;

class SiteAbout extends SettingsEntity
{
    protected $attributes = [
        'title' => null,
        'content_html' => null
    ];

    public function rules() : array
    {
        return [
            'title' => [
                'label' => 'Admin.Site About Title',
                'rules' => ['max_length[255]', 'permit_empty']
            ],
            'content_html' => [
                'label' => 'Admin.Site About Content (HTML)',
                'rules' => ['max_length[65535]', 'permit_empty']
            ]
        ];
    }
}