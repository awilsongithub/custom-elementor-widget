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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ujDpy8VHN+AG1UHcK9wIgUSpCStcvPTDggevMOKXYBiLxBiBV9LHXMAKeCHOhLSq0myoNBB7JkULdF/oH4Lqtg==');
define('SECURE_AUTH_KEY',  '3hprC9OrXcAakyz6KbEMoXA/HOPqIkICK2HQDN8hqubEwZN/t3XgXYtjqIyNpDkh1R09icesIN/5wj1VOdFW0g==');
define('LOGGED_IN_KEY',    'NhUAIKagQBR+JK+5m0bORQbwua/UzZ3sob7Y2Qu6GPUpxbsca33zcNcOmTv96qWVWSyBbAEHq5GNtc2Ea1ZzPQ==');
define('NONCE_KEY',        'sfOSBnDNra3hBOPeMLuoqW2tDw1wiGrVFEWfKsq9VNzihY1r3UE2j1FnAcq02ZsdeCQsa4/F88DK5pR1sb7zXA==');
define('AUTH_SALT',        'OgG/yWXQXEHatlWJ9YvD/ly8J8PM3kUSOrTNP0Ti5oH+qSjX4N0PZCI1JsZFBbYf7LLIt2pzle+/kIZzEJ6/kw==');
define('SECURE_AUTH_SALT', '46Yy2gKpI+W49kszAkuWSnVzPpSclyPUvqk/mq3O8khUakEJhw5O5l4yLwOQ1jeVN+lopLzaMT/7sEcb3Tz3Lw==');
define('LOGGED_IN_SALT',   '9pgd9aTY0pw4jvbXj5FjYxmdpTDvq8MVgR+mQLA2OKGTU4ld7pEl75xyCNrVBvf7Kz87wOzfZ0IaTYnUepV8hA==');
define('NONCE_SALT',       '1xz009cYb1fuhuM3UiKoTussasvekCHcYFx7yQp3WKrKiXKs/hmSvRMIXq9UAr7iM4ePHD5clEy/GBhPZU5F/Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
