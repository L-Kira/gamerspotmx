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
define('DB_NAME', 'gamerspotmx');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'F_nWM)+[$6$P[faGF6ga|NYARuQT| puzn-Aj/Wr&L@o>D;FdC,.hbENLzRN^Iv>'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'm~5w#5$)ag.eAfn^!w`Yz`{R.]#-WNruZrz}|f1QhG2rg)vJ6oo!Wx@xZhw1v,Wm'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'oz(qJ3zeK<,fXb-NyN$C[9Q:>~3RRHK=N7Da,@N^,$.eu]z)d]=q)[;)asr=pP]l'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '}T-36Q-PewMaF?5a+rnwYSF&`H6~)iQ@z!@Zn:aE3B?QP3hT9z.MTF:+j(nV6d9r'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'd`J|ntUlly8|m?dgem?`P:tS6y 9yBzKkk(G-xKNSG[`wQJ)MoI.Edti#`>`g0m='); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', ']D-1}oaW dvP%fU!fb^[+|&DQ0GVB-Fz%LRCgspdG/O%&Ws@HGtp`L[JKA68s|}f'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '~/hc|W]q7q!#k4bgiweZ&mGec! *l/i^SWoW~TBHaG&:<#%A`mb$1BFm5l0~T%@|'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', ' f&U5?IzymB=p1{;&B2vdZE3x,UQLn1-jogx$_+83w#%f/7wp`du 4l.8l+6@-w='); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'gsp_';

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

