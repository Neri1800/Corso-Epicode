<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'worldtravel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+{~Q^Yx$etzrNxG[}(^ii~mp33@g)8_fQfDmVMlaOU-yh5C{y&5/4`wDl{)=i+o&' );
define( 'SECURE_AUTH_KEY',  '_.T+jh;V;iJ!vtH_OnxXRbG0wcU].,+!|[u|KSLw2|=0 (P*2z:Nh}-&ZC;``vMF' );
define( 'LOGGED_IN_KEY',    'H8&k8eB@PLfM3utE:PUE1X)559GqxMb!x+<0Tn4r!pB(Uy:/pLJx+-=ne;MH-nZ`' );
define( 'NONCE_KEY',        'xCuYu .6ras<lz!pQ/!Cmi0#!,0(4>S_6>jXG8pR~gJU[ZPrDrgghj]!)lUN%VeG' );
define( 'AUTH_SALT',        'IM*I|B6[6tFSeg94+0eTl~f#E/Wg~UpUe,b(Z=gPCF,oU#L],(`In7H5T <^ ]>&' );
define( 'SECURE_AUTH_SALT', 'AW.4fC9*{{ueX k`TVAm:lK>3zzoY98,QeBsM>2Xf}(n%99vO@BHOMrtwR8x,gXB' );
define( 'LOGGED_IN_SALT',   'BvB4=hYQ3nr0=qfm^},42!a@zZQbH;6XHL%}.Y+Z??E+7>pAw}RalkX_FruXJu9P' );
define( 'NONCE_SALT',       'qu9#pM51NXj?GEZHJPb5WwwrV(|WnmrbF+g;smc7+@A@xwz;Sc9^VcHj2c,GW2/ ' );

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
