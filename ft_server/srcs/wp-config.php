<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'rvertie' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rvertie' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '--B-K+!f[i0p&-Up^O]`oswhoqavSoSQF$BVrpPhjCn[+>On%tCb[SqX+B,/2#Ai');
define('SECURE_AUTH_KEY',  '},/`eILa4*-tcZSJbNrDj;,#cfq%x0|x(DvIGjSo?vhu-Gfm5(YT{?_0R_0l//M1');
define('LOGGED_IN_KEY',    'uC?(mmQ5D|?S!A4QP1deu*3+}i}jP$T{X^+Cqd->L](| F#))4mST~FcdXqdQ4lY');
define('NONCE_KEY',        '#]Hz?6|T-`P%!L0|Xn^-5}|4)VUz$5g;?VKNB;Gn[z!QUSf4|HU2r`LuE*E>Lag|');
define('AUTH_SALT',        'mE]t,7-rDjJr)}o/Ie+vrs^|!4.89(dmfDxu2LDAg3&D-2i {7V$cq;3UY|ZD_:a');
define('SECURE_AUTH_SALT', 'o B#n0hbx]MUh0A5+r>kOL,.uhocLIQC+>S$Bi=rchMDU3)p]#@{)yq3Rg+0@HVH');
define('LOGGED_IN_SALT',   'Qeo~W{p@3yFMUW(L;{$V0B+3/`m3ZM-*5)NER( <0vTKT5D2{Agp)|QSe?Ru1+:e');
define('NONCE_SALT',       'WRZc6F46_6DPL JZBNd7An.8-*rYSl%A5-!HW}px<z<%b-iI![4X2`hvo8+DE<s.');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );