<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'awakengr_wo5079');

/** MySQL database username */
define('DB_USER', 'awakengr_wo5079');

/** MySQL database password */
define('DB_PASSWORD', 'Rx05fQhgYYSy');

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
define('AUTH_KEY', 'Adxi;@Lt^EV=yQifB+AojCoJaZb*mRyUM@bdX[ttQsGng>D!)XiC}m+npuGeM{%tLGsC>GDxN(xup(=Q!JlW&OWdaMjos!c$xExTr&+UvLdUoE>[&|fRf_&bk_]@|jZd');
define('SECURE_AUTH_KEY', '/-=>xWX)]vF?}RXCh{*%br^o|;{$R=@am<Zx>K+jahDfoS)IjyXhJA>AN@)Qe[U<a[A{|;e_O+?M|za^_OE+x|!l+=<@hLYr[ZyWE/iQ><!vdgbs[(NkFeSOWDyM?L@q');
define('LOGGED_IN_KEY', 'vPNJEfNlM}Z)a}l![zZDkpL{j>BLSRTID<oV&--NFGSzOMpn>%Oz%uVY)KcG}!(tH>rJ-Xvx)*lO&KBrHW&&X|/FbB%_l-*K]o;BiPbyAY!+)h*K^$;NPr}H>+-rC[W%');
define('NONCE_KEY', 'KX<!Pr[kka][ugCA;Pea|tVmkHE(Ivq]$s_)]-g&I[tiErQ}slzS[A=W<Yp*wurjCH_*mHqLjeW+(qi[gzLk;;)VxaMN-;d[)W&m;ncXBG|]+MAyf^sxttku(caZpQ|(');
define('AUTH_SALT', 'V&kfpq%JocbpTHUla$>;)>s+r;%sH$IwLjVoT-@wDVMeDQeB[y<$[%<{*IpgbPan?!)Pp-J][%No!d)Vp<HSM^vU<PN>)$eyg+k{![rW^cyNx//dU&/n_x=nQDqJnlEP');
define('SECURE_AUTH_SALT', '?]VbjbXM>-O=Pt_AEk[/c?tdNlbA>hk-qAOg?Jd^n{pGAyxeOoLCO|AsWP*$(pqTp-md=m/+yFw_x[^gCi|w^)$DcKloXeA*<==fZBusfHqD{|/vrOGdABfz+y*CB?CA');
define('LOGGED_IN_SALT', 'St(-(juS&{BujIY}^?XON}QTIh-mR/OpF?bxOzzJuO]jAazv/^/f^Jhsi)l|@hvc-R]B*JrNRW^}ZY]jovKVKUR{XZ=ByfoqM{T]WR<<I;pXP%vPkYJr)aXyuh&$E(NG');
define('NONCE_SALT', 'W}l]mjCCxioXNIeW<Oe*C+Na_vAM^Jqp|o@tQLPTaI)MwrHm)I%(=XqXqZQJV}f^FFUUV<[&MexYmUx%$XG<T%Mhoi$owD+J|)Pe-j$I*JEPIQ[mpB}rO;MMlSrF@Mjs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_zgvk_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
