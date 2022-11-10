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
define( 'DB_NAME', 'landingpage' );

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
define( 'AUTH_KEY',         'HsUiyT!+qz$0UU=(;Ifr{F-@@?oa6+f%T9~Dtf]gDprq|dZVrEh5>dZ%>3}+t0+g' );
define( 'SECURE_AUTH_KEY',  'HV:v[r$q}f9rJH|bwT=Xq}|rxKDd}kAJkKB}b^)g><oLPOHbtMq4D&,TU1km1Afk' );
define( 'LOGGED_IN_KEY',    '1~LR#k#U>zvS=v^&oZa)VN|{[zwe-p#rGea]r1^Y}a_N%NOq95[12T7eH[7<)8$<' );
define( 'NONCE_KEY',        'jY@<9km[9}CSG6=)=[sY-0C!%JKT-44c7AKgmA0d~}I&6|,gZd2wh6_PeX@~HPX(' );
define( 'AUTH_SALT',        '{Q6r|knf}4p+?QA.+(*JmRPi4&A+603 )$~KXhm/T/42(p?R9|TT6T$F>zufj,8]' );
define( 'SECURE_AUTH_SALT', 'GQDpX9w}=d/.EMDSu~uQ2X#qdn|?g}t_&`Or^E4u)w.`zN] 6m_,M2q2<Q<8nVv$' );
define( 'LOGGED_IN_SALT',   '*K1p@OTKAY=+klSUQ[26yn.lkD:pyYNZ*Q#/>hpc&|,Fwm!Lo!x^}^f9:.LJ Bhc' );
define( 'NONCE_SALT',       '1SslsJ3/WoPj[EJs:OW7YrF0Uo_`5!u(V!*c6:c6ak.(Y[2|I45&]~ZEpbb,eXX>' );

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
