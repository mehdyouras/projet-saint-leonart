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
define('AUTH_KEY',         '-*cu#<BYIjeaSRPj!7JS*m=%2-YXRUUlIRo5@<5Q?juTFo$SCUP>10P-Pi{uiLX_');
define('SECURE_AUTH_KEY',  's`4Sv;KgYM:Ox~{cPyV-gz=E1</~6NYDIg?,c&{)-y].]KMUNmI7gG mkm3/sT#p');
define('LOGGED_IN_KEY',    '}Y*KVc~Lje^#5Mz0r@% R;i?~[)/5Ttw#W>r|!|e8N`d~rO[V.&Js>Pa{ZeTD:~/');
define('NONCE_KEY',        '-$*I8ksakme7=S1~AL]g]B@Hs7X4t@ Ca)Q!A^6q!$isMbzK(8,CmQ!go|=-6Nl%');
define('AUTH_SALT',        'YzqAr3m1.VF]w.5}a6T38Wu@i/HrhbISzTniEH#0:-f{6DG5-$cn~OO6{SFFDv~{');
define('SECURE_AUTH_SALT', 'cy~[<H8-2.QSgzwJm>/r6dSg2-4?J4)@@C%~YbMDbfOqHW9%z/% X@NthVL/:vey');
define('LOGGED_IN_SALT',   'B>(]Qv?goPq+pJB%hfD+I+fA!.|]aZra/}80|ETT$<:{1:.w%%ROBkOSkounK }4');
define('NONCE_SALT',       'fSOe8TddAri&Wd09?R*>V@~+5UIaNmVV9U31;PZS[|<wj,rT|YWqx$Qk<;t@Rw=8');
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