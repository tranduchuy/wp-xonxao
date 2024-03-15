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
define( 'DB_NAME', 'u174451059_3bKSi' );

/** Database username */
define( 'DB_USER', 'u174451059_fl9KG' );

/** Database password */
define( 'DB_PASSWORD', 'Gk7U0roBMi' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '_R~u{j(FqYt*PjR5s<j i2J~^]+/+?+6J}&=m(:,>BrzInTu&?F{3fP8}g)+H.01' );
define( 'SECURE_AUTH_KEY',   'P+a^las0kBRoB& d.qkt{&oGL*^ kgF264iCf%!Bi+~QF *_DP9Pkv>zL_aF/LL!' );
define( 'LOGGED_IN_KEY',     '(tpD]nR?#psljsv6+^.KZTw.?zDt@oYbLMyMsi.X5}y1ij[}9FF/~5~{a.E3m1!h' );
define( 'NONCE_KEY',         'OXgoUk&wzGRR8V8r}E]eib2X#,|w!>?L_nnMfdZrJnR!.h<#YtcclZfM>-)H^;vw' );
define( 'AUTH_SALT',         't^!fV?.WT3|0D`0W&ldhZz-D.O$<%$1u9vIstKgWW>~j?~i71c,8]LS:$r;P?H(i' );
define( 'SECURE_AUTH_SALT',  'Eo~V%,<TV^__L:>>*N`#A<qy`~JtjT}h=Or8K6nEuDEqAFwP2,!mpt0ggW^l*>oe' );
define( 'LOGGED_IN_SALT',    ',dy`vNZ1e%cn#J.C(_`]`(<EQhd[TiQgXRko ^R~.8+lYJ{9wwjf h8>|rc?,{kF' );
define( 'NONCE_SALT',        '&aF)p5;9pz193>90yz,(nns}PnE_~r.`$F{t%~z5q!,2T2J5oCLQ5FdT5/uyVNtF' );
define( 'WP_CACHE_KEY_SALT', 'hO1;t=0XRWcd0[0kF-92{}L8d*SVjy+)=c1zYAO/F5G{e]z(yHF/A_!> 0uAV+w&' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
