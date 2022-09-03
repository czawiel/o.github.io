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
define( 'DB_NAME', 'sb' );

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
define( 'AUTH_KEY',         '#b(5f~rXw9!i$tK$WA|H})BXM9sQv?1#O&~K%k-Fs%ql4~l5/bE:8S|QO7YlwzQf' );
define( 'SECURE_AUTH_KEY',  'YykXhdd~[Idg^/9i6fg]pYR>gqZ;Hcg4$M}ze2]j$x,R-]l/l+!YheyA!+w)E,;~' );
define( 'LOGGED_IN_KEY',    '?=y^2~o|o>`4yXymEE&qK7@9sVpJ1}VQ6+cU8Ii!5OOtE|Zm`7-:LljU|M4:P6G{' );
define( 'NONCE_KEY',        'N{4I^)N~(M{&GVe%dv}z1 s7,me>1a~)sh /_xwYozY_vR~DeAw;70q)(].~G9+ ' );
define( 'AUTH_SALT',        'o;y:M5d-LC5ena7}X3pS{G/k+)?jG}V#uS,yne2Qx!?+<+UCz}Dc}}/tKwl>I`}a' );
define( 'SECURE_AUTH_SALT', '/vk@/RE+4u7CT/eE-hEang9/c<F#T}YA9h#T!E+v]#]1[YFr/v.f/&2L|V7[e8u!' );
define( 'LOGGED_IN_SALT',   'Pu:jk|;!!NP(%S7RDzn5)gb:)}.dG%&^rMA~7+qY$0iV;z|~+qq3jZEUOa&BV ?c' );
define( 'NONCE_SALT',       'sSAZgaKES9nc+LR.AeC;`K<%z#ww6-v;e;+df[u2gr}MXd35Iq$aO*[Gh^.lI<g]' );

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
