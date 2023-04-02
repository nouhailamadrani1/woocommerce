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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woo' );

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
define( 'AUTH_KEY',         'u_TDP?|Vo3&@P|zabpZ[0/px&kp2GS$DE@|vI0%vVM|{Xbi(TZhFhG=5z}?e`8ls' );
define( 'SECURE_AUTH_KEY',  'H@MPNh]:T+d}>_1Wi<rR&J`W^Hl2MSl<gt->Vnkq/ogkvxk<8fIM8GI=tMB2q)LD' );
define( 'LOGGED_IN_KEY',    '6lyk.$X{I/f902zaM.+XD<_|gdde$;g/^7KR{X=<}Ld[fff6a`U`8+;mc>#kz.1D' );
define( 'NONCE_KEY',        '<t++MdT/VuNf)Th8f!pln(tLEe+pr?(`8 f]&F+Z+^QBYsf=N|yI*`m)Fd6L>mJj' );
define( 'AUTH_SALT',        'T4K{,9/<wY0#->as|3{YWIt=P;{:_0FCDN(8~ekl{!Da!{YU0H9sF6^S%*JKfx}W' );
define( 'SECURE_AUTH_SALT', ';wZkty]yJw}eU$CZP<j:u9U,OMVx|B?]ki&!F}XVY>cMB|D46ve[+,Fz$0BTwN3,' );
define( 'LOGGED_IN_SALT',   '?h1>>pjXqG*u^:$RJccfM6y2b) 1NMjU1AzA^DCzF:8v3c-=T:l,juh7Qp-#hlN1' );
define( 'NONCE_SALT',       '6b^nyQyR/T<:9qJI!rsih@{&Uq(:p!Xibabk&t LnBwNUkB aX_6!t>Lo*/XE;Fg' );

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
