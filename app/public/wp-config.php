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
define('AUTH_KEY',         'OlmUf9ExvdrWhQ63d4aHAVVK63/9THU5/X2ImYUTSwiLa54+1mSPJ4VbNztFDC3GOUc4s+uIEjxzv3DQhpDSsg==');
define('SECURE_AUTH_KEY',  'iTp1iRX7DCl4kTWythmX8LmIRKT0xRZGUvmnRIGWRB+n8XHVS2zfGBxq++nVrGobM52F9ysICMAczmYjs36smQ==');
define('LOGGED_IN_KEY',    'GKDrHbtLi+jtFuW06BM9WKtaHrY6cBUn6rtKEFCQZmwxGjnP7ijWoSi11Gyqobkpz5FAIk8Z+hAtqXz02hIpgw==');
define('NONCE_KEY',        'hlQfP15z0/7cgXP9Tb7+U82RRayjVohDScQPwtozvY4Rg6T7iTcWVFhO7c44fog00LSRhQD6JuBBZ/KzQWrlYw==');
define('AUTH_SALT',        'olsLsgGM94FM1805qLRfPtAj8gUvbbIP+tXGdMDUhcy56AfMcmQ8i4k7BTbCPL6LwDRikfq39SviWnt6ejTpyA==');
define('SECURE_AUTH_SALT', 'KDEI5US9lC0YYEVgntd0d2KlVMw5zYkDOkdr7E9lhAah/TgpQGz1kaXvX8p6jrdmYMB9IkwkGIPA8vFcH17PpQ==');
define('LOGGED_IN_SALT',   'LvgNPwK3mudl7W51pvtEz22eEO/n50Q6mf7Iw+zhwZTkybUc0DzWL9yaigAOt7a+eu6UV6y0zY05DEow+2aKbA==');
define('NONCE_SALT',       'eEBumUQ9Os5kjF+XcnXJlpTFY9PZ0I/SzSV7cYpIWT4qjdPjp0Hd5aPdh/s0A+jHQpvm8OQDRbJBt9ES/wlyWA==');

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
