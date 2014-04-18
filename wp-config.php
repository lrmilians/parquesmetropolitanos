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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\parquesmetropolitanos\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'metropolitanpark');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'metropolitanpark');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'cEWppayGQJr2yGGB');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'pO->YP2l|si-.Z|1duydliBd$i-G,;1%a0I18uz&6?SoO9im7eb-S}uu2OYjckY9'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '@X{]iVsf>+L*`Ci7or}0-[|ZVhyo:!sF!9J0gxE#z$~i7G{+]^6tyattIL9~^g+a'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'k!UU-JuM>A!hV->Jzx{F6Jmyj0>E+@Zn&Gv|u<Gi]P-vU-orKhHd1[ y1X;!-M)4'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'UY^GTFjuS*8jNcC^=41Rk}#K.)qN.ptSAnYl632F:ls:KFvVVCt0M2|yCK.^T6-B'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'pL#mvQ!1+*!Vo0;s2#G|i2woO}a:XR+(*>[KahwRA;BMeUjG0&?y|T^|L?B}`di7'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'O.UqO&=fpPv^JSF01!}_v}VfmbSU9<^n|Z1&Zb-[&X~$/drd`w^^`4c99#}vNXI+'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '[!a[)))HHl10>g]zb2ulqtD`=IWQS>{k+f-b|6&nS9$ct>!%*jl+rdLHYa[yJ@)W'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', ' 4/y|+*&aW?KOh=yswPoLec:Zx]b-^`Kft9goLA,Xei%%.+Q7-tfT)+S+0 =@GSg'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

