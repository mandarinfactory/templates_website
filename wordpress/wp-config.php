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
define( 'AUTH_KEY',         'hDwr)@gefKZc>~B?vc6U]9>QYwIu8xvkL,wT0}_m=O[W5,.w#1Z,N(A<OR,fy}3Z' );
define( 'SECURE_AUTH_KEY',  '8Dx5&Rn|:+DbB[ @=5e68C$C[)#Eybv&LdQ`+;ME[SUOksxDRCMjs3d?8dLNZteZ' );
define( 'LOGGED_IN_KEY',    'OI{HBs-b)I?*<glha)RBH ?2 Z7obYm)bvq8[t=,lw4#yH8:UFrUcx8l,Cb35YYF' );
define( 'NONCE_KEY',        'GK,6>Z$t[30HYSy-nk=w.4&-Qu$htM.Y+hFAxIatJU.{y#ZlRVhGkZkz2{z=&qE/' );
define( 'AUTH_SALT',        '7+0Tj(=|U$zA`BJqdxlfXRk/.mtV37-9tzsc.qQsXtQ7|nzAy$WS|:5j }@skb*e' );
define( 'SECURE_AUTH_SALT', 'pv9>K;H~YWCpU:TwaYve#!|ZT`hy419=zNCx6x6(MW9KVmHSoxw MGXA:4MJX;}s' );
define( 'LOGGED_IN_SALT',   ')FS$xXTCPM(KA8C| -da&Y <xy|vQQw`xQ9*/-JQS n~<#ZBKA*^?7)?hdIu)3`D' );
define( 'NONCE_SALT',       '!mw#$O/y%{`N80;2m]kkMp$ASWR1W@b6rw <D,B=#^J2gEL~&ex#2ul-HntFu)6#' );

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
