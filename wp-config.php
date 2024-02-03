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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'searchin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'fV=ZXS;@+.Q+bv<]tR<3U)O#?%*VdsR}s3^vfx<3CRZKel]_NtIe^_nIN?L[702J' );
define( 'SECURE_AUTH_KEY',  'kWV>C0MW4i-z,$eX|n5_GtT+2:,zSwWdb`uexXrOYr--QYH}:4$kaW+xjVK78_#w' );
define( 'LOGGED_IN_KEY',    'eAE-qL%zD<:[D97~Y{#@==-4SNpJ[{obMdgj~;?JbrK$;v~I_d>|OBw/<zS9?zP4' );
define( 'NONCE_KEY',        'Mc>(4R(NM/:IFir ts9Oeqkk#+ww:f.rftR?jv ,z`wf=wycdZn>/)cK2w`0kJ;j' );
define( 'AUTH_SALT',        'PtESRjq)mCJr4]~}}[_.Ik1sDY2A^;$ l@/12zf0[p`9Vl8_%C@Xhu,9dRyvAplr' );
define( 'SECURE_AUTH_SALT', '&aSLVND,9</nIP9NjG[Lc;tnP-io^~~`97S#_7^WGmi3?DgfAj}FK~$M+ln&WCtk' );
define( 'LOGGED_IN_SALT',   '*Q:@<q1]cu~@{5/6Hp?Nz_C:]svSid9uk+fi%^CnORM^_eIh,PEO=JI&U1OO]svE' );
define( 'NONCE_SALT',       ']p3c*rzf N&q*pa{Qx&/2ct@cUuD3{QCd}XMeR%*llD8c=jV.h4w+pgFz-RGIj+2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
