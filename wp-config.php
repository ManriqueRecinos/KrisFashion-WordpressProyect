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
define( 'DB_NAME', 'kris_database' );

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
define( 'AUTH_KEY',         'jVffX c$}ncBIqPX1h1XAT2@4F]m%a8n)b7u57#Lc<_:(p-O?DH4~`%^DPzM2OI ' );
define( 'SECURE_AUTH_KEY',  'F>Zh=)[q|,&|ry87PCG;l::NBz$SMqn7/w02]C;BD#($>%$o>>dY@xB TP4r{^q2' );
define( 'LOGGED_IN_KEY',    '0h)w-rLk+O`d+F)(c|3!S%@E^%Hd&D=kpoiZ.&(Qbi::KiM32yaHhSR@bIIE{)}M' );
define( 'NONCE_KEY',        '>8noaDrIf{eD/EyE2(c8Zc57-hvh-1BhGH:cI^/<-KhrD5}uec*%MQzV6mSb9=@G' );
define( 'AUTH_SALT',        'c2Wj5{*2<00~Tj;fr%j!%>[.6D(Az+/6F@/4JxQ<t-r46]ax-~H#}wuvB<18{mFt' );
define( 'SECURE_AUTH_SALT', 'f$/]4b~Iu zkrDSKe:iHPI0s;x8*T6VdrtLt-f4SS{=3igdV9DlkTSB1qU_o}oy^' );
define( 'LOGGED_IN_SALT',   'v^X8wA|q(4;>Y:}|>SYKPLT|wZc%:S4MD_0M*;QC;f3W6)&:ctpbe[x$8H# }6L|' );
define( 'NONCE_SALT',       'RIu3V=U(uyKgJDesOUr!gkWoq+sH8.ukK>]IK9{_PTOA{Ze+&aAM.}p%eVJ : +F' );

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
