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
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         'rXp(|=]P=.{BCWWO2v=y<9~f./1(-Z|`E }FsiAi=gR>K0CBTHcW3DWV$[`Or2Ky' );
define( 'SECURE_AUTH_KEY',  't,*u&&sse-YA&C]=TQrHlJ&KG(h)8lQqL.j@sZAEJ0l0h6Q[FFJ*r+ZE3E7sga=4' );
define( 'LOGGED_IN_KEY',    'Zc,=I1c?{d.t$kr-)=@g5r]$)S-,zhxm!9jjl6$K+&x%`FLzR^#Hnh+4`Bd$AU1Q' );
define( 'NONCE_KEY',        'mn eCPy-h9F?15N]ANaxkFx!T@(_S>et.3aiO/k`cSj=IS@:;;E4]N.:g{Xb|^<G' );
define( 'AUTH_SALT',        'z_1]@N?9EhqIz@i+eQ&nTl h$_ReGB^-742pH{G01mS2Tc^;%i5$jJeTskA;%o#@' );
define( 'SECURE_AUTH_SALT', 'GoIw56d@i1k]E|r=6[l$dVG%x$0eHYa`ml+)$;P]Lk.=IW)-x=Q_LC&a2OhZwNUa' );
define( 'LOGGED_IN_SALT',   '.*,pRs4>q4&bdj^ dRNpcS:!iR:^V{6tJ.Iy1V0n0Hy^e@2Y~_fJx*5%)qTOg|Ha' );
define( 'NONCE_SALT',       'Wul.kIaJVj]M.F5<HV2~%8yTX)iN*)`rH!HuB}NS`G^hl^_tA(>Nu !(&x64_DR.' );

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
