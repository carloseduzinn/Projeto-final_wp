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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projetofinaluc1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'H>fvUb>7(A}ar<SHoVtiB0#fF%I$$etYit_GF(bGzd^8!_(/&+-b&ENs3yhpgdJ+' );
define( 'SECURE_AUTH_KEY',  '@MuK$pHH*Mazw_F6cFO/7?UBd>F)n1*FB_B_Od:stkpvp5DXF0lJ6:tIn6]*s*G*' );
define( 'LOGGED_IN_KEY',    '7i1.bRZ20Uw]oW_SqkE j fba9j&36=IVum0cXCqiL{I!9_v<por:XkiAbE)*tgj' );
define( 'NONCE_KEY',        '`c=]nk|RSSBh l+B@fBRzEKY-w.o:p[3:S6z[lcaKz27r;I#od;{`YSm@ca1NEB)' );
define( 'AUTH_SALT',        '27zXV>vmy|&]2`={1u~K#tSqkz!Y7F,4=3ipgdR-37>LS@t&85c 2+2vnqstO/xJ' );
define( 'SECURE_AUTH_SALT', '5~e9+AhmTKIQbQ(;JGfh*lSlh(PIkO;nCm6?z9kuRz1.i>f:v//>Rh[sTHxeXhHf' );
define( 'LOGGED_IN_SALT',   'fe*1H$m*Oc!SQX]L+4f;PM)~/v35eluzSJgK|M%uBp0R=JEKV0jS& ^ayk6pFiEq' );
define( 'NONCE_SALT',       '*SbW)$xBq|t=#Yeb_z).>kG9~*=?t|}# ycG6@+D~)L{BS9v}cb|NKb JEN1<3zT' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
