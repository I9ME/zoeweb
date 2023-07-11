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
 * @link    https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

define( 'DB_NAME', 'zoewebcombr20180219' );
define( 'DB_USER', '56aaf1c04e4d' );
define( 'DB_PASSWORD', '606d68707d176b30' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY', '++6 zIUp`+d{f!UoGm103-m<8v7?#$/fN4IS}2=S5hrPl*g}3)0|8uXLK|d!o< L' );
define( 'SECURE_AUTH_KEY', 'X=%[8<$Um9m{ExcW%+?8iFZn1@</+K!=DW?##:7d2Vvb]SBf_`5 0)b1:Ik!vx+B' );
define( 'LOGGED_IN_KEY', '#g|29-t+aC#8<vd|Lr`N,w0rySV^4MpUvB;h],A[>iy=Sbzn&I9@lx;F.U!E]AA&' );
define( 'NONCE_KEY', 'j/7qS|D$#Hg&Xfe969GG~C*j4o+z6YPZ&y6r4$Q,YJk;/~AmaB|-Rlv$XJZ=KtdW' );
define( 'AUTH_SALT', 'bS|_>Uac-r7l_b] X*J>!YZxdWtC$94OAt*M{ fWtl|9|3aU2&r{K& 0d$o4Q-b;' );
define( 'SECURE_AUTH_SALT', 'XtbXPv~l W&-!O:lD&!Z9{K7c-FfcpRjp>TF,4e@RxY4V=1,`eU~(,--n+XqY!aA' );
define( 'LOGGED_IN_SALT', 'I(G?p$_r,)]/:!j%V?5%,N?RY+Ee`+Vl{p+biw<y%jpYH*mV|xQ7=@hp)s,N]|z]' );
define( 'NONCE_SALT', '$LnczY+T)J?D? -Ktx#bN0Z l1BK*|Ejw13pK7;V[(6mTv!JVpo@T@ mY(>($l|5' );

/**#@-*/

$table_prefix = 'wp_';

define( 'WP_SITEURL', 'https://zoeweb.com.br' );
define( 'WP_HOME', 'https://zoeweb.com.br' );




define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );
