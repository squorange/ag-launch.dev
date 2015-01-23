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


define('WP_HOME','http://ag-launch.dev');
define('WP_SITEURL','http://ag-launch.dev');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aglaunchDB8exb5');


/** MySQL database username */
define('DB_USER', 'aglaunchDB8exb5');


/** MySQL database password */
define('DB_PASSWORD', 'Z9KzAfroR');


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
define('AUTH_KEY',         '.byy<TibuIMLe]A26iyx<Tiaq6PPe]92Ht.dt9OHW_;:Ds_-~:dts_OdVl1G4Kw|');
define('SECURE_AUTH_KEY',  '.pSW2H#]l-ZdHS:5psRddCOZ:1@|0od@ZVk4J0Jvz>}Bcvor!RgUjJMFY,3>7n$^');
define('LOGGED_IN_KEY',    'xHWTae.Hx*_]+;6Wempx~_HahOWe;5DH9Ha~#]1;5Ddl~w~_[ZhpWdw59GOGZh|[1');
define('NONCE_KEY',        'J>kNnIQ>7,{f$QEb3Aq$Xm*TX2AX]<q*aiL~#l*;hlxDS9o~w#Sll-GKCS!|804CK');
define('AUTH_SALT',        'Wl+5DWHLe_#9:5Opw]x~1SatlpwGOSZWdh#9G8CK-![:~19Zhos-@|KdkRZh18GKC');
define('SECURE_AUTH_SALT', '@0kzz@}YnkzFUIY>7B7Br^^,3jyrvBQTXn7A7MQu<{.6Efm*mu<MPXbim6EIPMTX+');
define('LOGGED_IN_SALT',   '~d~Zo4O!v|VBF!!jU}I>fuEY3Mf.i6T6.]q+Xa9H]5+HxWppSh1p~:dswp_OSSh:G');
define('NONCE_SALT',       'Dw_-[Wpo~!OhZo58CR@:|[8k-@}ZcZo48NRg!0}CFv|z>gkrovz7RUMgn>J07Qvz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
