<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'KKOf4gPwOqnPkLv0jMp5xCM4Yf1RFKcWdjMKMVEPxMTRwA5kWehpclTwe1uUxn0+2wxL04T4X9o9jCbSLn0u/w==');
define('SECURE_AUTH_KEY',  'JKJ7/XcP7iZTQeafYJcSfSjkXOaVkClN7kr+KQa+GOKdbZGQecmJE6Zt5G66CCbAy66m8jD3sQQiUrTjodNSXg==');
define('LOGGED_IN_KEY',    'Nd4AM67sECjoXhIgUje4m7CwvSnoCVllPUjR+x2Kdh98AHrtvJO92u4zncOU0Cp5ySqGPbd2VP7R3UJHRHsFvg==');
define('NONCE_KEY',        '5LhW8/9MY/dRWuiLwrq43rKp0vFjfyQKsRF3v5bP9qUI2Gv5B2OrxXkD3QowI96hKulrKgZA6GR8GNjS1nAbww==');
define('AUTH_SALT',        'iWz8Gmw0AoH0tkDV6+zhUBf7JiXd2hQ/3znUsVW8XySttF3UmxcxTEK3kDrbJAjOwja81obiZ6YDW5rK98mvvQ==');
define('SECURE_AUTH_SALT', '57RnybE5HCXs1fCgSdtkA3gC6f6GnnyLx6vj7SPwpuXVxEpxIjX4dtANhD1CXTfwulhTHqAylx1bcDxrk+g+8g==');
define('LOGGED_IN_SALT',   'wKfkP/ElTnsNq+ZscxOL0sO/nO0X1xXNbehrE5YCVjIGCpM0byYNgeQ3fJMc4x/EdVrKAlc8P8+qoj+9OuosVw==');
define('NONCE_SALT',       'vtW3UzbMBhm+MieeQsmDVnvwOAx/6ekE1g47/OvRPlWlaQTjdXTXYW84Y/7tT5mjJvK7jeTNmkltOpdIVinlxg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
