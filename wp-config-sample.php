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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY',         'vu0FdXx(MoAQh;*WOnrw+#Mk5Z6AMl:b;|hM]Ro]#HYP4J@r}cnc{F)NUXf<(q/X' );
define( 'SECURE_AUTH_KEY',  'xbbuA.U2`mayyplRVL5,_ IOd65nbK/a#pMO  FQ.zTW:#<7pzaYKS]y)UXO1&Oo' );
define( 'LOGGED_IN_KEY',    ' TJWV KQU8# `+P@bQQCN;QQd0KYYG:p=&Mu8yrY$x,Zt1Tz:]g)qZL`CP2:,!?z' );
define( 'NONCE_KEY',        'f<GBfSTNJwV]c1@z+7<rd:kbsP^V3o8FV78`%#)9Q`WVGPZ&B%)1-n/;nSemPn%y' );
define( 'AUTH_SALT',        '9YT1Bs/2-VaS^wYG_s$K&ea&v5Qg^wte#yW60Nl[iXefa[#jw:3+y5)%eEBrjr1w' );
define( 'SECURE_AUTH_SALT', 'Qx`ZjWwos/P~vi1Z#~Yi%.{[DUM[prD4k(=$/f4wcW.X0pX.<dQEbwY=wt5|/uDf' );
define( 'LOGGED_IN_SALT',   'q2t3_T[<d,K%]&}3c~zyU8v4/G+.xjO^*u0[Q8sy*7{+NfTH4=*sD1@>,1zQB#9M' );
define( 'NONCE_SALT',       'BCs2r_`%AasELu@Bm& d{)oQJ)c=U@=`w@N+lE;?3s#,<<3_vKb8V/~;?U~#CIYa' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
