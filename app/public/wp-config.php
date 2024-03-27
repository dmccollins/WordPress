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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'n;7nWQqYO8{:NRp`Il_voDYgDnV?~%-fCIL8L0ba*z33SJ1qJLJL7E%o}Kz6hL4i' );
define( 'SECURE_AUTH_KEY',   '7xnE:JJnH2w*q46b[U4PxV(!Ui7Pej8f^+L) [!+[/y`w*)Pc6 ?h/Apj!wdbk!G' );
define( 'LOGGED_IN_KEY',     '7sZY&NV$c#}Q3gP7<p[vRfiD#?B+H3w+qTzOxWM1i>J*S):+|rQBLP&hWLq+5.L6' );
define( 'NONCE_KEY',         ':-$6K*k+zGQeU{K5m0P(tL1GVmkya^v{vno-jb=/+NEw7kk>G4){q.gUCZ&6vP8W' );
define( 'AUTH_SALT',         'SU@x]k.-nYc|H+my|U*[+3`FxD-YW,}a5gIUyyGO*ZTR|FAKi32%)Z;S^=:u6?QK' );
define( 'SECURE_AUTH_SALT',  ' Lf90n0t7qyR^Lf&cC/vj;K/;z(2RKFu?AMhYR?~Mk7nkHuWOE^8^J=+8#]7c@yn' );
define( 'LOGGED_IN_SALT',    '-Ui}rP==yc5WS2(T]Ytd}?QsoSIg@sFh1fta6OQ}*Hr!a80+w_CpG([CQps/`4vi' );
define( 'NONCE_SALT',        '>XUn:fb*7@A:FKJL+ay`:DL@_5c#7cYKNh62=j]Yb9{/ZAd7I/jScB%`SZ2]x3Iu' );
define( 'WP_CACHE_KEY_SALT', 'iwF$u]rDM/#yscoY>>5nqq5O5vl^gV]o]np1&RuDfbl!<5:w>dH-ksztq7B97j_k' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
