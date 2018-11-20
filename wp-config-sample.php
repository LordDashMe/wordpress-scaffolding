<?php

/*
|--------------------------------------------------------------------------
| Wordpress Development Configuration
|--------------------------------------------------------------------------
*/
if (defined('WP_CLI') && WP_CLI) {
    $_SERVER['HTTP_HOST'] = '127.0.0.1';
}

/*
|--------------------------------------------------------------------------
| Wordpress Scaffolding Startup Configuration
|--------------------------------------------------------------------------
*/
require __DIR__ . '/vendor/autoload.php';

$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';

$allowedHosts = array( 
    '127.0.0.1'
);

if (! in_array($_SERVER['HTTP_HOST'], $allowedHosts)) {
    header('HTTP/1.1 404 Not Found'); 
    exit;
}

define('WP_HOMEURL', $protocol . $_SERVER['HTTP_HOST'] . '/');
define('WP_SITEURL', $protocol . $_SERVER['HTTP_HOST'] . '/wp');
define('WP_CONTENT_DIR', dirname(__FILE__) . '/site-content');
define('WP_CONTENT_URL', $protocol . $_SERVER['HTTP_HOST'] . '/site-content');

/*
|--------------------------------------------------------------------------
| Wordpress Database Configuration
|--------------------------------------------------------------------------
*/
define('DB_NAME',     '');
define('DB_USER',     '');
define('DB_PASSWORD', '');
define('DB_HOST',     '');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

$table_prefix  = 'wp_';

/*
|--------------------------------------------------------------------------
| Wordpress Salts and Keys Configuration
|--------------------------------------------------------------------------
*/
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/*
|--------------------------------------------------------------------------
| Wordpress Debug Configuration
|--------------------------------------------------------------------------
*/
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/*
|--------------------------------------------------------------------------
| Wordpress Pre Boostrap Configuration
|--------------------------------------------------------------------------
|
| Define your constant configuration here before executing
| the wordpress core bootstrapping files.
|
*/

/*
|--------------------------------------------------------------------------
| Bootstrap Wordpress Core
|--------------------------------------------------------------------------
*/
if (! defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/wp/');
}

require_once(ABSPATH . 'wp-settings.php');

/*
|--------------------------------------------------------------------------
| Wordpress Post Boostrap Configuration
|--------------------------------------------------------------------------
| Define your constant configuration here after the bootstrap
| process of the wordpress core files.
|
*/
