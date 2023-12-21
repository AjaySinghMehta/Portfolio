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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'PGqP@uNa?>P<&3mB.(d75ViTP>;]`DTXq6z,tYRwV}=cB9Q>rjVm9hyL5xlJ#=$d' );
define( 'SECURE_AUTH_KEY',  'G}uP(+0m@)3pq*nz6WjlTPcPJyuk9zG83)NP,>]NK?1)QICC.W$n]g#dYHA-g@oQ' );
define( 'LOGGED_IN_KEY',    'X7y~-H;ulu5nYiRC,og$6NfenR}9T1Tvl+iuUBQp5[$w1jH6mxb$8*DS20h&3*TQ' );
define( 'NONCE_KEY',        '&I7Jz*zzm#P;3 z#gN;MKS@MTGJet`i(e0Fx2+:b}`!WWzMI9*Tj0LSFB-f_t*2H' );
define( 'AUTH_SALT',        '%VVhcYkSmBRdOm0LiV6Ct*+ye@ZUHh[vVclxlu[P2!)u_5&45Hgh4xGJm&iWy#b&' );
define( 'SECURE_AUTH_SALT', 'v)b[YQO>ewMg_c_wH=_B5]-8$tUcHWW:4X2-ShBPj5tIim^pW>Ai+azpds4!5,20' );
define( 'LOGGED_IN_SALT',   'FZ$B}r0dF$O<M,P!,nO_p,$4&pfbYLl)OUm)w@o&whcs?[]a~6Yi]G$]_AU[c)z>' );
define( 'NONCE_SALT',       '^XS$*@UWT-`)oVY)A=}0$YvN`UXBRDrFuOi5ARuEr0^x%Wk6Z(!nGN}Ml~OsSBBO' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
