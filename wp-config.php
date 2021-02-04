<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'restaurant' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&0a%3BG7,!YJAXFoc%ZQx2n-[ cq$W{ .!j`R2x6n@A~lp?%FVo=|u Z2`F%ow_/' );
define( 'SECURE_AUTH_KEY',  'Cgxz6=7xExej2r>AJ-GJ$@CO9 5qK`t#kudAg)9Zz[D?Pd =<2t2wE9*QK_Zj|GQ' );
define( 'LOGGED_IN_KEY',    'ef^f4Ma}(%Myzsm!=Cg]Eti#<Vyctq+5O,L<H].bzydWtRS2*6Hq(Kg Sz`^SUKE' );
define( 'NONCE_KEY',        '>pxw0zwH7fJ3Z/{Dzn7cGaQ@zR>tt.VT7!skg}Jz%Z+DqV{@W3Mr8z=A)V^Bb+bM' );
define( 'AUTH_SALT',        'TS3$@C`iCBY+P5c!`|f&@2K(JiWX?d[}0;0Dd}a 1ryrO5BYES:7X&Z%ZUb,}~(~' );
define( 'SECURE_AUTH_SALT', 'KhG|h~j1y,/@w{#KnIeYbs:`Gx+E&[.g)r5q$ju.rpYzrt0Xf=yT7aSr+nw:-&O8' );
define( 'LOGGED_IN_SALT',   '?3FxC]`7ga*?)q[,rh=J3.Ig=Y[+YgByd;RLipZ`(DKb_rC~4u$(|IxDW7]6*=|;' );
define( 'NONCE_SALT',       'z?)W{ciBz+->c-C#{4olM;pKh&b9nWEXo0$E,gqSJ)K0ikZ(!Is!Jp9y],QEA:N#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'res_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
