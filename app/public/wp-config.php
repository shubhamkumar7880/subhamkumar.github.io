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
define('AUTH_KEY',         'kI4yHKPQjb83wYGcAzppGpe1MvGWhpCariXrodpQLC02av3zg9SG7CEV8ZMwlsJDj73d6ZXslaKdo+b1PD6IjA==');
define('SECURE_AUTH_KEY',  'Q7+jYOD8PL9L9G29/cYEG7M1TgVfDH88b1FwcFpui99Jz90QIb86f+Z0zNcPRoh68b4KrVpevP2R7DhM8SIaKg==');
define('LOGGED_IN_KEY',    '20Lz2OSEAUt6dtVNPaUxB+VL0yN00K904owEbYksEmHYOu8BkgELecv7OD2WPd8NzVfaWeuIqZPpPhwzCIxDEA==');
define('NONCE_KEY',        'D+oYPRLml+FYMXlcqwufKc5FNXedrdqCDPwF4iAPUJyNT4AJoRYYlg8IC5w9Wc00ECT+3R0sCC+cmiC+XwVI3A==');
define('AUTH_SALT',        'SZVeEtpL6AshUF3SmggdYw+ukEEj0GEA+OOAKQw1KtOYxj+HsZZgvqpAmn00w/rOtF+YWtCZHXRUDUWal4vzSA==');
define('SECURE_AUTH_SALT', 'wMxJo40wCkXbTgY8454+PuqyMu6XV+2kuwJ57l8SN8wi2bkKFmaqHcefmWQuzATdlc3JErVsWn9wrU81DCJAwA==');
define('LOGGED_IN_SALT',   'qzJBgWobC0S1gxhD3KWihcs1aCIw8kGGGoWfgN5Jh3VRVaZEe5/p+SsCzZvKsD2hWy5iIQ4TABYrK1kJDdSYBQ==');
define('NONCE_SALT',       'rzndjivnopRKVmpW9eopn7iOram8DtlxwUMS861HmhbKGTSs+Ld/Ci4+EXSpVlgHNmkgSREnBVEl026ORBCcNQ==');

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
