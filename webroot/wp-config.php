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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '<U(Sm<SGE38WqWDO@8hjD7cuV%CN1/c9h|UxvGX^tfc~:~06s*ZL~ADfK|p*N Xs');
define('SECURE_AUTH_KEY',  'O[yQS-=_}gX2|~d^9e}%*kq; _f:=}P&SyaIWt3/u(z[;G,Qd77[H<JF>d4_ H8!');
define('LOGGED_IN_KEY',    ',{MObKg@dx-:,Qur^;T;!{@V*8P IGSsN)pInS=tl+;exD4_c/|XXUq<-|-mAg/R');
define('NONCE_KEY',        'I[_W5ajis=0+KSW+8hh #f`t]v-UWe3c9,Zo%7/wEN.iSmiFiq9mE+F=z]Jx)Hds');
define('AUTH_SALT',        '^TPC;Bh@)oV*C4L|zR-eF,YziKycSU|IW6q$XOMxkF,whS1^7o8=;AUdpctOrzdE');
define('SECURE_AUTH_SALT', '$.Z1I#+Y1;_4-9[LyP9cRI=/UZ,wWM <yHb/d?-|q:cE_Y -8TBZS_:3%Y|z_=],');
define('LOGGED_IN_SALT',   ':9;eKT|a>#/!7oC|*U`hs<NnrL~hKDFQM8Gio5YbsTX)=Yoe?Iaz[46J.zoX,9|}');
define('NONCE_SALT',       'm$}Dw.:; dL nN-uVjiX.3=`$%A10;?!t&-W,8[n{+ACY3JhW{FaUzijTsk[cs-L');

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
