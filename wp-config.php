<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'nuevamacromad');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ElJyKP]X:N#9KVP0T@wF;4X/JB>*&1<_DAu=LrYW?x=^<gp0}J9YaY^Q4d;f`<D$');
define('SECURE_AUTH_KEY', '7syc^g0IWjb,.HmHj.A=tJ+t9qs+teNSQT^nE&N)Dcy-$6UHBxO6(!L+)jPy^a`p');
define('LOGGED_IN_KEY', '5<`:|A V{]BO-rFrj^O#u}Q,kv@q eG/hx+z{|Ox~HFGcVjTXhsYo,/])]J&@3P!');
define('NONCE_KEY', ',9+$fVS[[+2P9Ot!6b|S6fIB;4.` `#$2 mk}.TTB43`)o])wqAr[Ba!M&kB>M0_');
define('AUTH_SALT', 'E[>-mq60gPE}G/x0I1<2gh$-[wj8YFE7k5%JK6Xm&4HgMRNX>yEff,?#IhC^Wkij');
define('SECURE_AUTH_SALT', ',w_c:$FMJKzI0L0;mcv-+!s!-y;lo~rHT;_onQjt{)RY1=)N]pyoVv2H*9@[/pd%');
define('LOGGED_IN_SALT', 'K]tfKr`X1}^IR/bNE99AFjGrle_4D`C?!$sD)31ybPp@$wSEd=/PrI6vwj;NVLlx');
define('NONCE_SALT', 'Z<&x4b;uBa:8dgI)#HShxq2N>DeTm-reexwO41LN#KySPOJybF}Sm;]%;.qH[CGU');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

