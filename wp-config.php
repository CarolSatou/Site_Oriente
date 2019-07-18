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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'Oriente' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'y=o1Cw?.tE:aieL;.Oxb&C*vBfl5<P*rURUM*6=w}~20&1OCPI8l}^Rd5t%rNP[0' );
define( 'SECURE_AUTH_KEY',  '*=`$nIO9?$D^JsZ_U#(D%gI}Ab[J:eXxRC(l1d4(AJPT!C+#}E{{gi9RWLD+;fA4' );
define( 'LOGGED_IN_KEY',    '`zxCm]`=QHBmj)y},q1#f:;4kg=@5v3iIryx%F&U{gGG1g`|v4fy!Q]asVRWDZV[' );
define( 'NONCE_KEY',        'VcrQ(C=-Rtg?C~pO-Artb_*R|`ptYgfqBU-Q7P)v]e:mgy[sf.;_A{3 5Z3T}e=+' );
define( 'AUTH_SALT',        'G$;%<9]nhw,#}rC-]V-Iplu]}A<;1{!mW!S)3&F&d[ScXBQUv&Vig)qcM32ANiWF' );
define( 'SECURE_AUTH_SALT', 'A4Dt<|1Pi<Gtf*-zQ/14&X|oCfc]HoHxt7M||}(z9C/arZ-0)y6 @B+,YD=0UCt}' );
define( 'LOGGED_IN_SALT',   'E1s&J3z,@BcM0%`V^>96+_)FUqfS,5)b.P=Wx>c5HE4V/;Qh4~#,s?Y4F[E[A%)w' );
define( 'NONCE_SALT',       'Sd#UxY/pCem<4^a3iYc,Tk&|s8N%5eT6AYRN6P[RTRVa@E1ztV,@n?5{Noll;gj6' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
