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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '?I_|LkkI$5i9,mnfFoO>4LA6Y_Z]Tc@@0m;nGhnV*0_g+i3Xv^!FM!c3VP3n&]L(' );
define( 'SECURE_AUTH_KEY',   'xDQJ@-4!6&[YQHWh3Zu!1T;xvr_zBroJ Yf9zvXP9&BebfM@$c[Z7beCa4HNP*n+' );
define( 'LOGGED_IN_KEY',     'wXs+Gl3#L0~k=)o+`D3s2ymq+h,Z=5z`I=YM{LHGk]8}~{+tlz}!y0llj)@n{B.R' );
define( 'NONCE_KEY',         'lTEJ(Y6hH9z|r&F(n7jtS{ r_T+R/[]u[Bq</.s=#+|JR#;{5<`Wa.dVwoJ4,.47' );
define( 'AUTH_SALT',         '?M-~:RnP$Y<=%I#P2Qy/A[$T_6>B^YPI{Af:q{,kA,mAN<xIk uC00E,zyGP`$lA' );
define( 'SECURE_AUTH_SALT',  'J?k6tP&~RrK|#p{;$s|V*y_1=Mk-uD_aYY<uS;k%M%e-o2x4RM#S&`>`,/S9qrH3' );
define( 'LOGGED_IN_SALT',    '_xC/cZXO v ,u=aZVw;4.)/Cd+OdsnTAC[~#V?lAtL}uh35TO}Nc#AZ1UC_A),RD' );
define( 'NONCE_SALT',        'B-nG;NFG6W;YQT4ATzp-g~;;Ti??c0wZ6!fQL`DjeS_2L&,ysk|4AfMH}fScB 2d' );
define( 'WP_CACHE_KEY_SALT', '/lU(jqNeqoEJkQ+3q]%^uvXXa];<0V!&17?OX+mMg3_-1wHG&>@I%pCg#FJ/dxcM' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
