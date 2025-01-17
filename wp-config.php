<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/genso/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'wordpress' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'wordpress123' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f=&I~hu/E~zpu{uo{UGZ1Vn9&2Yg%-.1RyNqx. #=PjQ9<6Vi^Gb;.*_DbK,$m:z' );
define( 'SECURE_AUTH_KEY',  'n5[OO{lW_z18/@|S8!31eyl@NU*vSnj?JuD)W~*]C6(#!gNDWiuL_t$A[ZukNKA?' );
define( 'LOGGED_IN_KEY',    'H,JMNhX]9V0;oqA0<k*4QpXKw{Few`86.2kt7o]qVB]@=_kP?KydE-<tn0|/7g8Q' );
define( 'NONCE_KEY',        '_;0Yr{`=q76/VxIRF*2|eGA]~O%qnLH.|1x=C7LiXuI2rNu / URyNZr?SH9CN=2' );
define( 'AUTH_SALT',        '3l*HB)?!a]6Y.MSup07_mDlnI?COaaB=]p`%blY~8+1,[{xwTGxEMWC*js4%$>gM' );
define( 'SECURE_AUTH_SALT', 'h28#&CZ=)[o.-(Cfg{$Ig*xd6p)[?s>&sTGp/zJXQA|GX@nLs5QM:6hRU2+jrYX;' );
define( 'LOGGED_IN_SALT',   'ojX|j)yE~0SO=0@;!3+dQ0BT9d4+ 3rMvA0)ehPTc~7M=M>WF)8Z&C!7z]Fv*R=&' );
define( 'NONCE_SALT',       '_cYOaTQ^w)Fl`N.J(:RFvf.ZM[~D}]h V]#O0e6u+=?%!v..b#-DE*k{fEkp}DQ=' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */

# AWS ELB(ALB) リダイレクトループ対策
if ( ! empty( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ) {
    $_SERVER['HTTPS']='on';
}

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
