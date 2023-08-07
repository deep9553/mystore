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
define( 'DB_NAME', 'mystore' );

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
define( 'AUTH_KEY',         'xN;BE<34}irGfnSsle<@(fH(UiTG):pNH.^S2I>~bLha~(}0K#_u/tZs,=an% 6=' );
define( 'SECURE_AUTH_KEY',  '9R>3}Sz7P{9in_|[gVF[:M!lH1;@d@|UejW|-!r^AZ:sdo23Ibk-{6g+W`bfr-r@' );
define( 'LOGGED_IN_KEY',    '-CO}G:Osg,SX/=zb%**UjVgb7U}f(},3zp^~DWw}00QyN2<hDD^^j1FFXWNLlKxC' );
define( 'NONCE_KEY',        '@z_5w>XfKC7E@N[;r4UOE2dJPvtrh3usowx#2grbTBmpcV}m!z4:s?ya6}2`KK]=' );
define( 'AUTH_SALT',        'u*dNp6y@l+Gs{^@Y_*h){o42VpGAQ|zB!_5zLfZ(-Y{<,d-Igsi1eG>IO:iO~a9-' );
define( 'SECURE_AUTH_SALT', '<y.4GJ1_go g`K;c,Ut]vnmeZS^V6Nr,<+X9[n)1}#Z0$qMMp? }XMS_m)-5X|ic' );
define( 'LOGGED_IN_SALT',   ')V-q!7^!+2v]t?*aImpKz${Yv<*?so3u)..?+ZCs9u,Zv^$SV:py&b_UoHB9WYfH' );
define( 'NONCE_SALT',       'A$TJ0pJPGnUs~ Vx[ :Q}$:qLbSOce :]&f(qt>p>{.(z fUq7C)FyfG,aV!dLwc' );

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
