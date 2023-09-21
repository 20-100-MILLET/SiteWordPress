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


define('AUTH_KEY',         'BEixQgIHz8mPVCQmjByzob/DeR1MqfYpbltTFSLQBZwYEpj5AVfMYEs11/OGiXW91y0u7zRaGi6uWLM8yOPDuw==');
define('SECURE_AUTH_KEY',  'O5Ife8/ywjGzC4+ruFTyswDTDnZX9OK2/jgRB40J9hhLF9V6+K2oNEVFmT4FeKJ1PFfB9Nhsi9GpDuOoH4UKIQ==');
define('LOGGED_IN_KEY',    'G2/ZXa0ExFuvRvJw8oO+rYloUlqWDQuV6PAf0WsjevEaI3M0cAdMPziUEBShfSBO4cdjM7IqcpVDJYDODtaDyA==');
define('NONCE_KEY',        'uvaxvCmThTCDPnd3F4IBBflHzy8Na1b91ffa+mjKYz+1719v8LpvJcFxfDnVfhQAZPDMSZhoqxVdLDFZLVXrqw==');
define('AUTH_SALT',        'vQ5Ql3Hk/H+3rFYy6id6CItu27qmdLWLXu1DnVSXkjen1ij72aDtIINoQg0ZrMOfRz2+G2Foh/s2IKuhLAcPPQ==');
define('SECURE_AUTH_SALT', '53ZVF6FiISLJX/UJc6UwXCFQ9+i+UdfBWL0Lnv9FO3pDAWfkcDMin6Aeh6bxdZTMLYSAZuxfN/Q8i8lxbRD0KQ==');
define('LOGGED_IN_SALT',   'yhU0z6UCu+fdAC1M3T7Q+0qPB0ysazYMdZRD9ihEl5QT+RN4A6Lz5s9dGFKFV99MANnOB39pOAJBr2X/Xf+CoA==');
define('NONCE_SALT',       'td9sLpmtZakpSElf7KkPTzwTGBj+6mmG4s9p7aZif9jIfF3I3hGFM8efOTsrOxyJkVxKCDmtHliCyiWQfss7sA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
