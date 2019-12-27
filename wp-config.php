<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vjsloopc_wrd5');

/** MySQL database username */
define('DB_USER', 'vjsloopc_wrd5');

/** MySQL database password */
define('DB_PASSWORD', 'oL^Pp-_Mc(]r');

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
define('AUTH_KEY',         'JzR22igSrKBlgqWI8cZQpErC8b9sfsoBitprju8ZsF6taIsHJMFdLxhRwhtlzxSs');
define('SECURE_AUTH_KEY',  'tfxMPKrCQvPWpv50EZjT8JBXEzpDbHmEnxYJj2dr5UjQr4sXW8ugMIvOIDLNhcwN');
define('LOGGED_IN_KEY',    'OYCx94ymnvTX8GogOpK5GPvtvyzKR2OAb2OkiFef1O0IpARTnVJoKq8vdiUWXqIY');
define('NONCE_KEY',        'vSyaE0a6AhNMgUtQXM1iy0wTThH2AewKFGR3Roh5y5JzTghHcyVVz6UeT4drjP7h');
define('AUTH_SALT',        'aofKLNl4NsvlPVkvsUQ7i2RgJWKmefeaODt22T8VY2HPXSaiCNb4XrpeMJqAQ8K5');
define('SECURE_AUTH_SALT', 'RzlyShRxQEcgcoTniDzbJ0Dl0DoObXJ09edgWNxBTR4oOTCn2TiGEwhrYKzG98WD');
define('LOGGED_IN_SALT',   'sGjDVgRFfuAdOvqD26eKDTZs5pNJ3tCLa80WEYBxknTUAq8G6yhxm0ggkHYUlSRo');
define('NONCE_SALT',       'gy9imdpMgx2gKEnEGbbKyfBMGefzhD67t59DBZwt396EHgFazBjgFo2tSBlaKgi2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');