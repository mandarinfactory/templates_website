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
define('DB_NAME', 'wpdb');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '1234');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '>e.{14/3YhS4T_8,/yRRzbS=;8cwX{~{|V_=knIy-NjbK9j99]F1gS_9`|qZr*{F');
define('SECURE_AUTH_KEY',  '`QJCcr&faL3#lrU(nOk(_Xp{y5PDQWQy0)MQp#wov(w%B)*:Ru.`xPU/x{yt7@?W');
define('LOGGED_IN_KEY',    '_lgM@a(*?W=ohp.PgGaS|MBU3e|hU-8J45nx$!$j1aKs-$L#F*)nM5MOS7?L0M}9');
define('NONCE_KEY',        '{^}rm9YJTn`t|@r4NSOqbK/ I*x&^cKasq#]GtQPvnj}H;hX!-h4IDcD*/D*laEo');
define('AUTH_SALT',        '%=Tn&} |rU-S6Mt/rD/~cLExgnp.3T :xS6~eV3?vxg^7:UNBy}DM&h7@D?&cO-U');
define('SECURE_AUTH_SALT', '.q0rd7>psda.7<%-LDln`qhV4l/VTmsSC$Jdu2*DHJFYCai<pw6NQG(d@am4M:Hh');
define('LOGGED_IN_SALT',   '1_+z{-z8/:y3AJ]`JPXvJr@G|OG2mFY?R`ulCwpct}Az-rEr,1e6RA(-kkHS$cam');
define('NONCE_SALT',       '1+jWsOp[.]?YAK@&If1nWenTP_wZ &0WRSq4zLu=Kyxpa6tC/,4%roT :Amrepu#');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
