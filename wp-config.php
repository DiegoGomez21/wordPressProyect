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
define( 'DB_NAME', 'platzigift' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'SZnP?~]|{tcE~?& i<>?Y?HwTb<@EcYY|<Rv;uqFPez[L}~)GFOD^/`-B6Y-PB=,');
define('SECURE_AUTH_KEY',  '0&G]Coj/|@m_UBRdrx|_Ir>q{;<eLRR`MEE9RAFiTp4EO{y;RW+!Wh,ME5*@An[f');
define('LOGGED_IN_KEY',    ']2jI$T7;]$p!+:gB|.`-$Zp<37b6n:%?z-/0thjm |%bK$,nZtD(#;jR+m-Llj{i');
define('NONCE_KEY',        'Hh50I>:|&NSup-)NG>#~]dzSGAZohQ0K9L]Me@Wz@# s-=}*;_TR`L_4cG+>-Xu>');
define('AUTH_SALT',        'Sd= 7aldi{rf~G+vzW|dSXW@!V<xkC.<KD00B-iEf#]Z~)Pyin+TV>EwzGvD-vwI');
define('SECURE_AUTH_SALT', 'k1|1aSj@Cmu1RRPze#V _4S+KoFa )Y&6xUWT[3$xKmPZf9~H@~oyZ6XA<w|8T|P');
define('LOGGED_IN_SALT',   'dk$!+pi[`L0cKHme.6Ktd3?;>w5+:enT|%P-<_!bHyPZE00BzBnb;y0Y__)R=FFV');
define('NONCE_SALT',       'xG2%y+kzI@C_*]ip5.bs-nI58FEe8V7v0Yjv[hD1J@!P6[f0;Jhtjvi1T&GA@F-X');

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
