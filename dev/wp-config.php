<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'saint-leonart');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'homestead');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'secret');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '528(D2,$7^MSMf%+$.WtDj`4Ul5uMXmsql^PoM%u<6}ZG+t}0ksTa9AMj;sr]4m]');
define('SECURE_AUTH_KEY',  'nfeWX@CDt+.u=Rwgn&z?J?]&VFEO4FH{taX[]FBsHPiWN-H:C(.Gmh+2.[iP-e%C');
define('LOGGED_IN_KEY',    '-&~v`o{>!Po3]FQD)y0AWv&U 5uE kg0A;?CMIa;^v~Ty?GCpn#~jRD25.necZEW');
define('NONCE_KEY',        '2H:z?GMgn_>)?&[KcH&|NnTD2^^fr/cHAM?5b/HssMyu>W^mYCpu4pI#>P^===Bq');
define('AUTH_SALT',        'ikOZDsc).zFlt-+s4%!!L0Mv;W1SRv=Tp?{L{0_K8Hw{uD*1_k@_n^cvHIoYN%{j');
define('SECURE_AUTH_SALT', '7itWm!b$>TLw6<-q/#IE-a/];TY.L@>0EQtan4T:$T<a3yh$0s2Xn//ro6_ic!-/');
define('LOGGED_IN_SALT',   'o&fA<Mll;R&|2,*c~(q;R^^8/#t7#3x8y!LLIXMwACehBy:w98fN5w4b Bpx1:DH');
define('NONCE_SALT',       ',fRp$q7MVF ,+bq!Hby~^|4TY@;]cl/utg%Clyn( BGrGXQ#~P@FY>R0>gFN=QX6');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');