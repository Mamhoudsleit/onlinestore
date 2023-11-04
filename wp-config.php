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
define( 'DB_NAME', 'task444' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'S[CJ1BZ&p?`RTyYujN2Uai.?i=Fnb}.:#Ji^aAP=S >g3{{$QEJd1Lm2`YZK^T._' );
define( 'SECURE_AUTH_KEY',  '(?++Wdd#PfnS;4sgNdp)e0|_Imqk%W:w+E`!S23q28]$:3b&CFi:S0L!voo*a7a^' );
define( 'LOGGED_IN_KEY',    'j^O,6Fss(WZU& `i9rNI-33fbN)Kuv`qZ(K$MHHV@R(`/u9<?W:`L</=|FlO3>_s' );
define( 'NONCE_KEY',        'Ujje)65TA9EAk%2X8?V.U1WR0s2jRu8iy01>DOMa_L&r9#nqM<w>6:}~srqmU8A}' );
define( 'AUTH_SALT',        '4l!*`+PEPWmK<-Jg-#)KPNHEjm;z6^ERu5jYwlIzhxn!DoXyGds8Ff9DGLcV7n 2' );
define( 'SECURE_AUTH_SALT', 'Z&1/(!L[jE6r#]>Y}3<868IiQ2(%D(:8vuH=pUdhj5Pbqz~3mh):Qb-nIT@<TcZ$' );
define( 'LOGGED_IN_SALT',   'ZPOI[QXLn9Mr8kmxu]HCU6[>,5&U|tT1b25,xy8C(*n:#+i&bWM vR2^iz>Bh-q^' );
define( 'NONCE_SALT',       'r]!d;X]GoIJT?GG8s$Tm9mv3O}HC0X55o$`P5mf8rcG-e*M#b1EJ}:LXiFwmsG}2' );

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
