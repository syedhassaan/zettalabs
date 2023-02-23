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
define( 'AUTH_KEY',         'HD(N,=MEKqR`L-Rr2Z.G;h/C4Q0$jNyc,Kqvp*7)|e(.xU@b#;IIQU92k+HUkUxn' );
define( 'SECURE_AUTH_KEY',  '~=sE])~`~Uok>@zO^YbKX?y)l^wM{Dnef4fUa_8S/;~IQwEPs:Qg?jd3a9hkLB{k' );
define( 'LOGGED_IN_KEY',    '>$22z=)=563(+f+;D3)AR/{8ws_8a!FY:GBW9._ANu7!;CZd>Db7eXR!BP+/GfU:' );
define( 'NONCE_KEY',        '77I&/5,mI[n?HNkAA<rt7Re2oG_TbA<{Y<u)C%1PX[2olWQV3pSH:E.Md{|7(>#I' );
define( 'AUTH_SALT',        '4l#2]>{I)a^^<<61:~o{HBTC%^1M.>TkD pn(|Vc1;+$Awd4(W$+wy7s[&t/wrS+' );
define( 'SECURE_AUTH_SALT', '28Lq>CMG;Y8B p)p^,VyYO#_,VY@K7k>5zeh3]Y1As_([8=fFh,X~3rS>gh3CCKu' );
define( 'LOGGED_IN_SALT',   'paT::+=RCR7a``ZgALZU=]5vw2^q7B*qB%Q)@8U%)ZCKjG5UZ(yfSi|I&ka(/MUU' );
define( 'NONCE_SALT',       '[3$&nl|i$&AbDpm;PV|(i#fnwLqhZT[/f>_RV$A] X$:f$$A+J)w$-5+Pk`k88]k' );

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
