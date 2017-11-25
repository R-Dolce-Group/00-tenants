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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'XjUOh73tTbwrj6pxiW+4ZHbfU/DdwhdHWNakNu8AO/mMZS4OR9lcp5zl6c3V8kXQ+vUzOLk1goCgG3dSc67EsQ==');
define('SECURE_AUTH_KEY',  'sg24nWznj1SZak4zYM1TK2mdGXoktqyMvdSxEy9EJvR2ekuyCGu8l84b9cTzhcU9LsvcJjzzpY900//9NK+BPA==');
define('LOGGED_IN_KEY',    'ynE0vKrBK6PtxeLb/hZRVMsIb7ydHfGVd9jJdGYtN0lRxwzOzolH+NThuNl1A/3MAuiBnXjzVsp60B3WY0uIYQ==');
define('NONCE_KEY',        '04APP1hL8FjDwWFsfVoDRKsIV0N3NoivxqNX6e8nNvW0vS8+ek4cUAnQ8ABDjTQnBbiH9jn4TD4RfJYUP4n+2Q==');
define('AUTH_SALT',        'dQaRNqJl5CeGeiOrWxfXFgC+x34wY+U4GFdcwOArqaH2B6iZECsr0TjA/LANZCWHZZM8LNwyf+iShVf/eQLB+g==');
define('SECURE_AUTH_SALT', 'qJt+EYLV8nlp4X1LqO+6s3lkVnJaDTtXO660uAzhTOpYWUqdsplCcbwVGwpwzAWajA02H9xGWAZmGGlYzapUcg==');
define('LOGGED_IN_SALT',   'rqMBRjSPt72KiYgqXvG75jndpQjXG+DVw+zTbG36eXB0yEfVmR21LkxiKNBcX+Om9Fwnq4BiPBrMoW70XMrwhg==');
define('NONCE_SALT',       'JESCekMPSBqXVRoOOmr/XNzFaO55GpbSdSa5IlahCq7D5TqLOIVvwPUBS2PRw/NKTl6G2qrxuV9H4Leta14C8g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
