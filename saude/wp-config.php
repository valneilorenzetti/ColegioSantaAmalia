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
define('AUTH_KEY',         'Zzs~P+NqqSG^sH *?CyvhYG^0v0#72h0R`O}]@`Wai[[q4kH>`H`f9s3}RiTwo5R');
define('SECURE_AUTH_KEY',  'w(zon~4Rf9()RVd>Uw#N]H.R+TV49/h.$Di^2AWIgphGRjzjG`h jQ[,g M@.8&p');
define('LOGGED_IN_KEY',    '%o!-UZ@:zz~eWz{=A>Tb@vHg:0!^EU{`G392qj[$2R_Vx`(Fw{S-1y}q8qBw}PFS');
define('NONCE_KEY',        'Gtq#*K-X$+LrU{2#~UF&MbG99 0(+l(g8u2XWG:]R0H`rvCR*O;1;OsVVyo7xztW');
define('AUTH_SALT',        't$iCamz};bNRB)~*O@;={6Z(T43{=Gh>];A;#$z~]hZ|t%BVT*0>nXKHs{)4Et>,');
define('SECURE_AUTH_SALT', '|M1}]#xl0o&vHa+9d4v,3Wor85fe>-v>i[biy~AAK{Y9VoWdYvGl6;Wq`Ie(u16C');
define('LOGGED_IN_SALT',   '3/7z_{~JGSYgspk}x}W]G]c<.@rxL~9+Rqy oc7GpYh5@cClyW|<-=+Ig~C4p{tk');
define('NONCE_SALT',       'XUs0~>#bQ=NKn0En/ Q&$A~{gk]ySsP`x]U/r,=tY!gbo`8k5rSQnmk79`Awp_YE');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'saude_';

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

/** Altera o limete de memoria. */
define(‘WP_MEMORY_LIMIT’, ’64M’);
