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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'G^4]MUOt,N;{h^I*o3#@l?]GmR,s5#+S~B)++K@0j*f+~}IJAMXiuD{jpWni:[rf' );
define( 'SECURE_AUTH_KEY',  'X{T-jSog*mE[2%$$9[>}dL9D1.OLV5j(KY<U~QI]w`Tit,{v2]*Lt&&<H<8d`L]1' );
define( 'LOGGED_IN_KEY',    's9u;v`6yYTFo]+xinqu:Oidpw404 }N|Uh0}MU.|P2Z06]mH6;G+C9UI](n+bnlr' );
define( 'NONCE_KEY',        '{4B3@V$}pH`lHX7z8ewzxSLGa44{g0T, 8s-u$[F6l$y<gM5tk;sglN,JGf1T6*I' );
define( 'AUTH_SALT',        '+Bl9Jt8VQrt$^Ax#4dbDv.k!$y/SB |0{4t+fDK)/WlFc/jB%h4yY6{RqI7Ov4F`' );
define( 'SECURE_AUTH_SALT', '-|YT_;OU.XH%U]&g,EhXfAjJJ$9`NIWtq~GHx74!a(A[q! )c)t7c+]y}s6nA`q{' );
define( 'LOGGED_IN_SALT',   '|ZNnxJe6` t[-jcwB,)%;sR@p3Qr-gW9Zl*R5#CGrI<@>23]|ZKqolR[mJV r0Iw' );
define( 'NONCE_SALT',       ')$nic/]wAerPfD/(O`RSoTXI#_T4vy9WsgmOpOM%MBwoir|0Ju-ZEfJt62+1CM-,' );

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
