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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'space.db' );

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
define( 'AUTH_KEY',         '=6Zz~_vt?{0NDi@s]e}#SC[ aw3vp[~,C4(FyocGI{,_WpkQ.TxfH%`X){t^Q,zW' );
define( 'SECURE_AUTH_KEY',  'G 89b{QbDx0aFE-wbyyH<L}a LXoho:@PA2@D.AaySp3 ct:TvtU5{HH=q($r)&k' );
define( 'LOGGED_IN_KEY',    ' #.RKfsOHv+F1kL>3m%O1Tm+>WiY,qv-0=5UDnUYu{~w[4hg^Fmx]Mw KUG^gC(D' );
define( 'NONCE_KEY',        '4~7C8$0;z[ 5% 6Au !OuDJ77N0SsK%EERQo4*Aq$VtnDaeP}>ia:Vx^aZICQY]I' );
define( 'AUTH_SALT',        'jN:0orFPkVt6gO*aH0,c`fg/7!*4,D=vKc%}Bb+drSJ;Xy_dXChhq;jhz5p2a|L:' );
define( 'SECURE_AUTH_SALT', 'tLg}d`g7Bk*p@^:M5y*xW}oGLS#hFC%8HFN{VPti..W&~3,N(9B[t#6?wLXm9,@P' );
define( 'LOGGED_IN_SALT',   'UHh)3:.G97SN&.V[ov; gC<=ogAthS|fAD$R4{dT^/p[|01ry?!AMoJHg8#~R@zL' );
define( 'NONCE_SALT',       'C_nNq9/W]>GZiJ&$%353l6gcp>>iop,[Nhv6/)JeXOFVT@IpM<.#Tv^Ro5]+ ,_8' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
