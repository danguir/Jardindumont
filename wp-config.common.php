<?php
// Configuration common to all VersionPress environments, included from `wp-config.php`.
// Learn more at https://docs.versionpress.net/en/getting-started/configuration
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'jardindumont');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'carredasicetea');

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
define('AUTH_KEY',         '#2nJ[&.h%?FPB=x6{]o,$Ql&CnlZH0<?YfNiIm49)2M#OM].J]a$g%:H9wCN^)3v');
define('SECURE_AUTH_KEY',  'wG&R^TI+1FX?o=I2~f2NR_,b5!^UR4uA_aHXGZewt.]c`,y&+BHw=m96p8)zG&H&');
define('LOGGED_IN_KEY',    'oZ=xr98xrOOhOxq|&gaMOYK!/>qgGtnax+>?!f5(!bpO^%5{j=&VN&k]4fqCX{XW');
define('NONCE_KEY',        'GCn}8t L&Z@OdJTvZ-Uew=`/`VjeJ=Ii$;%s-@rA0_{kg;!g/it>~pR]n0lE$7@o');
define('AUTH_SALT',        'L?8{Xfu:+l7{BKv><j6sm bv[={pSUZ86}z43a.-SkH5]h9%5[b-JJ,X9}IPB][j');
define('SECURE_AUTH_SALT', 'wJ@^okdF`j4#D^A)@f+[h(0oV^t/U,@@Ek;H=.*Ponlpae-4x4l7HVT`kg7FeT,9');
define('LOGGED_IN_SALT',   'Szqi4Y{U[I 5!EymChfRmXrUa:n>;&$Ym(Ja#HzXq(BJqKZ>hjSwu#g9k3lI _4Y');
define('NONCE_SALT',       'P1V[rypX#7oOT0EEV?kNS=pBq;l^V93xbly_hMd%<Jf/tFmm!H%*x>3,jB?_:Z9D');