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
define('DB_NAME', 'redeemer_interim');

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
define('AUTH_KEY',         's1c@l;r%%Z^0*6,J*kq^EA*>rqySf;v~:sC$W*NAdJ^p#lSA}lCl,Jp&j`{zDYE]');
define('SECURE_AUTH_KEY',  'Wsl#M]58!]cLxyefe(j&BmeQ1t]JuO{O|hI,SEq34lesfbZCo]buUe,y{PH>c{7L');
define('LOGGED_IN_KEY',    '-rkY5TznNy,q)gF0B,/?k%syP3/3iEb%O5C4uE6O8SC+5ldRXW:Y6tje/jg0)<sa');
define('NONCE_KEY',        'D>HW%FrYA.]egW;TJDMULzE&ZlgSZ8:Km<33|(Q|fR^0K;Z2*,%sLS{c2Xd7,5.F');
define('AUTH_SALT',        'o@8Cg+[IgdXI*cYQBlp|_le*-rQh5qY=@c/w&5RhqzjM+YpgGR:Z0S<$gL.W!f6)');
define('SECURE_AUTH_SALT', 'boQi1q&R}k]:]m+WRtNH1AALarB_,oqLQtHcCt~-#:}-[m-m{Osx%1,>- 8ida,C');
define('LOGGED_IN_SALT',   'ASHOXN*:u;::kb>FAcwiAs/ >r>6a%=a4 q]5nWfDFVYWp_`)&bW^p$/v+dN ]Q-');
define('NONCE_SALT',       '^DqCAd^j76`ow#DvsoK{xJ0Q[b:X>,5V^m[SgAu!0jUD?^,UbsR)mHQq?$&Mk0Gs');

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
