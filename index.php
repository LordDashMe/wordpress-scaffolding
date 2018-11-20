<?php

$wordpressScaffoldingMaintenancePage = dirname( __FILE__ ) . '/maintenance.php';

if (file_exists($wordpressScaffoldingMaintenancePage)) {
    require_once $wordpressScaffoldingMaintenancePage;
}

/*
|--------------------------------------------------------------------------
| Initialize Wordpress Environment and Template
|--------------------------------------------------------------------------
*/
define('WP_USE_THEMES', true);

require(dirname(__FILE__) . '/wp/wp-blog-header.php');
