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
define( 'DB_NAME', 'food_express' );

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
define( 'AUTH_KEY',         'W]4S=Kb[/ $CSpjPedY<w%sM`u|TEY?YMMkFs,E:2rGt[?hOf#3aUDz8oQv>%dem' );
define( 'SECURE_AUTH_KEY',  '(t{:wuCdP;wSGGUseJ?s18U8$idg,f]vnG?rm`40UA!o,9H93.[qS)v</~ayUkR/' );
define( 'LOGGED_IN_KEY',    'nCBVM;P@4~qX7e-E;N[5}c`*T-*4G>qv5i[(?}Eo}AI3<cj l@,l_}h|1n3/F5+U' );
define( 'NONCE_KEY',        '+UWc?vQ!Bb6]g1!Z%X/e[0FWUA#(jmCZ*S,^Rbj]VH^=>W!9j2=+OHVSF+ H>B|5' );
define( 'AUTH_SALT',        'Y;R*;xi7dVBB?vuWSMIDabBzsz6]`v:@fI]s4g$VH+&SqffFl@b<Cf]o/%`6=M)]' );
define( 'SECURE_AUTH_SALT', 'f`0)}S })L0J?)72TP.t0~Q?E*Y,[`%gnUVf!TE}.K$^4-tBioU=qn]5dE[3%ax%' );
define( 'LOGGED_IN_SALT',   ' $tKnG?M^<*s&s.V?8%, NzgDG)*0i%%WQl(vwnoN*rK`_=g6-WvUD4N*Pa|bp!D' );
define( 'NONCE_SALT',       'vho>l%?;E:xs2.6.s@Hfrw]0N~e4@|D#8XwP&5})./}G*)Z(aMA,(1mH5CP(8-P^' );

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
