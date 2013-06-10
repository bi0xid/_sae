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
define('DB_NAME', '_Sae');

/** Tu nombre de usuario de MySQL */
define('DB_USER', '_Sae');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '42p4b9Ce4t');

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
define('AUTH_KEY', ']%/_>bn%>jsk|cqtvEn47$0uIM_-G,?<p$&(]L*$Zznrt?>;8DP ?ri(f)`E(e(m'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'RF`C%-DS)k29+OOr(d8|=bKN&m0o8]@r7@)XiSOzZpk+asSQ=+`HZ>~]Tdr>iCR?'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', ';ny WUn2:xl+pNsN;-+n^6c|s`KU|f`)J+iGX]n6+Z8Mc<P?KH%-1{_}Zl%=2L~('); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 's?zD6iy;5rp4xX+6OyY-1O#J|;Y,_Z[6 3u=CgTw3JJ[:v~P$CvX(Fr;v+nf@+^X'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '-yB6hw`mF/bo(%ImWL@U#BAHhRe4[-1S})9m3H[+FiE2)-R:Q]=vKdp8y_I-#4^>'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '$x:JQ-yFHfyGuJ`%g:%V+dBC|.VL&KE7sq k+7.h[FIYuZ<mBpPZB-o.I>|Z/MD3'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '62[jo!vP,i=H:S0SC+aCub9G%@SE0ikU1s!9cm;(6N-($LN4B]rL8v1Z^2UF@:M)'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'K/%vy*I+l)+65?cCwnAYC=<bpjD8xY~v}oXCW`!SmhTj{s-5M_-Fd]fxS!>-it-5'); // Cambia esto por tu frase aleatoria.

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

