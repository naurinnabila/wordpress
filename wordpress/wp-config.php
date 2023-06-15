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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\Nabla Naurin\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'tourmanage' );

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
define( 'AUTH_KEY',         'pYrd|:9|jt2#uEJ:Z[Y!Lb.w[2[[[4h%_nBq^&gQ]K OY2#M@u>f,].<!2GAWyOB' );
define( 'SECURE_AUTH_KEY',  ' ^C5g@o1Nm(.l1o87Ju:JHN#%]L}/*+@U8W$Xc&K2b~$ihyp%bY7T6Z0A,x`HU.W' );
define( 'LOGGED_IN_KEY',    'q08+U]QJI[x*S/b!g3|)H@q780R4/^g0[hZ`a1>$|okw_`p%UyL_{mJy_wM|@)cj' );
define( 'NONCE_KEY',        '-mu9y`&FuwG/oM@|VwfRl7[;[}EMf:o{1IVNH#[;uFrEDV3i|KW,Q &qxaEJrF>1' );
define( 'AUTH_SALT',        'fLJMq_a+v%ANi[.K2CE}n<>0N7%J9yXeaPlG%}PE2&B{b?T||6H1<%dmSrRDm5| ' );
define( 'SECURE_AUTH_SALT', '@+*~Dp<Dq{6UlPA*i0W/br4;FfNUp$xeQ,FFZselb.<5wo<Q.2gCrPmsjO2{<.Q`' );
define( 'LOGGED_IN_SALT',   '8bhq5F}JH/sZO m%KUY`&A#|eGazG(wF3F!6A2$,5.ZMz0]&9Rw !JMeJ[7_+7`t' );
define( 'NONCE_SALT',       'q/Ya545&dL;0|(GDR,D8-;W!@AsF~Yel>dD~P9.b9]0&BiC%uj<Jx/OSCoEl?Xi`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tour';

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
