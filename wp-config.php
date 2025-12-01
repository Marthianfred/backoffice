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
define( 'DB_NAME', 'neoestudio-incio' );

/** MySQL database username */
define( 'DB_USER', 'neoestudio-incio' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MMpcxg98XDlIuCgLK5Rq' );

/** MySQL hostname */
define( 'DB_HOST', 'traigalo-industries-mja9rq' );

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
define('AUTH_KEY',         'z-9JXm#>-R<JCr5cd=4k_vKWZFlG:Bi+.ZIN>p%T~xF&EB8,Xem0pkSo9YBnLI]z');
define('SECURE_AUTH_KEY',  'v}cg>vAXf3c}5_iMq{{_3ac&E`@G *AU{uM4E?eQTOvp|o~xr@qF!5E^EuPvb43]');
define('LOGGED_IN_KEY',    '^j`TX3Z!6Ky{-}lTiJa[(w*B|#iCD{$?Gx)CC?F;kS$}:EqY|*-3mch0Z:t0gjt[');
define('NONCE_KEY',        '{%u]`8DVxKd{NC%!E.b[/wN?tCN/B6J`8f`R0A~cGu<tqk`G$(K+BI>S76m8|odd');
define('AUTH_SALT',        '/lLxB0$}-fqG<{Vz%/wChbMpnpE{fOt`ZRRov^>WbT<L%?jzGOv7+|=<CS_97y1z');
define('SECURE_AUTH_SALT', 'Z;E6mIZmz_3E?[$gg9=TSBj;ao.-a5^-{1jRG&;6x1}o+SYM<mZq!:6<~A:7i+M5');
define('LOGGED_IN_SALT',   'lw1Dj-0xoi21Yydut6>@3rCD8o^;{xv yH]|&J{eehnUrnG2vZfT[fF$C;dI/97u');
define('NONCE_SALT',       '],{?P-7f4VeWoX)jU<2was~PAi#Z>JdQ)>+W8IgJ]-5^DMcA!O}fud*bhs4=O#e5');

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
