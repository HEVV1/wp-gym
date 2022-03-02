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
define( 'DB_NAME', 'wp_gym' );

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
define( 'AUTH_KEY',         'Y;x-FupO $qc0mbKok2u~>81JyZ:WO%Ew27)gAe;]Yo$,VSa2mn/:>jY@.t?41nX' );
define( 'SECURE_AUTH_KEY',  ')HTiRx~/fBo:u[2sm,w^}40CT7]%!o~p)vB&fi#GE9GU*!w/6@ b7h]b7<Y1VKxc' );
define( 'LOGGED_IN_KEY',    '.bjs]kup)9/C#6N]#zS]s:|- @6maKTGn!w[r5`Hm| 6vc ,5)zMW(# )?;$[(ur' );
define( 'NONCE_KEY',        ')R9,Eb4E1m)Py/fv2:9PNYThefQQf+s=*D98T<![k(sbeJ:$u[j~z0^?$:A1s{ya' );
define( 'AUTH_SALT',        'tCLe^k]*AHDA#G}R/t,sIA3W)GpP#PE_<R~  q0doM_]$Vw%@|*BqNbB2zS<M$>/' );
define( 'SECURE_AUTH_SALT', 'l[&ufzF]J~ms0&coo:!e.@>X-Y)|(g=M,q/wQ:^BWZfT4aSjT`kLZ&9WKboK~~Qh' );
define( 'LOGGED_IN_SALT',   'C+W*V5VGmxqB--ZM*.s/V0vdQ<c>)8]oY[<9!AyBV3]yRp86sF>v>A>P}P;P*=W`' );
define( 'NONCE_SALT',       '#+2<>]2o1jh1/y,KB4C-`r.I*0M3CE2lo7lB024U!gC;!C)3Y y~gAtT]Az.V@l4' );

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
