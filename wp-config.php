<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'owlgraphsz31');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'owlgraphsz31');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'KY6j6v31');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'owlgraphsz31.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'N+;9?8|z]<f/yAV9feL%P&O;Oayv!<31+P<903o@ k-m_j+;PW,}I$j??zPX}lJ=');
define('SECURE_AUTH_KEY', '7&{lVnw(%4|B64!kF:L(qdO t[:1lM!Lc0{I+jog_P:tZ+hA* 6jo}m+9<7^pr>.');
define('LOGGED_IN_KEY', ':L .oDr%#|5o4)L,/LIk(5TiI6e&dC-Belc#Nvgo31E>!DINQ(!?54YR84cF?Pg%');
define('NONCE_KEY', '`+o4#}g+nxy307!.&c2KNq4Ga~r<r@XVk]|T],[F5.LV7^ gi%85kMe,m3wvq^YU');
define('AUTH_SALT', ')-SEBXpB>{nBOvE[uG>tB `5<+>rTu3H,pm?0qiB}U;n+{>^v67mFe)TsqB*d,^8');
define('SECURE_AUTH_SALT', '^O>@Y:e-ILsu}>3AK$&v;6 !|xf-{vS. l%@n#9U29i1RM7MKTZa]: W7A (C}]|');
define('LOGGED_IN_SALT', '2Y*d>rBsl-xM[_Ho[^x1.$CJVIc<a8wz5eAc>/~?[UsLy7OF5l:mWJ8#RYU,gW`Z');
define('NONCE_SALT', 'J~uZ:-[xtR1v >p6z4HTfAuen}w+2vAiI0_viD>hvY&x6#f.?-(]~3D2/3qu]i]?');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'zowlz_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);


 /** Désactivation des révisions d'articles */
define('WP_POST_REVISIONS', 0);

 /** Désactivation de l'éditeur de thème et d'extension */
define('DISALLOW_FILE_EDIT', true);

 /** Intervalle des sauvegardes automatique */
define('AUTOSAVE_INTERVAL', 7200);

 /** On augmente la mémoire limite */
define('WP_MEMORY_LIMIT', '96M');

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');