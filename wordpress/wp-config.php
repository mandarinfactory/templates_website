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
define( 'AUTH_KEY',         'o* Tci >?|6KSVpi?j]bY0R4(V^9~,i>[P:7RAesxv|DSyBA?{cjQ9p3ck@NH|}G' );
define( 'SECURE_AUTH_KEY',  'f}xb@Yh-6WNp=xKN4=l(_/UQ{# H|WK.pxa[T6@i{;`ghHtj0o<%Ht[1|#nno/BE' );
define( 'LOGGED_IN_KEY',    'pV)/CDBZ_^wBul 4(e9{u~_h2>md~I-|+a7/4c[Ge0Bwq 3@Iz3Z#c$!,veeQ~{X' );
define( 'NONCE_KEY',        ',4x-sW3/TKw+:2q]eO2Pm^xcF!;]m9tf?Mb7%zBal2?bYF}R&RIB(eN2v#d?CNy9' );
define( 'AUTH_SALT',        'jGx&2Jjcb`F@Mtb9/H>(^G_(VMFn5l]oMRC}_s~jeh9H2#Rr+W[H8{[LBHH2tjm,' );
define( 'SECURE_AUTH_SALT', 'h@-Ed9H*@yLFH~ov.K2rX2}&a-2jN}37e+q2Twp#iYELj.zP!W2[{Ndx: &PBS6%' );
define( 'LOGGED_IN_SALT',   'e6C66b0vfeaax9(la~#E,.zC`4>R~FLDe+:-)cRWbgdtt!qN^#kJC>,khU7,5%a3' );
define( 'NONCE_SALT',       '.#E7d^$il>*24~:4-Kf)nI7=(tf|x2,0&gWlM!u_-47vsq+R,(K/ d~{?[#Px3vj' );

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
