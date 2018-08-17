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
define( 'DB_NAME', '{{ wp_db_name }}' );

/** MySQL database username */
define( 'DB_USER', '{{ wp_db_user }}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{ wp_db_password }}' );

/** MySQL hostname */
define( 'DB_HOST', '{{ server_db }}' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '*kcj4,bW6buKj$T:BVGrO&3UI}L:&? D{NPQ@]^ &ri;]Ff*w,i!f^XaJh@yDhr[' );
define( 'SECURE_AUTH_KEY',  '>Xb0g!cYdIh3@=wAtGD0[=!;{V_wj=9UGZ AWqn>~j{e>p=IEZh[bX{jC`;r}e>n' );
define( 'LOGGED_IN_KEY',    'h#^VTU8{Ua?1gtgZR}XEdQ&`nIC69VZ*O@Jiw<?du<+ZtoZrdSD/b7x{7Mkr%7XG' );
define( 'NONCE_KEY',        'c!aQd2Z7`8j{O]82jPtFseKqx$GG&0(9@r4Dp%F8cawOD_u}r0+(N(.>G N`V5$b' );
define( 'AUTH_SALT',        '1&[x[UHS/f:wF)dU|KME}n<[cLG{$u[YS;Or<:oCCsGihD>k!v^jdmhu@r/f`-uX' );
define( 'SECURE_AUTH_SALT', 'J Cn>H5Ri?9g`-V%+VI~68&_xhcu{WUm>L?>+~K|L9c-w-z/l,Uce|5BRn]ug.2^' );
define( 'LOGGED_IN_SALT',   'x%CvM T!]0:<[]S_!Oi d2;QRn2X,QKOhk^7`)[!{hCwEni#,R39@G0vF{^j>O`r' );
define( 'NONCE_SALT',       '7Y1lqGo}}LwW5{Z<~[+v8=^s>-pFVAWS;%kN-.|zoDY;nK]|j{7Y?PKD;u>qOId_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

