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
define( 'AUTH_KEY',         'Y!_)mh1>8,J{I0ra+C`71f<#AywqT[.:v_cy;0gL${s}yG:q%3O}jeJtRx=kr1vc' );
define( 'SECURE_AUTH_KEY',  ']FSdB^Vl))#->psj.)AW9hK2mc.@nMTs!!xen&>gulGkX@smy~ziS*fk*aI@&Yy6' );
define( 'LOGGED_IN_KEY',    'Zm!cX,a0F%i}o:zV3T_@BD>e !kEc,[Ub>i+oODLO+t;vEJ.i$#Au}pwLIk~@q-U' );
define( 'NONCE_KEY',        'UX3V(}9wnHmWr]4jIlB1aO^Z7g~2x44^?X8+IXZ,U7RIZnKPx<bMoT1S]7wS^BH^' );
define( 'AUTH_SALT',        '>~lt%mpu2?mA@A/c)M7P[vrCJ6Sk_5-JI8V<S!`pMWp!NtadeE83[d+ oLZyTDc,' );
define( 'SECURE_AUTH_SALT', 'F9}mpNCbLfxZ-^FHC!h/^^j{ycLxE:c`Y$@s/<i?[sQR@Bg$}JjAdw|_bGjkpBV2' );
define( 'LOGGED_IN_SALT',   'w^%D*R0X8QM 6r1o]R,+`JJS$pKy!Nu1^SOOS<9Ehhx5,Bl8i6{xro$cxfI:2O`E' );
define( 'NONCE_SALT',       'UwFqO8U06UL6aan-6KWUvW0I9y1{L07EOg/8y;wOZ.o/~9S,D5_YaE6sG|K-!wv?' );

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
