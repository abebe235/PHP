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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'wp0');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<s,w_ xcD4dDk49~cyQCBf#S(&<f#2V6sump8^mPA%r|CYZ{rmE}OB?zacoP_)G[');
define('SECURE_AUTH_KEY',  '8tOjT9qZaLN?JopW0<. _$3r@il^0;Kg>_4e-IU&xYGFa|1B0!i+OX^I8E3y,HC0');
define('LOGGED_IN_KEY',    'MAQ-0,. sx|~ova8#9dKDyl2<]D61.>Me?VC)#jYGm ;Q=g6=zh4${PF94|EC0wn');
define('NONCE_KEY',        'cv)$[S{MW&*{G27jh7*kOZt3hK3#]5|B[cAnZG>U?;VR&j.^[qZ:6?F7X<c!PYjX');
define('AUTH_SALT',        '~[mZ[m/TvL+Lh/&yAEB7fN*pgY.nxPn{dbX-_dv*EM_q@zaXmy6nZM]vUv~sG 9.');
define('SECURE_AUTH_SALT', '$4-i<w@-=rOU?T@>)(:%#c.H2J!R67`0Awf90r 1T|KOnB(<m?IxKHinE)T)R=Z$');
define('LOGGED_IN_SALT',   'w[OS4$>*55e^TV=#FK)Z2eD#0irEaS]I<_y%V 27_.y9pkB,ur-;]#x;[L`F<Ge4');
define('NONCE_SALT',       't{-hsOF@b +rUKvCZ`6Cs6qRG3.Q@q0Ww9=u9G >5UW0^6<;1IB_<:?wR|O(R,jQ');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp0';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
//define('WP_DEBUG', false);
define('WP_DEBUG', true);
if (WP_DEBUG) { 
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);
}

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
