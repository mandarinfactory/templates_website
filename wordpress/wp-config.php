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
define('DB_NAME', 'db_name');

/** Database username */
define('DB_USER', 'db_user');

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
define('AUTH_KEY',         'DKlMY=^DJS/T3U1cU5_v(<vb=G/!ySFJF1Q5=Vkhp0o/6QSC$S?$SFgkP [RTRQ*');
define('SECURE_AUTH_KEY',  '5M.UAx_c~97z.;ljDFQPqu[o-!S!fn$ur2.zK5d7IYG,%$1&]5H^G(G]YXb]_I_E');
define('LOGGED_IN_KEY',    'F//Yq<}Z*ytPz;>PH]F<XXI/f2~|vi.@rsfO[16S2{r%j#2kM|?-qrsX;{Q<0GBy');
define('NONCE_KEY',        ']YUoD`i#OosB3i-<R~8dJ8fBR_t@1){ON{Nlm5e[LHBjJ/0>6[|D+TviBP;LccnD');
define('AUTH_SALT',        ':+)Uu*`aYHL+G!aRV|F_|/(.C`J|vrktpm,]v347,:T&%|e{5Nf&`5>:I=}LE52)');
define('SECURE_AUTH_SALT', '.x??c:AGKFik+(@bAC9XL`$oI7L;tq^ddRQFcC@_sTp?fvX%P-JHhiUDh=}u@MtM');
define('LOGGED_IN_SALT',   'uY&Ad%5:W|O6`c!*&T,Pxe<_va=/}.r:> fJ*0&5gfuB>3-f8*d>Q2jbGpR_&=BV');
define('NONCE_SALT',       'Ea_+^H1g0FwK1*MA@[IrB7llhtaAkeb9|OA?2O`e}GN!>)ZQ)nOSRh|8d]2Y??2w');

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
