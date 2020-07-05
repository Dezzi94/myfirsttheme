<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myfirsttheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hcGWxndbMsC52KMF1DWebaOW6wHHpB7z4Z5dtsXyrvCfZx8Y26op5xxyVTKLnbQn' );
define( 'SECURE_AUTH_KEY',  'u2e8eb9A5pX7b7ubEcchS9cPsVfSGeBl3EVUqvlk1GqEPsExGryFMWV4nlevgsIT' );
define( 'LOGGED_IN_KEY',    'c2oVOXzTNRrwnV1KFdTzxalCPLjgc85kb1ZPottjsIdCFE8lk3A9IWfx33Zjc33e' );
define( 'NONCE_KEY',        'QOWkPIl3H1AHnkz7mqLieusiwYQXh9REjR9dUu3bOBjalQM66KzrEB0Ym3GgM3ed' );
define( 'AUTH_SALT',        'A7vX2pFOL8TFGnQkpQj8lrlyJAJoKKD0F0U9CkcpbyXqhl6aF1uakm9tqkeArcz6' );
define( 'SECURE_AUTH_SALT', 'uwMVelbD7vaBRwhFHiCOcKb6LTvItnKg6TGEiSifzhdxhEMRWvFhzVyKHMSRwZQ7' );
define( 'LOGGED_IN_SALT',   'x7MfqwVwIapwSKT9fMHkMrXUCSbWs1d2z4tJX7nHXO5vnNQaTg5LmiqNdoC53n5g' );
define( 'NONCE_SALT',       'Cv7D2lvCmu33EdJdfGkewZjzEZEJTRkutHtk1hEgmHs4SHMzNR9J53YcYrZ6evF3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
