<?php

/**
 * The plugin bootstrap file.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 * 
 * Plugin Name: Wordpress Scaffolding Admin Menu Orders
 * Description: If you want to customize the wordpress admin menu orders.
 * Version: 1.0.0
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Author: Joshua Clifford Reyes <reyesjoshuaclifford@gmail.com>
 * Author URI: https://lorddashme.github.oi/
 * Text Domain: wordpress-scaffolding-admin-menu-orders
 * Domain Path: /languages
 */

namespace LordDashMe\WordpressScaffolding\AdminMenuOrders;

if (! defined('ABSPATH')) { exit(); }

use function LordDashMe\WordpressScaffolding\AdminMenuOrders\overrideMenuOrder;
use function LordDashMe\WordpressScaffolding\AdminMenuOrders\pluginsOrder;

function overrideMenuOrder($menuOrder) 
{
    if (! $menuOrder) {
        return true;
    }
    
    $pluginsOrder = pluginsOrder();

    foreach ($pluginsOrder as $plugin) {
        
        $key = \array_search($plugin, $menuOrder);
        
        if ($key !== false) {
            unset($menuOrder[$key]);
        }
    }

    return \array_merge($menuOrder, $pluginsOrder);
}

function pluginsOrder()
{
    return array(
        'separator-last',
    );
}

\add_filter('menu_order', function ($menuOrder) {
    return overrideMenuOrder($menuOrder);
}, 10, 1);

\add_filter('custom_menu_order', function ($menuOrder) {
    return overrideMenuOrder($menuOrder);
}, 10, 1);
