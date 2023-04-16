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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'WMQ|F~wk0%&i>fXhIJN#{*1?&xW xTJr]C0z`SnAq;Z6I{83|fIV3pW*@I5 9e1z' );
define( 'SECURE_AUTH_KEY',  'GE[W_^jFACk%$[9OSQ05*t%s7_1DWjUvHu(6C/5Mq-EJWEtjlxl)tjnB0^*fLPnG' );
define( 'LOGGED_IN_KEY',    '*6U_fR|hH0Ig3.C7$,Gh5e(;/G`_dcfJvK{oLYE<?;ICc%.UC{}~:-4Y$kTV`4Yu' );
define( 'NONCE_KEY',        'iiYKd!B$0U+iCtW1Wp,_G9^?LBXBG>MmUPkdTk_%/,<8@Ed[Oh#dG2f3nL%1`;Mn' );
define( 'AUTH_SALT',        'ihGC 3W!v mN[~=~4NHE1FwD(h5C{BMf*]}G^lsHhpOgsy8ZaIz5mS7n.wDiOk<L' );
define( 'SECURE_AUTH_SALT', 'SL<Y_r,!8skupE#Qhkb6s_f4T]i)(%AN7#hNMU?E2+v.L{*rI&wi!8-_{l~X %g@' );
define( 'LOGGED_IN_SALT',   '@S*~j&`<w5UwQV#&bheQy?[=tD.-QJx(=Ic[FsoWFJumMf;F[W-o/w.AWb= @hca' );
define( 'NONCE_SALT',       '9]ZxR( :T(/&33nSXrajtae]t)E9fBTn(d?{OQt).TF0hZA..2@?TX*QJFJ<(;M)' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
