<?php

/**
 * The plugin bootstrap file.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 * 
 * Plugin Name: Wordpress Scaffolding Default Theme Register
 * Description: If you want to load the wordpress default theme just enable this plugin.
 * Version: 1.0.0
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Author: Joshua Clifford Reyes <reyesjoshuaclifford@gmail.com>
 * Author URI: https://lorddashme.github.oi/
 * Text Domain: wordpress-scaffolding-default-theme-register
 * Domain Path: /languages
 */

if (! defined('ABSPATH')) { exit(); }

register_theme_directory(ABSPATH . 'wp-content/themes');
