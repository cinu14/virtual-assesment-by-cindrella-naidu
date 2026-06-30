<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'resourcesnew' );

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
define( 'AUTH_KEY',         '6f+Rv$.ae4yM{WFQ0{[}D}o90C,2lo;40tzj}~P}},$mJs7lM8Z<W4&2-hBz@D0V' );
define( 'SECURE_AUTH_KEY',  'n%t[o=~yx[-g!$1]h*>@n^@9k{dP/=`ok(eShj|4|}6M`Q_)UZJsU u<cFD;/5l:' );
define( 'LOGGED_IN_KEY',    '5)^B5|4=rz7&|`wt.hd|Y}wMV&Rey{q0;BQ7+{.bxL+`aYo*m``Oz!8$G~>U>6--' );
define( 'NONCE_KEY',        'D/7>C@Rc;Ej&~eHYY]F,98QL{k-ei6 +u]*`6$SP{Q;SP4EXne?Hy>*.&qmduicj' );
define( 'AUTH_SALT',        'CUnh{X+*<LwkI^-KAv;gxH85D<irhM<P8: 7enKmQ9=ZBoxnd*B7/*>9genFru6=' );
define( 'SECURE_AUTH_SALT', 'esyrYB)4&@m$(A.FA.O2xeCD[/2V!`yX?%|xtW%TDo.PB3~><8U_o68~wtRU<wUc' );
define( 'LOGGED_IN_SALT',   '[sl[I-D/[iI-<U$f6w AS!*ZI`F$zzNr?Q$|Go8AavqT!y1Uk&LV 1&>{vFSvN?$' );
define( 'NONCE_SALT',       'G5{&%wv@?}> Gwx<Fe$/dpG!Eq]@Q:B.$0~R-43o9},gu1yn9(gMqW p%OP2lePO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
