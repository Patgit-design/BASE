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
define( 'DB_NAME', 'zele_concept_gip_bdd' );

/** Database username */
define( 'DB_USER', 'gzqqrckc_gip_ws' );

/** Database password */
define( 'DB_PASSWORD', '1C::1C11D:~~,C:Zq:' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'SaUmEQ4t/=b9hfn)cL<:@m~t3^y[(;IZ_L93lBy,Tbr[hKf1]3(=J:&2(s5^Xswq' );
define( 'SECURE_AUTH_KEY',  '/MrHz+$]l_Em17o`o#,]NujY(qB(4PM $YQQM a+juc(_yoLRdFhspD1%~>`;X$N' );
define( 'LOGGED_IN_KEY',    'R*T(@(&jxW}sv`IX-:*t0.ZhG@K,nPhGNVxDkJWCjl  _*:(%8ZBLKT3]SJ*4N&n' );
define( 'NONCE_KEY',        'S+M1HSgKnild/vY&#/-#*rx-Pu>G<(%pHwgBv*n`LhWLRO;7SFh8Z{SvC-0WFe1>' );
define( 'AUTH_SALT',        'ze6DAwYO~mfH/Vr~<e|=@PyZv~lG&ej={61W*/%Xc3XBKcKu_0xBTI.AQ/*2C]6w' );
define( 'SECURE_AUTH_SALT', '9AY@Z!)h0yKSnOsFT$3pMp]|ssY03e%ZCA<h5iAcN,@ie-D$G*dS`xDC0XN|-r?=' );
define( 'LOGGED_IN_SALT',   '#8o4V@st.I|_ZQ^dl/^qt8@Bw6*j>W/E<y&wU))GxUOzDRrJ0oP(Q*|.t.d9t[NH' );
define( 'NONCE_SALT',       'Iv=o4Vh%V2yB#wwCE@^_ 5k3{KH)0T~~z0{.<.bN?*$CIDbk9N98 #:eAZ-hA?<b' );

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
