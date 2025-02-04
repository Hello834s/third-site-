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
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'Ilja_Paramonov' );
define( 'DB_PASSWORD', 'Ilja1110' );
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
define( 'AUTH_KEY',         'M]ta9k|F~*nAQ$1*E2u%4G^jVms_zJJi&$!3ttf###MK76$},6IZ}D=kXMwE:p!,' );
define( 'SECURE_AUTH_KEY',  'I^O}nv@+a(XP^SdR|B2DMC3[MrzDLZ9<~nrCzA[Q[5#0%ej5g|OTZjiR$R5>[ZY4' );
define( 'LOGGED_IN_KEY',    '{lv]hw_^.q$en.B4}vj]kV$aN~TgLX<yi996K?vgK9I^1Zoq;sJ>9(($jN3tU>T1' );
define( 'NONCE_KEY',        'dr.cq{^vJ?J?NobX4;rZ)}5r~<Wz3DPTV#+*7jm6K1`|vj`h4j}gr&4CoTOic?VA' );
define( 'AUTH_SALT',        '|u_.}r$SdroHVV;:BK~d)F=YaTl=2^xUx!j lKSq<+J`o:.%=`5NN%-u,^4+sS?L' );
define( 'SECURE_AUTH_SALT', '` G)|hxD@,Xnk+>3mA2jQ}c.QBnoN$Ap.L[B%z]m])0`2WNZbp9~a`%B^~QaF-pI' );
define( 'LOGGED_IN_SALT',   'P7`fa>ds~5.`Ui%{UQukX=9yf]SfpS=jC`8Ac<^TH1%4q(#XVq:<kJ;9lT2Mx)#<' );
define( 'NONCE_SALT',       ')F}dR5U 9?aAxtfgIL*V[]6xB*H5RV*L-yuJ?lk4UNTqLWDo?uevGnNI*M^qqMJN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_15';

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

define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
