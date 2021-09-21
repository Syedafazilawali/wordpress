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
define( 'DB_NAME', 'sfw' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j2=8T@LUaN{-u@@sn!nP265oA0-o7<MBG50[7%QRxRtgaV,W8(@oqFTQ27a]HSpx' );
define( 'SECURE_AUTH_KEY',  ' i53GX;&`R5Q Yt,:Ni)iQR:X]4u<kPz.cC#0sG@MbC^JBuYl3~$_Ro?+h@Y{x^D' );
define( 'LOGGED_IN_KEY',    'oAp1R,pxDT*fpXQ]9ORG#9ZmrYUF]`GfKfj*e683;j* :Kz%4tFfgfSQL;?;aVA.' );
define( 'NONCE_KEY',        '<3U]TE7xQtxuHoRZmejP|gmin1&MZtVR!$^)i5jhz8^6{J` =_`JIAT6A]Y4lz!2' );
define( 'AUTH_SALT',        'Px,ym+2Ik4~T^#6_*p`aR[o$ yE%ul[Pj>Ru2e$?<KLv|]m$ro+GlGU,m-!mZd%g' );
define( 'SECURE_AUTH_SALT', ',e50qD}bY$)+Uy=I)xxXV6>GatA_>lH}J8!m]I~.GaUhFOgMb|Idt(|YtmE]|I0,' );
define( 'LOGGED_IN_SALT',   'cC@yS4VFvJXoy5^gx0DJrzN+GpYdvL_Y^VcLo^yZi*5rc(NlzW/;k^FaOw5`LF+E' );
define( 'NONCE_SALT',       'p<F~Wgd^t&Ph)^;h6WL@]vwdL]e(Hw0B~IiUUYU<.(DwZ-:VY/repUe]#7Q;UW^(' );

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
