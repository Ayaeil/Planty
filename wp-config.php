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
define( 'AUTH_KEY',          'Sb<*9|~t{/:7f|99S!vo=(8:3IY]jjTIc{;pJ@/BN}S6WB8UM`)Qn[S?][CjQt|`' );
define( 'SECURE_AUTH_KEY',   'o45KpcWC(74(NT[cWnZj!8_$el?UT=`=?;J1XmIHNHRdq2c|w?WDx6*OyKk QY[*' );
define( 'LOGGED_IN_KEY',     '8=^P,$V[njlm=lFVpgN7lZYN<Mkv:;%BR8Iyh/,E=e|!h=x:v~Aw,~wkO(TxMLpe' );
define( 'NONCE_KEY',         '|WQ8X,NUAZwAq^tU)VuAG#eXiI _L+&nIWgU|&>Rn`pg8hCJ)@TwL>+HjQPtg=`F' );
define( 'AUTH_SALT',         '@|{,|q8IMd,?7y6-W_1_ELo/6Aw=8L7I~!E)Dg.Gmy(D(,@r@;`/(4kPbLpr)k6d' );
define( 'SECURE_AUTH_SALT',  '}F5vtFX8ScLo#1y94M{s`UPnq:T<|q5Sca+p+_OmDf`%ASrIfNT~z`8#k )JdHhE' );
define( 'LOGGED_IN_SALT',    'rR=:2MBp}SDXz8-4}]s/%kdeHkxTHE{9~Z()L9F%SX}ZXo[n|04hqC/F;%os91q^' );
define( 'NONCE_SALT',        'T.=9L:HH_5e+*noCr3CnlRWjGFQ6h{o5))_EfUyAdnV<0k$Lw_X*&mF:;}m4o /x' );
define( 'WP_CACHE_KEY_SALT', '#m,YGI0l)wt*;I mdVPvZwz1+-t`R6jsrymNT&K|e0Hek+EQ7kGDJ9l%*4Z9Ot(`' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
