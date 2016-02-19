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
define('DB_NAME', 'momchikiDBrixld');

/** MySQL database username */
define('DB_USER', 'momchikiDBrixld');

/** MySQL database password */
define('DB_PASSWORD', 'ZD4zIA4wri');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'xDRCsZhNZ:-w~p9_[5~OZC]6HTAqXe<uxeqE;9#WiPWDt~liPa;+_pD]bM,v$nB>3');
define('SECURE_AUTH_KEY',  '4>vFQ7_:-K19CK1hoVOZGt~llwd[5_[4@NZGGR4kwdVhK-|ss@k1C|TeHx.mp+i;9');
define('LOGGED_IN_KEY',    'tL2EuXiiPX<;+u*i3A<2+<TAITaHt+iqtWi;+_*mtEL22D#XeLT^jvB>03B>UfJF');
define('NONCE_KEY',        'T*{x+itD]<;+LTAEL6iubFQ7nUcgv0>@7Ur{yr>IVGwgswg0!~o-O58[dOYkV|vzk');
define('AUTH_SALT',        ';_;eLSP2DpWeipW_;+EM3BrUffMU,{yv$jB,>3$MUBIT6Eu$jiub<3$y^nuE<33^');
define('SECURE_AUTH_SALT', 'RFvckgoV!:w@!ksCJ}+_lxDL119#;aHOHS5DpWeipS_]x*#s-KS59G[5hpVOWDKxd');
define('LOGGED_IN_SALT',   '^+i2E{]6.TbHE{2jPXbIP*<ucJR!>vzgnB,0}v!R8FJ08oUcnUc}y$,rBM}7^QcF');
define('NONCE_SALT',       'z7lwZ[1~#[s~KS91D#:dGSSZGt~hs-do4![:4@NVCKG[1hoVVhKR!kwaHP+<qt+ip');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
