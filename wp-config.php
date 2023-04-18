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
define( 'DB_NAME', 'labb2-casper' );

/** Database username */
define( 'DB_USER', 'casper' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '9l8V3c^}?EVa{ea{>(9O@0YWr0UfiaS}DbZBLa;f|ii1@_Xko2(z NeleQk[aqlB' );
define( 'SECURE_AUTH_KEY',  'n|pz/if?pVsYf.k*Dn&(4tN<{HO#HBx&b#FZGcr2A{Dc[sot/DEo5uE(-6y6*qCU' );
define( 'LOGGED_IN_KEY',    'Xc#.%Z,U[W0.5y,5c{$jxiODZ/4LS*pQd>&+6AwwB+b=B_*A5]_vqm.Ikauf125N' );
define( 'NONCE_KEY',        'mr&2uqlRRNg-%Vk7gTvVyb&0YD*~ioUsjob&6_<05gpOBWv5=yGZoy^1.HFjRm6_' );
define( 'AUTH_SALT',        'Hp@n<-?rvmB$<dA7ZLD&%?z=4uw|5l~g:+.p-mt^{}YDi,ZEMxv701Qf#jMI.8ye' );
define( 'SECURE_AUTH_SALT', 'sPQ:!)>UW&2?kZD;jqWd *qkyN*RhMe}Xl/WV3N.]p9jzkv4k-g)-Ki -^,#^Z[n' );
define( 'LOGGED_IN_SALT',   'yOsI/%FKoCZ`|;xS2YS@.ul:Pg?RN(|ck7^>,m$ehF =C~Vz<^B.X9kS6Id$oI t' );
define( 'NONCE_SALT',       '+gm`V<8W1_7KfL%)z9gha;X{.p&:NHJQUU&v=k0.T`-T31<`=u7QtM}|Yufyf3;P' );

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
