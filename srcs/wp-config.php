<?php
/** MySQL database name*/
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/WordPress.orgsecret-keyservice}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MGSJc5+x;6CUCz8f~q6Jr7f8o;Fi>bUVxEobs:UhI_l)e$@@zRLWLTKk|SA!C5C^');
define('SECURE_AUTH_KEY',  'fq:<l4.s,l3oKonO;+7SuH/<?<r1/#Bw?oX#`U:-f&s/`=7$Jk,|nI~^!D3hS2ja');
define('LOGGED_IN_KEY',    '5+EP;p8=nPEn-]66|s6FI:+6iCEuZ7_.^VaY?RIiK!QO1L)pdV{@2N]]U5Qt MM3');
define('NONCE_KEY',        'Y]!`%K|^CsQRf=VL^uZzQL Zgv|w`6Qc^1}O.hHb}aX((v)T@(E$g`O3Br2x{Zr?');
define('AUTH_SALT',        'ZWJnSKd4R*dN&4+WY}:kUQpa+r>&(8~+j-fhw.bro1+Fb9#Me2I&XSzJ{$n}8VSe');
define('SECURE_AUTH_SALT', '`z.e2m6xoZ+|Abb$QpW<<+/,;i5tA(-j2|>L:f]g8e2+BmF+wx1},>!_IBF:a_P}');
define('LOGGED_IN_SALT',   'l~Ri0dfTm:e[+?g1p{iGiO,z5+}ZWSBf!uW!jE0@4uf@Hw+[?NG!pOtTPJOt&4@I');
define('NONCE_SALT',       'v(!g@gjDx+9O IxsY)P[r#UiqP)f04qeUwn&Q3iZ&P_87*Nsbm$T1EGR%<501o7?');

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
