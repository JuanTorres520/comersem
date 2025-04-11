<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i10171606_wmqh1' );

/** Database username */
define( 'DB_USER', 'i10171606_wmqh1' );

/** Database password */
define( 'DB_PASSWORD', 'U.wkHOJ4Z8vesF2eCbg50' );

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
define('AUTH_KEY',         'vgxsIlKHcb5cPT9dL5Gcdh8SNcdAgWH6UAn6FIviD1R5xEoS1j1Nmes7ZDWAmzlw');
define('SECURE_AUTH_KEY',  'SeSGlu9qvliWDLCnQSUeqBpXycX61H887Af6FOY0V2i5ax2Ddn4feL2WpPXebQrb');
define('LOGGED_IN_KEY',    'xYIaHuH8KUZKvh2qLZDqvxkInXYpVcjgYNUHaGxD3ZxGFVtiWRJokeOLlIW7ebMJ');
define('NONCE_KEY',        'SvfJ1aLoShmPa8v21UH9ldKxjAy2L9WnPCvyWY0CWoA76lSyjQgw1I8BZ9Ek7FS1');
define('AUTH_SALT',        'yA6JmoyclpBO3occGciWdEp4zXv0vEhy0tA4D7xGF07MHzOJl9bBQdm0W4INQ3B5');
define('SECURE_AUTH_SALT', '9AR9Em8zYd2ap3ah2WsI5LrWdAGYCGtDhu26yiuCUzb2sftsfqN07HcwYsno99Or');
define('LOGGED_IN_SALT',   '4ateckfptr6LOXuSpM1caE12qcwPpLLAzTPZKULMMvVHp6m7pSImWEG8dXH1IllO');
define('NONCE_SALT',       'W9pHB7irpUbsZyDFZxzRru7n0GBi2mxrwmbdfDvMdgp4bo8MOTFUEu8tlefCbTMw');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'o4b7_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
