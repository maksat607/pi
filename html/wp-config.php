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
define('DB_NAME', 'dbwordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wppassword');

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
define('AUTH_KEY',         'o][]]{+Z KJQ%.-Qx31hGo+@(Gj=sThn@:sK8KXHNNFxI8.B?|TCSy+.y/v,.:KS');
define('SECURE_AUTH_KEY',  'r:=HDguI=M}ru^+^r9p}7e%d9{R4c[>6ZPH8%rmG=yN|9q+?3eRvb,Db%;tNYkao');
define('LOGGED_IN_KEY',    'FTT23245rbkMllN4J0~`+c<!y-lc>Xq]n+N3JaVp~Rb)&+t+-!P_VPlVQq`C-&#D');
define('NONCE_KEY',        'J91]$YS#A1Drn(%^z^3KjsI0eJ}$~681>~&j}dOQWYQ{/ -)$^*#%B+5(uXRq1)s');
define('AUTH_SALT',        'jn{-r yw},F/eD0>OQ3@,,i2jX)hEx4k9<11_hGR5;;IM^7I#svIwB25L!_Sm^Mw');
define('SECURE_AUTH_SALT', '[Cw`XQHQOO{$|[mN1a7s[CiTeiQf /iAgc )6uoV[;wjV?)[z_lM#HTR/Bsx}kc+');
define('LOGGED_IN_SALT',   '`A0fKngAs}?8iR#`})kltDZ4JQzoU/I62tE&m~-R$J9U@(]]9L|[S:$i.,))tytL');
define('NONCE_SALT',       '}qd6m2E-B?gsm)nVaSI<vr8&g~^}z-wF[sa--7.mjd((/?-gO.|:8=k_4pNyh- +');

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
