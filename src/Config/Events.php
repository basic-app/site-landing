<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Config;

use BasicApp\Admin\Events\AdminMenu;
use BasicApp\Site\Events\SiteMenu;

SiteMenu::on(static function(SiteMenu $event) : void {

    $settings = service('settings')->getMany([
        'SiteAbout.title',
        'SiteServices.title',
        'SiteContactUs.title'
    ]);

    if ($settings['SiteAbout.title'] ?? null)
    {
        $event->items['about'] = [
            'label' => $settings['SiteAbout.title'],
            'url' => '#about'
        ];
    }

    if ($settings['SiteServices.title'] ?? null)
    {
        $event->items['services'] = [
            'label' => $settings['SiteServices.title'],
            'url' => '#services'
        ];
    }

    if ($settings['SiteContactUs.title'] ?? null)
    {
        $event->items['contact'] = [
            'label' => $settings['SiteContactUs.title'],
            'url' => '#contact'
        ];
    }
});

AdminMenu::on(static function(AdminMenu $event) : void {
    $event->items[lang('Admin.Cells')]['site-hero'] = [
        'label' => lang('Admin.Site Hero'),
        'url' => site_url('admin/site-hero'),
        'icon' => 'fa-tv'
    ];

    $event->items[lang('Admin.Cells')]['site-about'] = [
        'label' => lang('Admin.Site About'),
        'url' => site_url('admin/site-about'),
        'icon' => 'fa-circle-info'
    ];

    $event->items[lang('Admin.Cells')]['site-services'] = [
        'label' => lang('Admin.Site Services'),
        'url' => site_url('admin/site-services'),
        'icon' => 'fa-list'
    ];
    
    $event->items[lang('Admin.Cells')]['site-contact-us'] = [
        'label' => lang('Admin.Site Contact Us'),
        'url' => site_url('admin/site-contact-us'),
        'icon' => 'fa-regular fa-envelope'
    ];
});