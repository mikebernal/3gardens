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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's5osyMVb145fDhffz5fLfRiltTvb7JNdmi6S7M8giPnOPC8Ut94lZzY9y8iJ226gPYvD1PMEATfb/lo7/qXx3w==');
define('SECURE_AUTH_KEY',  'mOA10JBoWGAgDPa8CaXawMPzxp2bagutAdkI9JdUZFo2mdzxtrj8LjfR32kQdvD91Zjz3ihX/etByMqscZMKhg==');
define('LOGGED_IN_KEY',    '64b4nryzbDUGc/WdiQHi3s584UMN9z7XwAu1ao+ePx66IOTG92tYBLwl+OnSb1voke1K98yAyuVA1bYmcvV5vg==');
define('NONCE_KEY',        'A4keuL5w9cgbSb4iQSMmvn3E2IXpfg/vO5WU97kWDwW4oHmRrMdqEYRnIf9816PDmF5xpXShsQ6TKvuA6rE39w==');
define('AUTH_SALT',        '6S2jnPfXWhhC9gwXr/syJzSAvc7hrdZkjlwoUfJl4iTS3Ozl8J+Xb8vuJgr1vuE1xTfHvWjtt4W6mIvu+wXvLg==');
define('SECURE_AUTH_SALT', 'naAfUKpmSMPtHoxmQVwrZLoClrDXE4WD4rOVZq1fneI2+SK9V71c/8blgxRwioxgb5k530TwzG/lyABe07zguA==');
define('LOGGED_IN_SALT',   'BlPBl4gwK4ahOhTeQp6eodlCA7Y/89KxVWzuyV1IX6G2co+I4bKH+yhr+/35g3MkZnKYQfF5YNJCD5ffdBzyzA==');
define('NONCE_SALT',       'ymuGYBf0vl1NHCvVJRtsjteUput2s0fapU7RFtmvU1slgCoyYHbkeOMmBx2vBUD0rox+ZdXruCY7f4sUk7gFrQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
