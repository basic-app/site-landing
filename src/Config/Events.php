<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Config;

use BasicApp\Admin\Events\AdminMenu;
use BasicApp\Site\Events\SiteMenu;
use BasicApp\Block\Models\Blocks;

SiteMenu::on(static function(SiteMenu $event) : void {

    $blocksModel = model(Blocks::class);

    $blocks = $blocksModel
        ->where('block_active', 1)
        ->orderBy('block_sort', 'ASC')
        ->findAll();

    foreach($blocks as $block)
    {
        $event->items[$block->block_uid] = [
            'label' => $block->block_name,
            'url' => '#' . $block->block_uid
        ];
    }
});

AdminMenu::on(static function(AdminMenu $event) : void {
    $event->items['Cells']['site-hero'] = [
        'label' => lang('Admin.Site Hero'),
        'url' => site_url('admin/site-hero'),
        'icon' => 'fa-tv'
    ];
});