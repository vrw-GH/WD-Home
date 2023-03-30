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
define( 'DB_NAME', 'gripf001_pqcfg6k' );

/** MySQL database username */
define( 'DB_USER', 'gripf001_pqcfg6k' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Y~KVjMZNfdw55pCKuk~07~)4' );

/** MySQL hostname */
define( 'DB_HOST', 'gripf001.mysql.guardedhost.com' );

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
define('AUTH_KEY',         '83PzQwpKah4r5WKuEFLbU0eK4uOBWUhPY2kCo0RTkJsGNDFfFTLozNZztb3GZrpy');
define('SECURE_AUTH_KEY',  'Ox6mpZ8nxvGzbbtYeKI9pXQsBs7FB08NAUZpGolFgoyE3i90SeFmEpKBTZ9OUzYF');
define('LOGGED_IN_KEY',    'DKSClH7Zu8iWA46Nl5VquTeDyOEJIrxDEO03jaRrAFlE6XC8AkBK5jqE1r2ZiVU2');
define('NONCE_KEY',        'rlfX2XJwzrNKaLmMCwnUFmyng8zbhNrmT8i9tEw8TjNvvcwNOXjM1dcm2XWrEeWl');
define('AUTH_SALT',        'sWgOfD0jxcKy5kdBEuWaQvDBr0OXXMAxYxMQuuMv5XOx52BngKW4mQTK3rgcQWAH');
define('SECURE_AUTH_SALT', 'ydCnwtzRh65kl0MlF81pX6ucSKOODQburUPSwPpkl9cGLSh7XjqlKsOuG4VL33is');
define('LOGGED_IN_SALT',   'TTzSdyxIzzTeWF4BmWxCiNJvbNyuak2e7NuuBg4TWnF5nJmf1ypRZswLEopLaHFH');
define('NONCE_SALT',       'fO5RkSpayJHP8OGeiafFZHHHADibA2je4SQbTw4x5GSoS4Qe38WMxS01NwnBYXvm');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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