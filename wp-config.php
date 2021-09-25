<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'elodieguiraud' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1iV|C>=;bAKCFm93$a3u9]N`zwT&MrKx8Lu2{JgjX}sqXI LSuv5n<2:I@hiC5v8' );
define( 'SECURE_AUTH_KEY',  'Uxn[%sdR0F-#Q>a##9MW#+_-UHsf1#/w<42w$VovKgPW_Jw-[DXW5fU:LULTGZ?O' );
define( 'LOGGED_IN_KEY',    '$V#ySDi}zhl]tU%p*INpeskmxr|v`r<03rBp[?B7UP?aJ76_.L5xJmyZ;|St%uN}' );
define( 'NONCE_KEY',        '`j64}R_(yFL{#XdnO>MbFSqvVt/eE9 9RNl!N>OL}}Ld-hc1SjN{^mDCc>C_w)Z3' );
define( 'AUTH_SALT',        '1nZHKk&PG=Ty,_v;2},JFAW)Jd[bbs#e5dMrh)iP+k;>aB67W4qifYH`Ma:]!+-X' );
define( 'SECURE_AUTH_SALT', '%jL<;Ij*.5?;e)dc|Nq.reyW9o)2WT}J|k@0|}:,,fY}S2dY+Q&4F5ehBLNE/8UQ' );
define( 'LOGGED_IN_SALT',   'sHQ*I=NxxSRpk@pt>~w3_}A&ChxKT@<Y+(`T0Qc|CpnxRo-):*&SG!XND|fJ]@Q>' );
define( 'NONCE_SALT',       '~SEk O(O(.c93MS/Cr ^$~7CI|j]h)z[=m+Mw$pfA|TucP/nb7A.<kIdP L+eS{&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
