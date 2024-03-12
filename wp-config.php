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
define( 'DB_NAME', 'site_manage' );

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
define( 'AUTH_KEY',         '9js`|tzZQhz.7pPzVZAsNnQ;joms8QEUplyT587*n6G*czQ!-L4}s;]|#?t5pBl0' );
define( 'SECURE_AUTH_KEY',  'waxv/^1G/ BmPr?OK3P0Whb)>iF=/R2eHqT7|[(Dx_=.dInwX$qeSRa/#yYUe89R' );
define( 'LOGGED_IN_KEY',    'B!PhJtr9QS,6r2m7*ZB9Cl2Q0>kwF00Uw4ADOh{o~qM7E^R`[@budJ>oh};Xnl#{' );
define( 'NONCE_KEY',        'Nt+x-<QZ6a y0B|`?<9BkEd?VCxRi(TsS4WA`13Ah[ +|(jZ6~Dxz)<Kc4UQpBZh' );
define( 'AUTH_SALT',        '= s(,;<6Rc?~[#4fU`]<#|9#e`9+.DCsqMc~GCemk:rZ0tQhnJZ#eYwUdv,#[-m|' );
define( 'SECURE_AUTH_SALT', 'bA9q2NHNG`_Yav?48nLJ~I{e/G4dy@ZL=${^J,QkuC.#.9-HT(vo2%k$o;m2*d/A' );
define( 'LOGGED_IN_SALT',   'x&3$S$SlxPX]v`n29qFTPGM- @lF$G(G2.)Pk+sN1[N&jXK-:2QW[Hk),7>Q[nT?' );
define( 'NONCE_SALT',       'XxmsX T=qkfu0jh]cTB$KisK%seLbd]/pJAm+gh;xPQ+q@?kNP_/l/^1qh@oqPD{' );

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
