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
define('DB_NAME', 'ACTIVIDAD-2-TEMA');

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
define('AUTH_KEY',         ' ]).PiPeec;nQ!&O5jr}N{>j&v)79hU3EFFUp;RbmrU&uk1Jkj81G(x:%`{8yB|5');
define('SECURE_AUTH_KEY',  'Rh5PP=W 9R`[Lv;R?(a<@68{`?X5oLEm$`[a@0jlk-,moC}d#eHe|1nBkITlP`ND');
define('LOGGED_IN_KEY',    'zL/`Ca [opcuKbTY@g%t3EEP*!GJjRcJ( cxcSuC2E6Z*U(=BSe,F{/(qsYxr O,');
define('NONCE_KEY',        '.9L_aAxEv<EkzkR*L[BAXrB69#E8=.!W-j4<tM5tr)H/#]NH:82.._4#;DOE[a>>');
define('AUTH_SALT',        '{GJ^*tV1zS_9>dQ7mdEb8:{Jci^2u8xbOB;pR,cQT3GP168SX E<r5lQ7+6?1{tb');
define('SECURE_AUTH_SALT', '!{?aGi-p3=,b,;SlV{`}/BY2;L$%PiwAPYi&%>B}9rCN|b1>.7ir~?`qPX% BxQ6');
define('LOGGED_IN_SALT',   'm!jSI&P|ULSc4H5?/H]nfw*}BB* iiFZ+s4M ]ugJUs9rJ}3r=*jcQo~T}]uDdoy');
define('NONCE_SALT',       'P_~t=Fw@PVuLJSdJ~e31#>8|&=0/b=o9DK~L;$NE8f*.SH,*h6X:@qQmt<$nEm&0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
