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
define( 'DB_NAME', 'dbwordpressblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'pm|6C~`^Qeqv$;.iX@@v])BUD0Q [hg!I0x{Q>+!#`)~[8P[p[.FdKQ8|().x*i[' );
define( 'SECURE_AUTH_KEY',  'wUxC.NR_3sh8|HUE50VF+HMTr{JZ0V@}.pFJAak$Vnm;UnS0nRewxc:Le/R87A}O' );
define( 'LOGGED_IN_KEY',    '!Wb:LY2Q_/B&>s0cGBG>67:,.]/<S*F<A@J>eg(u%f1jsW&igZ`OOVShAaKVR0&U' );
define( 'NONCE_KEY',        'P7A.E_v?Zecc186w/U-v&eT~.Uk1SKkFO98[xesbuJvU?$~E{ qA3F!oyH}|8$6%' );
define( 'AUTH_SALT',        '[zWm5Xqut;;>=i38{GvP~{glG}#:[2i9hC~ZJFrM?}1DpLNGZjw@P@kYXis^!73c' );
define( 'SECURE_AUTH_SALT', 'Uhc2o#lP>O/$oo!^I]%f&n{(hWYS!)3ei6_%U@]Y{;Kq[6$[5F2O]($<$l$fmMs(' );
define( 'LOGGED_IN_SALT',   'y?7xi/m[P}%(e4nc!|e`l#WKk?>,m`i)AK%2[e6t?Z}gP3YrO7=T3e#6jsKl#F&k' );
define( 'NONCE_SALT',       '[alI;<gk9ZGXF^fZ :[/0 OH$mp?KRYHICP[_)I(!;5}L9xHI$!=V92QVt/#U$Y:' );

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
