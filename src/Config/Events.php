<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Config;

use BasicApp\Admin\Events\AdminMenu;
use BasicApp\Site\Events\SiteMenu;

SiteMenu::on(static function(SiteMenu $event) : void {
    $event->items['about'] = [
        'label' => lang('Site.About'),
        'url' => '#about'
    ];

    $event->items['services'] = [
        'label' => lang('Site.Services'),
        'url' => '#services'
    ];

    $event->items['contact'] = [
        'label' => lang('Site.Contact Us'),
        'url' => '#contact'
    ];
});

AdminMenu::on(static function(AdminMenu $event) : void {
    $event->items[lang('Admin.Cells')]['site-hero'] = [
        'label' => lang('Admin.Site Hero'),
        'url' => site_url('admin/site-hero'),
        'icon' => ['icon' => 'fa-tv']
    ];

    $event->items[lang('Admin.Cells')]['site-about'] = [
        'label' => lang('Admin.Site About'),
        'url' => site_url('admin/site-about'),
        'icon' => ['icon' => 'fa-circle-info']
    ];

    $event->items[lang('Admin.Cells')]['site-services'] = [
        'label' => lang('Admin.Site Services'),
        'url' => site_url('admin/site-services'),
        'icon' => ['icon' => 'fa-list']
    ];
    
    $event->items[lang('Admin.Cells')]['site-contact-us'] = [
        'label' => lang('Admin.Site Contact Us'),
        'url' => site_url('admin/site-contact-us'),
        'icon' => ['icon' => 'fa-regular fa-envelope']
    ];
});