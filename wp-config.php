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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         '0&(LJL-]>9_wJ(=Qx_aO1CmJWtfun`T;`Fy~W(.jCO_fqFO7`Rsw5w0nfcYCyNu*' );
define( 'SECURE_AUTH_KEY',  'G85!qIxg.mx@ahfW8{e@@9=#Y w0i!MrdbSM42KlUNDo6#CpB6U^IlM|db-}4Om*' );
define( 'LOGGED_IN_KEY',    '|(5rayrtJzg*}`mD75V%Ff>EyD-1H%t8<KfHagxYkfY]+Dzx%3=bf 5;F#7DM54R' );
define( 'NONCE_KEY',        'GKm7B[5*f.6X#Y*4++>Y*(J^,OZ:SsO-xJxSW^<1b{|bEie/&bzZn?j+yAJZ7]EB' );
define( 'AUTH_SALT',        'I .SUTrXrBh&wTN7uSmlMMcl;sq}?0;~`:QM/VaX=uw LLjfo_}}<py024+p8dA~' );
define( 'SECURE_AUTH_SALT', '`Eljy{l&js&3~okz(CYL2d#2?RuRT)Nl`[=3L`-KFVJ?YvD%#jH:V}h(rTRk3uw=' );
define( 'LOGGED_IN_SALT',   'Bk,I]CqRac=R^5k?t)=y[Fj/xhZu3R/a#h`xjY!L5mH4iA5RJ%w0StE#6xi9]+m(' );
define( 'NONCE_SALT',       '[YFrs>-4kbrv4cDqms&:F:9?|w?C>4jh3)HS5P*8U^oO&bwpEt~Ek{9E5;CI|o|V' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
