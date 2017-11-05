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
define('DB_NAME', 'h7111c_deb');

/** MySQL database username */
define('DB_USER', 'h7111c_galifax');

/** MySQL database password */
define('DB_PASSWORD', 'agalio94');

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
define('AUTH_KEY',         'my=q0t76v0QdVNem1Ul0m9|,]QIz mW`biNHY`5s~xKh{([?Fb!_{,n4k>X!Fv9X');
define('SECURE_AUTH_KEY',  '8LE>[JB`dHpB9W7`ESOt*Le{*07~4w6O%g).IaOaf|1`EUeoS:&&aKG~4(c@u<!Q');
define('LOGGED_IN_KEY',    '8<*,w0BiI-@{jz_NOFnftt.AV).dcjDnaVE]%0`+4+.WWv9~Vb} 6ySn@P?7X^U@');
define('NONCE_KEY',        '*A*}/z#Eh$}fPLA-DYCyPU<}ml^$/}$mXBUrd~KNOJx[M^0$/CBKjLZ@T?(XQdTe');
define('AUTH_SALT',        'AZG1 =Xq!t$D;1.1pju`*rRngSE*dT+Hk}xqKRU/NP]/t>(*BI;;C:.u=fs0}{ R');
define('SECURE_AUTH_SALT', 'KT.7ygQSs&CQO8?,;GBBOK6F{X/p*d?Ip3j_dmLP20nlDI5AG9obwSW757s5GF!W');
define('LOGGED_IN_SALT',   'v#ZX5(B>)KJqga#}4do1P75EO#7UAo_,dlT!YyzMHwNo[81Zo ]{H9/l$7XTNge!');
define('NONCE_SALT',       's,]*kbA*HdIPN!a5>A:s13*dfa,BXGl=9^;y! pA_issplihJ|$,B/|FCtuzs]7?');

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
