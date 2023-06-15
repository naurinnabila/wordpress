<?php
define( 'WP_CACHE', true );
define( 'WPCACHEHOME', 'C:\xampp\htdocs\Nabla Naurin\Raian group\wordpress\wp-content\plugins\wp-super-cache/' );

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
define( 'DB_NAME', 'raiangroup' );

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
define( 'AUTH_KEY',         '+,TE,Sll-dpzb}2CR+cao~UHzh~38],W}owrT/!b%mpFwsYtA/M9E9va=3p)ti4B' );
define( 'SECURE_AUTH_KEY',  'stUxv8vEriR[umLIx771]!p ~=n<qH.QPI:YtA0(&FX#FZ1/aKiufKR,G{7aQz5-' );
define( 'LOGGED_IN_KEY',    'n.2@R,<o}FSx>,T2efHJ` (OTqNF{J$VFzU)3 sAK OI|{t=+Cev]wZ3.y[ZFSCc' );
define( 'NONCE_KEY',        'a*>f/l-PWtt18i@UhN#t(~-^BI|BX(j#%2fSK?vn[K}C>uh=Sz>XBDH>Q4Ux8s :' );
define( 'AUTH_SALT',        '8BH6?uk?!03Ra|t*l^H.`8H)#;<;]b=$7=?o#hko#T+EM$<s2+KaK^6~y,Ct.5;_' );
define( 'SECURE_AUTH_SALT', 'LPK>,GHELbTAmkfY8zCLRQ%j<@&1%-1x!?O8:1hM36aPUo(t4d7rotw+:G4V`v}}' );
define( 'LOGGED_IN_SALT',   'p|)r}jSkxjVd[Tg6t@(/H~{Npt>z:T;?|v0*96}7zS#%dr@>5184 jm!zQ{:F~X$' );
define( 'NONCE_SALT',       'ba3lH|ES}ws(t9UNk4y|$i?AQ$=u56>;qFPewI$rzglu?_~0qv?,M{~AkZ0D4Ing' );

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
