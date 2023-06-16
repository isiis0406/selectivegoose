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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gooseshoplocal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'yHPn0dO49X7ahLQEN7T3B9JFc3GSnI7RqkXufoKVNhP6BkzhgXNDsxCUnPtW3i6Q' );
define( 'SECURE_AUTH_KEY',  'mK7kAUMEEKVjc5Cc55kJ5BKiC70DRULV8VAzeHF5Su1rXQ61PG9ED6BOm65C5o7h' );
define( 'LOGGED_IN_KEY',    'fKtftQi0CvmaN2CFhfIHhKG7cd1Cbe5XQrjFKL1HSl6ddccfbNGUn7BreNGobwUv' );
define( 'NONCE_KEY',        'I94aLI1HP5iHBVlnaJmuqEnWspUuaI3QNabyIGDDQcR1EP3Pp10vl5Z7EsD7HxjW' );
define( 'AUTH_SALT',        'ckZasezr6iCOa3iJwCyEJqFCRKBWBpGs0ofW6xsHPpanveLwA5gzen38kxdBUh7Z' );
define( 'SECURE_AUTH_SALT', '1QlR9eyjT6STrkBjnAhvvWQRWs7bz9ZjDsmvqNdYPbGrwhfp9CRoekZGsXZZYfLk' );
define( 'LOGGED_IN_SALT',   'ygSfoKMdYCygdSvS3iifNq9E3rkjpIjA3amreAA9SxHeyHKabz2C8YtKtKCmvyGK' );
define( 'NONCE_SALT',       'TR30RJ6FGzutATL5ybqo4NjrXs7p6SXLxuWLhODsVo51EK97GyDwC58kLvVceOUM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
