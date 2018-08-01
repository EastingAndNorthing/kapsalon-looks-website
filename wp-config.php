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
define('DB_NAME', 'looks');

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
define('AUTH_KEY',         '?co^HjP-xyCW2!yjDOsDh`$@Kr9{@rMO?UAVo:fJ@-?MQ 0Kt%ekr*>E*f Kvf+j');
define('SECURE_AUTH_KEY',  'K$jlTy58;Orp6^9ki,|UF3@t8MZFIzAPZ{5!!{:^pU5arP4NXx_NGtt2&m68y$Vh');
define('LOGGED_IN_KEY',    'EgX63_@d*IjX[_w~feA{S|5kctlb7Y dlAlt4B(AmmqiSWCi}]`%7FdBV8D%ZOV5');
define('NONCE_KEY',        'Y$;TuV,M#&m.Q8Qa2P_p)UA}uN#=gCj%GPM9q6tpM,lGl.?ME8N_}_+JHDS@k/Yc');
define('AUTH_SALT',        'E0a3glw6!y4SWCAeh!0`!,i%fS*3CVB2 J_p9v3C{.xP#C8L[F[?-*G#m =!t@^#');
define('SECURE_AUTH_SALT', 'i #ac`l;n:Xf~>hv5-s-lkAgLTI8,U|e(2sGQa|fz|!M.e}eLI4aSSEmoeL| C {');
define('LOGGED_IN_SALT',   '&igsqZinj!G{9dkBu3e.I8MvlYviC0ll.i1pZj<~!GmK%&CI%M9A@}e$*HFp StN');
define('NONCE_SALT',       'z<1/,jE<)(WE4}E}`aL`Mj,~cci{9Io(nga%XW->7IN<i4SlxqF]=i55`8wM;.u_');

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
