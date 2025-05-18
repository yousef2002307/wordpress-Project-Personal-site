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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'rm@8*}2IE>>LXwd)iaw:6bTZl0/aj=z|ZmCPngh1j[O1d2T^<iQ|].+SWQb/Z?KM' );
define( 'SECURE_AUTH_KEY',  'da?%}pSC8sp`avQj&Wi>{zLN>qdJ=./e@{{6/NUq}_Hw}&Ha9PEx`w=NQ|.2f:Hp' );
define( 'LOGGED_IN_KEY',    '>*6J[UTMgB%b?<5&N_f_7!Nhc-_MMgK^]2.ulUrO]{fa|[_P[9=|g+ {(9S|ztT]' );
define( 'NONCE_KEY',        'L#.? *5[?U5FmC7(+k_-DT5t67WRZM_~hw,c9RII_J #p,@9(dbXk[OP]8cY0nY;' );
define( 'AUTH_SALT',        '>26JSYRj#n)hcAb8D}xp)Z@f5j9y[_hSa-iQ!3z(Q+k,XWI_,1ZrYv%3bKix]/$;' );
define( 'SECURE_AUTH_SALT', 'q|RTDv;L# }W9$Id- >m2mAMuOM`at1 %etV:mg+_c#N~lQe|D2@?j N2q(Glf|-' );
define( 'LOGGED_IN_SALT',   'p4+{|>=Q9 Hr-;Iy@=.-%k@Rd1T>9{Y_owH%Z5v]N7?%[dQ=7rebQyJ]s0qpXtw5' );
define( 'NONCE_SALT',       ';%^,_&_{J+D<<4Qe8ngiV r}HDP4-MbdU5u{.s4F<c&MF:yYS9g6UIJuBO&$h3]W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
