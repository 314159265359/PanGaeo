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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp16');

/** MySQL database username */
define('DB_USER', 'wp16');

/** MySQL database password */
define('DB_PASSWORD', '7S1P3@-PCs');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dazovwnod4dd79q1keh0eiq0ogkvkioajfh9yu6xfzrkexeub2b5uvvrnyju2dnu');
define('SECURE_AUTH_KEY',  'niufg9nqzegf3sbi36jkwcjmbgl4zpiq1aflbrr58lstepqkknqgada53qk4cjog');
define('LOGGED_IN_KEY',    'j40ah4f24qvhf4xg5oznaudu9tcxf2lnmiuthtpa01zu6yjkmc44vxcf7on56w2g');
define('NONCE_KEY',        'geid1j9zmv1lu9glc0gmglpfwpcwlebtbmxtlm4evegq7chmigknli4fq9xrtd2c');
define('AUTH_SALT',        'xosvkvta15bauhugvsq3xrar9pugtuig87vrblg59nfxc6b3cmg6r9ygn3ssskba');
define('SECURE_AUTH_SALT', 'd0kjm7ljiwh4nstcnrfqfyambnomdvqk62ndnaalruqcxtzqzowbjy1qp6pyhblp');
define('LOGGED_IN_SALT',   'ywvvpedlx7khwayn3r5ldsvpw1m04ohvnzzk9v1icxz6cuiaxlsbxc0wmunpzra5');
define('NONCE_SALT',       'wgaeje9vgiz7tugwuphn2hnq7ql1nepujmhcrlwnm9s9b8skhimukuypaggbw6ka');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
