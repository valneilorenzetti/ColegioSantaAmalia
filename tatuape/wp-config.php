<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'colegiosantaam5');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'colegiosantaam5');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'cY6icFxUjF');

/** Nome do host do MySQL */
define('DB_HOST', '191.252.115.67');
//define('DB_HOST', 'mysql06.colegiosantaamalia.hospedagemdesites.ws');
//define('DB_HOST', 'hm3040.locaweb.com.br');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mMXE?KbCd^qO5;HudgF!65[2YL%H;~CO;,TTBitmG?g@g?j!-/cO88Ge9h+h{P9A');
define('SECURE_AUTH_KEY',  'X@CKThxxZHQ0nL8vy52B)QKLj$y*q+sU3m3#Fn*C/$1 03&~XTAgGM3HTyF~/Oi2');
define('LOGGED_IN_KEY',    '[m4C[~%8Zs)p{ `brTK($1C95KhY>%Dy76a66dNI=c]tGxB$1]Vwrh,@,8a ^;9A');
define('NONCE_KEY',        'uq[ed>:_G^&dT$`DNV88brAoq(/wqed2Wr8Q=8q7GNi538;%jx~8?YkAx!Bg`2-d');
define('AUTH_SALT',        '2L9S<IW[]d(C4taB5>Q6^~6FR#QxDI{alH1r5gx8cwx%<4b.3+c}w3IvAhQf*A;&');
define('SECURE_AUTH_SALT', '2EHSg`qvOhPi,K~YNnauNFc*?FbYxiUZ07ltZ5]lkS?ROpy#F%HePR|`KXVL7[dJ');
define('LOGGED_IN_SALT',   '$(&sE/, h>$Ejb-yQA9Fys:I;C+sr)em`dM0} 3G#`?D-foWR8xj@q6NE(enks*%');
define('NONCE_SALT',       'r/Ay%-:%HwbM5!@1SrZmRR0XybR9XPw16SGuQzmd6*E80w,*>0 kd82>QTy||8<C');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'tatuape_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

define ('WPLANG', 'pt_BR');
