<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$routes->match(['GET', 'POST'], 'admin/site-hero', '\BasicApp\SiteLanding\Controllers\Admin\SiteHeroController::index');
$routes->match(['GET', 'POST'], 'admin/site-about', '\BasicApp\SiteLanding\Controllers\Admin\SiteAboutController::index');
$routes->match(['GET', 'POST'], 'admin/site-services', '\BasicApp\SiteLanding\Controllers\Admin\SiteServicesController::index');
$routes->match(['GET', 'POST'], 'admin/site-contact-us', '\BasicApp\SiteLanding\Controllers\Admin\SiteContactUsController::index');
