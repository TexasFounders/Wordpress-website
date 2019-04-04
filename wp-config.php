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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Nowgen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e-d_6zmBCr$m>.FAA~3Zy#-xeG97/*l1]bFTBgutH`2-iR*UxL;hpxsQ%.CRRM09');
define('SECURE_AUTH_KEY',  ']>0IQ);9$^/)}5WdV!+M?o:O3uM-4/#7-hSH]v[WZnhi-5@},E+*)y$65Ql7,yso');
define('LOGGED_IN_KEY',    'vJ67Pwqe#~`]4Pl.H )j+f7H$<_KH`VuV&r&a2L>u)Bu=2QS=kL-<rp6p(a1);[R');
define('NONCE_KEY',        'fAHiiyoagW}RGK[2Oi>S8[*1K).2RIw!zW>g[GD.g9os7<z9nt6bhDp~oGNOq-x)');
define('AUTH_SALT',        'CuV.!vRc`II/{RR&IahCFctYd%v1K4/P~V&=9BFkc7 rN,TnAOSKIOTj0H|BHi6c');
define('SECURE_AUTH_SALT', 'rB ;bKS6!RTFMEDdF$nZ8cI,GpP^hU33#ztu5@8#3u85Y8:r&NXNyf7NvQ<$N@.0');
define('LOGGED_IN_SALT',   'kD*t*2*&DBOwoe;}V>sr@WYkR:BF6[tb^7i5i4V>=|isq$??>{I{xA?7/tG#b4SH');
define('NONCE_SALT',       'Dz33kU&Z3#R@jG-NPpjmX|]%n/.]z>!%~8S[#rE#<0Y6UGGp82rFr{gTY;|}~PTF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
