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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'p h3C}`DXk%;~CYnQ{0IvPmjF{y*2j@p/Ef4<n.x#/}tpoyskNFP(IIXKaIDB>+~' );
define( 'SECURE_AUTH_KEY',  'xWfcP.@kG8+0.`nETXf^XHPxoLF*PSbe!sxn|s8wYi}t<%6Ag&~a5XdLcM6E~QCx' );
define( 'LOGGED_IN_KEY',    'nP}nqQit%Y.!l4k}I~eV<pPTVHV{ Wbn$573&jpQ:vb$hS|]fSRS&UnB}V1#aaav' );
define( 'NONCE_KEY',        'Cc>CWH 3)kmVdSV!mIurk7&Q1(Cv=9{Eu4^0zQ_hipI}nwFeaE-[zT!50FJP5B<.' );
define( 'AUTH_SALT',        '.Cv9e2;@9aiVC}7?=9b;Pl{t?{Q3#!7:w-;z(!)%hwNSk7EIWumb[j|8jZC(Y{e:' );
define( 'SECURE_AUTH_SALT', '[UyzX`-~BF7dult!5<Ww-{Q0hPkLp~y?a/Ny+q[=CPwd$Jwc?bt6Zx(sAwtzBBuP' );
define( 'LOGGED_IN_SALT',   'yc%^e)NoiA(kTa6y>_C!myl_EVZ4urg ^cF][51}F9+iN{j_S)X*8X2njpOd&OG2' );
define( 'NONCE_SALT',       '3]Be?Ky=DFuS=&P]uIxl*i,*RL5CwA)Uu1mc5Xyq%H>O<I;?lg*!;1G;)#KDA~G/' );

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
