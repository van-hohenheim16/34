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
define( 'DB_NAME', 'jcbjgiyj_wp66' );

/** Database username */
define( 'DB_USER', 'jcbjgiyj_wp66' );

/** Database password */
define( 'DB_PASSWORD', 'g(m807S[p2' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '59npvhkdstibky5khajkkoxhd8dtdk0ald9u5icoxr3ma90rwrfh0vgthjgwwgb0' );
define( 'SECURE_AUTH_KEY',  'vgippchlnaiygyodqevecfpm7x8oq1wimci2iohr9jh48gzlhw4e45visebtwfnd' );
define( 'LOGGED_IN_KEY',    '2a36tmwc0jbwpfdplymzphkd4c8e0nueh8eujdqcnjqqeepesemfmcpcocytge9s' );
define( 'NONCE_KEY',        'vqnomd2ixq6smpvb5hufjujy1lelix4kqafcgvnzejtgeltqzehcqvoa3ivazvad' );
define( 'AUTH_SALT',        '6zthfbyuczdg0yqjln39ph9jksbqg6ju1vnppkqkelenpbo0r91lq1kumqf8vccu' );
define( 'SECURE_AUTH_SALT', 'wukfbfqgmayrwdxaduwifyfz963w6j2qv5kaso98dt0zpfv4mw5cw2k2zzktfxi6' );
define( 'LOGGED_IN_SALT',   'fi8x5hksceuicjskjshfcdfbzuyr8xtys9la2buufg3wy9qypjblxckflkoue4be' );
define( 'NONCE_SALT',       'idxc0xp99x1dkhlraxdsp4qhrdj4mnc2w3kwfxnf4cdfckin40jvikzojgsnv404' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpy2_';

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
