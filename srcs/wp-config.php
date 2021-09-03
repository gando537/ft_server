<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',l6XaJWAb`hon&_9L1V(P9J-p{d|B$DV-$|T@$IkZ?i3{@prr]gl~&Vlz7?fTb5-');
define('SECURE_AUTH_KEY',  'o5o~a8S4Kv??Z.,fb~wk_^g63#Iqibrp@?Il|Zhi_-k)}b9]_ ysxNG}:!7*gj.H');
define('LOGGED_IN_KEY',    '1wo!:l!kKr5i||>UMLY]j%(0if46J@yh:Y^tPORe=XO0z},qWgLe$g;Mn{2.gz-S');
define('NONCE_KEY',        '5JW0ucWQ^m@_+Kw)j-E:w,AjjiS;;r8o |m-&r<(S4C=$2pC]PjQ6o^GnEb[%|em');
define('AUTH_SALT',        'L_VSe0,smnPzXl~9<]]D$x1{e;LyXC+&5i~^}Caf]Q$m#x~Qx+CGJG=|fjix29oZ');
define('SECURE_AUTH_SALT', '<)Og^Z$*2}#Z`MWH:~-dSI vIn~l;`./rHU26;mr@X{A^Z[d>JaEv?u}4i]Tuknw');
define('LOGGED_IN_SALT',   'fKWWCpKKS @:d/X!-P?UDR0n<+mIMGz1B{t(4-[k67wup5~|fO!vAAzOa)Pc@4E]');
define('NONCE_SALT',       'gJ<B4/j^/cpkj7~qEkhpP4<ZM<:ppKw]Bvl{wbfp>vq.n;HIPI`#GKX+11P-N2&_');
/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';