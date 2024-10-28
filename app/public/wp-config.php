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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '}2#fxicWB>.&hJaL%,JW|*3sW9l`d#Ua6SI=FEp0B]hzPl1U@^eUdO3_G|}.M=_9' );
define( 'SECURE_AUTH_KEY',   'dOoe[#qJ(r:0vxRw3Pt_YK$J|w#ks[m)xGJs?~_=Rqo/?hx;k-&$Z Rgr&vE9NyK' );
define( 'LOGGED_IN_KEY',     '<}|RAxA}_*38BYZf5QF yyp~j]UMT!8KL$k^uQ<Bw(vrzG?P`0;s}NG-r#BE!sS&' );
define( 'NONCE_KEY',         '=Lh$(1Tqh.Pep(Cx#GS[g^%o!Gn3Q)e1&R2Y!&Ymo(]]e_zcG[s,^lf[sgUPT2|]' );
define( 'AUTH_SALT',         '&}Lk,)gKNr%U3R_rs~fw&l9*t$P78v2^O9RD~G|:<l.c1Kz~V*lpyPi~s0*ZR-]g' );
define( 'SECURE_AUTH_SALT',  '=ryahjbwrbgItG1a[pTxbf!I)/SQU5O (cEY]_^doED AHj[x`N{sv4zZmptUCXO' );
define( 'LOGGED_IN_SALT',    '#3u~#1V!:t[fH!X]5}q_FH_vmiC+LK-Vf|0IknfF&qo&SKrT@Y{fUG&.PFk(X}8M' );
define( 'NONCE_SALT',        '7:&O]oUtSLp}T-78xzdG(6jCj(CNM,W;)E}ptaE4/LT>25?^l$%a>/F6AkAvA/o[' );
define( 'WP_CACHE_KEY_SALT', 'e67$?X[o!:`xf-L^,QG:F9U`(^-uV} w!Sl.%i@xBJAAke8=5l*V T)d:7mCU5e4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
