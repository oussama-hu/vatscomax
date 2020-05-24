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
define( 'DB_NAME', 'vatscomax_db' );

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
define( 'AUTH_KEY',         '8oi(MK3zw^UT<$F^)1|-4=Kwigs?]]AsvFZBVR@0/E|y|`~tih<*P:E}5yEDsjo/' );
define( 'SECURE_AUTH_KEY',  '7-!s8d[Wd,AD3EJ,cS`abK25m V_Xz#MY`u;r *(1(nSP:wB&|)hqqG.=AadJ V{' );
define( 'LOGGED_IN_KEY',    'VK8(/o#*rvkIK+PG1S^5!x2zeht8HXbWQu-oNV-r_kV{#;YPq6_1f$mR;sSjV>g{' );
define( 'NONCE_KEY',        ',H&P3{dv3jEcz.e491ra?Ckz 5OA+!kAa&W/_z@O,~-iatCX:<prPv(f:urypLe:' );
define( 'AUTH_SALT',        'g5= V#>TsgZ:[9o~_jER*L F`z$&*%S8sY~ Cu[T8+HC,Sh>!l$hj<`1okL+TQ5F' );
define( 'SECURE_AUTH_SALT', '2J`Q0D45_>0[Lt>h;iii3=*QWnV8DM3VUGOwMRl(yJ.c+`8]e9h,!_VMFK?AFj(j' );
define( 'LOGGED_IN_SALT',   'HQ#fFaoQ]Cwz!D}_HAhnXARu*QExgY8*S!YG{J@$KE&rDJ3Os4ZNY<!5kXNbm$S~' );
define( 'NONCE_SALT',       'm;1(XwnrE7Vb).7hKPSnIv//&GliYMp_C<.z$)vxOslv}Fx1?`U;@]qYt;BPsxQ;' );

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
