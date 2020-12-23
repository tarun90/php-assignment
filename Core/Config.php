<?php
/**
 * All Global constant
 */

session_start();

/* Enable or disable error reporting  */
$error_display = 1;
if ($error_display) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

/**
 * Assign site name
 */
define('SITE_NAME', 'Core PHP Assignment');

/**
 * Assign site slug
 */
define('SITE_SLUG', 'core-php-assignment');

/**
 * Assign site url
 */
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . SITE_SLUG . '/');

/**
 * Assign site path
 */
define('SITE_PATH', $_SERVER["DOCUMENT_ROOT"] . '/' . SITE_SLUG . '/');

/**
 * Assign assets path
 */
define('ASSETS_URL', SITE_URL . 'public/');

/* Database connection */
/**
 * Mysql Database Host
 */
define('DB_HOST', 'localhost');

/**
 * Mysql Database Username
 */
define('DB_USERNAME', 'root');

/**
 * Mysql Database Password
 */
define('DB_PASSWORD', 'elsneradmin');

/**
 * Mysql Database Name
 */
define('DB_NAME', 'test_db');