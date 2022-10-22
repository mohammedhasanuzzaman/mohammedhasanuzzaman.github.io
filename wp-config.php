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
define( 'DB_NAME', 'mohammedhasanuzzaman_db' );

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
define( 'AUTH_KEY',         '6rlmyh;-0qpFQ]_g1o,EP.str&O=4DV9/$Uy.k(5/2o)qJa0+PBcwX>,%Y}U#N|G' );
define( 'SECURE_AUTH_KEY',  '}yXDhsv*/Ppf3djZ!8[U^*!E,!G_GSZ/eXvViWqZ9d,_yu.=,+r@_-8Jtf=[>NT>' );
define( 'LOGGED_IN_KEY',    'q(OCy[NyFO2Y!SUz^w~kIs,LUq6=FbKBEPd-fR{RaiVxJ9svkr=P%n4:W,<2h*F/' );
define( 'NONCE_KEY',        'x{Qyit_?g2e6EPnkDIVxZ<+N[GuNjG3VM0a`{6,Wj+<@at6G9S:p AR0{FfgPO$u' );
define( 'AUTH_SALT',        '-!@y]GM)9`:n^K<[ c:0ST2Xc7dcbps?fqLL17u>ji?Q LZcCT!+n{xSh^H<f83u' );
define( 'SECURE_AUTH_SALT', '<OxNp`[Q6ZykDrt|.{8[XfM)LORDNJqhGNOkVyH,^hhng{Xf{ Jp|EB=+#M}X&T*' );
define( 'LOGGED_IN_SALT',   '<]jk@2}a^j*6]!}-]xnqq/#@Xdm;>EH%ezSjeXg%wy/?$]<jC<c<&&GBU6ihi6h5' );
define( 'NONCE_SALT',       'QfF!sajDg_opG9+;@ke5ULf3vfbjB4o==>-oDl=^DC Pr47ME=FxPP`Dthu:I0no' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

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
