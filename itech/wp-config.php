<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u770151235_ikQKp' );

/** Database username */
define( 'DB_USER', 'u770151235_Jh4R1' );

/** Database password */
define( 'DB_PASSWORD', 'm6l4TjcgI9' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'lieTG)C0J*jZ!r=WWRnHUj0S!->}=$.O6?M;^FPV/-)kIg]:5LJej.s}Ql[5<Q$X' );
define( 'SECURE_AUTH_KEY',   'kpJFY;S:54Na|cU+3eWsho)7_=L0AHIK4 <(AZ+??9r9Uj}l;BMR+ZCWN?AVCLba' );
define( 'LOGGED_IN_KEY',     '/mOUrt[hBQ4xUMnY:0A/F;j_2O{MA:RJu~HW.rVBUcZA,iX)aeo{NB$!%%Qv!qkW' );
define( 'NONCE_KEY',         'm:49T$PoRVA>G[H8jkQ>g[ M5eW 5)LFKOrsdkoLpqXlK4b:fMeJ@A=i3OfzHS X' );
define( 'AUTH_SALT',         'Tl|S>hq|kY{$U79o2HQ>$Rh@I/!ew6eeE.GW+b6Frrp_4TMPo/Jc$!977:`Q_#`L' );
define( 'SECURE_AUTH_SALT',  '-!a%&6?0[?)&c<t[>vy./&!.F:|t66OJ+nZX+x}Aw@#jjX%Cs#A<6,/(ny. 5cUj' );
define( 'LOGGED_IN_SALT',    'yTL*i$8V<_c:Oof5pCu4C`7)cWVyl?ge1=xf[G>+x[r^6[?S&<D46b|2Y0&]iWXg' );
define( 'NONCE_SALT',        'b%Ed/>aNn))/Q@&)wj@gJnOr=<XHSYrRgCD8w(;WRl6k8YCs$/sQoq4]_,Phf*Bs' );
define( 'WP_CACHE_KEY_SALT', 'a-5vCl[_1C>L`tU ->I{#3<D$8.Z5)lx5@~F?YM+E*V_E:Vj2A.|1F1g3{+L86h:' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
