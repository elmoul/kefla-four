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
define('DB_NAME', 'kefla-fourniture');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5:X|322Xrpq`Fu?Exav%#X-#t_aseM`q`t+VLJ.j&K@&iK)4qB>fVbF?$)%d{KjL');
define('SECURE_AUTH_KEY',  'q=V9%ahU%~$a8H7Wxn<DH;84{)K/`OqNWl{n@.x |P{Glcs/R%1bLn=-mSa@6b[a');
define('LOGGED_IN_KEY',    ';&9n17KF.;ftu=OD>nyRW_aOl[{TqLJo<H03G&K^N&-Svd5Q;ul]*TeS|UFcQhe3');
define('NONCE_KEY',        'P2 T9@$+},!R5m@x)Kqm.RNS`_1!ok,tH{7I<7>Dm5RDceABLC*KV4DQzfC;!-z~');
define('AUTH_SALT',        '%IenfMyK}M2h^Bjzy|y)k}T,{F1/1NN DUwINE3+_I0foc8.M*q0+N0q({PmMtyD');
define('SECURE_AUTH_SALT', ')KSQTq<Px,ua--[bV{RuSU)xkX7i aC#j^P0KTC++5Q8E5SCm#s,7tz])W w$49~');
define('LOGGED_IN_SALT',   ',r4L,J2?K}=Y<_)!39hIf4:T7}h#MW@}0EK--HCJz%+! rMxf^AD3{a&.}#fQF?E');
define('NONCE_SALT',       'KP=Z?L+1~J#uPFd#=pvG^1MHRofI4sha3@9iHyK4=#7T?xe8*.E{Bml;%1>)E1_4');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_kefla_';

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