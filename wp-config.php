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
define( 'DB_NAME', 'minefop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Kkl#q!C.|&I7g{JtyfCX9~30/yPmWSgjt*6<C!/IpI-unk?^/HQW1<jK5xgJ:Uf&' );
define( 'SECURE_AUTH_KEY',  'G/$a}S~XaWxDoplOkDovqIv43qNr?1r4&HO*D=vg@iZ%?$o>/x c;GdshirvFbA@' );
define( 'LOGGED_IN_KEY',    '~l$M_9mOj2Fp!|i)b;wu[nl{G(Dff}!F|~_61Ug>=+?FT`W>-LS.E6er)p !(]ir' );
define( 'NONCE_KEY',        'Q=kEyIhx387<`ZzR(r%W;WXrV,B!R3Wx+F5me~Nu*}s -,1pf.|:Pd>:+V7?Ui`B' );
define( 'AUTH_SALT',        'ZCK{s,H8E7G7B^P@F9<J*pdeMPw|zymvXHW=^{1Yd4v4IK|5_#h.jZ4Hc#Qg!} Y' );
define( 'SECURE_AUTH_SALT', ',#q}c!ZR2|W+<|Kb`-t(q(]]6Nyso%1SOzx#_3DgTqTv3;0BSH.R:-Rag1^Z35W`' );
define( 'LOGGED_IN_SALT',   '9~Ew~9FE5jG>5;uP~/4gt@;@VL[ ;N;NgP?sh&l+a0o_bm=7^.AfH#W-sQ AO=%y' );
define( 'NONCE_SALT',       '9nB|WmHdSPy(EOK71W-GVaVUO:<l^P-AE3ip W1M@pqD0T6Rd(+1;sW@GOsG0>T*' );

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
