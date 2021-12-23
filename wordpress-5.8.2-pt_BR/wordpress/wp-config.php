<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site-iva' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Td|Wm-s8c,Dh[W*|s^Nw+17]m>JNWkGbDb0,%pQT[~1^#~h9%;m*PGTpWF$G5I0u' );
define( 'SECURE_AUTH_KEY',  'Z@?7}7[C]/1w8}8WGzY?PDI7QqJ!h;A,uWDH?q(#DE2pb_S6>dJvU68S7bU3FjNm' );
define( 'LOGGED_IN_KEY',    'Sg;gO`7J-jLOhPAKwh]r7rf[.S`[x4N<kR${c~s,BY}O-g)-b:d6v8$5UF(`xKs<' );
define( 'NONCE_KEY',        'bG>e:jr^jP@SPwh_#Us;tZ>xQ6Y*XC( ~O;JG_%LV+6jMMKu,n5aP43?l:K0sU%/' );
define( 'AUTH_SALT',        '(m3[Yt*MqOcAOSvjT%1cb|rB:jq?e)N4wBVi_k]r_c^M&ca1{BpoW{n~<63r*)KI' );
define( 'SECURE_AUTH_SALT', 'vdhvi+O|h<vir[$NF#xbk!&Tn(@b/AS[~z6{yh]uYFQZt[!T<@[^{S43Cw[!33Vo' );
define( 'LOGGED_IN_SALT',   'N#5u&uWgyfXy-lGT[10nrb>|^oP>+w:!:=4W~e5%j5t8FJ/4B(e^xu{3JkIB>Q)}' );
define( 'NONCE_SALT',       '7dMhbYsdAlM%.J,[GUCi@6~8_&d&NGsa~T+,(ltM@;GFsgJS94e&(L@(}~CG%x) ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
