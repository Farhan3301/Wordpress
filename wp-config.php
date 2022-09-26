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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'GeCxuY)).(WMQ}1tJPk+E!dUUd_N*ihb@*LSkkTZYf(4{.>pWD#]pHE*>B4twSD}' );
define( 'SECURE_AUTH_KEY',  '!RDa?;v;&{D8_+h-q@e@x;64Pk<oJ$59lBv%feyxI5BRNHO(V4r6t-Ua{~T6.X]<' );
define( 'LOGGED_IN_KEY',    'Q{>Gvwop[T6hzEuVCP%s>)`i4*rkf`<Xr[&,I=91)eNn_)<i2F~cxm;$$8`DNv^9' );
define( 'NONCE_KEY',        'T1tzWW`t.B)oV-8+b`aJ9Tm(^lP3&wChy1?kbc>&)F[a{&r;KHIb;4Equi/@Qw[S' );
define( 'AUTH_SALT',        '{HvIt%BUX,3ha*_9;| ~Ju%%/Ue%1+N wavmt_EdMFIk>[([37eha`&<:)6/q6t5' );
define( 'SECURE_AUTH_SALT', 'pC~KS!k l/liS#tP7v!QhpwTRL8ou4Ejivl>5A{O*u4Z|1yHnG4,!,c<<904g-z2' );
define( 'LOGGED_IN_SALT',   'Bi&sPQ<(JAZCf>BL.j5|0E)GSFI_Z4R7*$)$puh*,)g4p0_t/JKX#SZxs[Z OmJ>' );
define( 'NONCE_SALT',       'g H^wv1Nxf>F_{),-%w-[.zVMZv$<`2v`kh260E;XN1PNe7id6_}hp7GIEND}=ZV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ridoy_';

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
