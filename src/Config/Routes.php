<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->match(['GET', 'POST'], 'admin/site-hero', '\BasicApp\SiteLanding\Controllers\Admin\SiteHeroController::index');
