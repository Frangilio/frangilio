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


define('AUTH_KEY',         'VFALKK4ozm5GRWlItGud5ufDprUYOQNiXKpDcdxfrJDwM+oJILqV8Xx2Fs1pPBH3FzDL6kyDrJecmKHySNRq/A==');
define('SECURE_AUTH_KEY',  'xAiyf2A4yxcCiCH+56Jtz0TOhwS799mLTk6l1rJRLfBaPlBImjFcAcjygEvwohIFO2Ay0kmbdK/v3QCqo0zm8w==');
define('LOGGED_IN_KEY',    'aea5JkdpZWouSGuF17eaw//awLYWW7FI7eUmg1hwNXJctultbBPkdFDvtSTOmpGSXBthttmed9QNxsR7kTp+sg==');
define('NONCE_KEY',        'c4lOwUycTahiopv4J1WHgBOPPwBU5Rz5aOANEtY2x7CIIwFM9C/Vu038w5a5ZHjYYHX8x4Yck+VQgUeOo1/mKQ==');
define('AUTH_SALT',        '0N475rha04b3LenwJSt++kc4OyQfn46inGNq5efufyqXsh3fzti3Jvk0Ij5bCKe+w4J2g9aJFSG4+LjYwUYwsQ==');
define('SECURE_AUTH_SALT', '3BY+U2kyvX7Vtbt8OleG7tlaOjp4FYFIIBbReKtGE1hUX5AtODGJwCx2zGesGDXFTWl33O5KhXFf23itXblrEw==');
define('LOGGED_IN_SALT',   'jRWoznvJ/IHrPNrcpDFeTejvcJ8awcvvmfNAhxv1Ii8Aihpu++nCgQDwcIR7qKNBgQwbfopUxDucciK3oFlWzg==');
define('NONCE_SALT',       'bRf2ameM85KZ6WpKzAOMeN8abCSIgMQpRSQxrvYwzwZ8D5+CJfpIXaojQqw6C4EMb4fePkKHh1kiXHXH31WsFQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
