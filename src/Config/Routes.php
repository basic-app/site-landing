<?php
declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$routes->match(['GET', 'POST'], 'admin/site-hero', '\BasicApp\SiteLanding\Controllers\Admin\SiteHeroController::index');