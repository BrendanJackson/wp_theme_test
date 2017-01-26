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
define('DB_NAME', 'theme_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'evanetra');

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
define('AUTH_KEY',         'ihwAs<UJ3M==Ur?(AE;l3*55)b]@i?$Ql{?6%*]c*d7Hx`[@mOxTWCPc)RX2gR$D');
define('SECURE_AUTH_KEY',  'Uw[Ewpk^gD:w798NI#s-usm4?#i}7u^SzcGBNF0EsO~PKa$/tF*9QO&+]N/.`1=p');
define('LOGGED_IN_KEY',    '5CvcDISD@:S{aPqCdjU]0RhhIHW[(1j]Ko7@0L_<>`k^>[$b2tVM_&xW(d)hoF{f');
define('NONCE_KEY',        'JRaikg(J]?`N yGZ^{1~ogVF*%>-7bue8h|N-t,!w7(43!xDoEtfcH9r1-MI+s<N');
define('AUTH_SALT',        'fr0<i<gw|;d%=c0,Nhg-_8L:90ymtN>CG9]!Wue:-{|n&!XT0wI2vD++v+[ZiGca');
define('SECURE_AUTH_SALT', 'K$}GAFR0s;.{3W(@ 8zto$sjn.UWAu5PdK/$w+szotM~Dk%:Ia8KwX?,r39YS1I3');
define('LOGGED_IN_SALT',   '6cQnH=)D%$ jA;4WW,K$on9k#)C{|+/.sy-aKm23fCtCh|HkwV4fRYu[t<usK;{B');
define('NONCE_SALT',       '7m=EW3I(zJyt2rocPb/Dward/#-wlxx`E)bbjJPfPwQ7Aq>S^(9-H-s[;+awArkw');

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
