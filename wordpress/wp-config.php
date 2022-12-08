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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'cp)*!w96[1Bk_NOvL|N=>sUi?,&x6V0mUnq@;qO/${QJ[g[H wSiet->P96hSi@(' );
define( 'SECURE_AUTH_KEY',  'KDbOiI|eBrPCG_jeeK,smhrZ,F)=#5{`3?([_fX]D9s%I*6$7xTHxr$JHE8Rj%3{' );
define( 'LOGGED_IN_KEY',    '0C~#aXJu0x;bnk[v4zzK9Agg,,Ji#bLroDpwoQ8x0U@ qDPfCfp0oWh,?gl Dg,M' );
define( 'NONCE_KEY',        '[PbXKyR8s}x)F7ES2+qd;nM[LGXc=SY5$6~pK14[5Bm9DMBZm6@t]ZZP7DF1m,pk' );
define( 'AUTH_SALT',        'q)cMr?P;PzP|kRO.i1{LuL5|9l/~4]`!Z(55{5^@zWOT$.$xh/rtfYxE*ZjofG^=' );
define( 'SECURE_AUTH_SALT', '5of:*NyZf:k=p}!:GG`NCXe*r?;Gz>/|J*p0h|aJVA4@mJMJWdNTt>`nA!D@~$]f' );
define( 'LOGGED_IN_SALT',   'l3#@`K0#oWmt>wXK]/pX&Qcn?yhiJNt~Y#TTZy;:M2$|2Qt)%![}_:lt)ag /QEe' );
define( 'NONCE_SALT',       '?}2aq`y{h2>WK%1Yx})=V GM 6`l^_.v.{ly8W,d2:UE*cvI7#?OV7-B}dO6jAQ]' );

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
