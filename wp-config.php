<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'volvovkolomne' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5#2~`K,bjW!eOq{,1P9yq1SysE/4;,MS{-M4o~goJ$z:8g92.|{&-`v95Z@HTJx,' );
define( 'SECURE_AUTH_KEY',  'Qpn*3,3@?o}7za)4n4rg1d^}>d$=`BB*&,Q^Wz+V6>Ad#iBgY(BxPzan;!Pyq2mg' );
define( 'LOGGED_IN_KEY',    'sy(v}DaAthW3DaF9*tR-[BOAYa(/M_lQy#y R9]x5tEw;d(5Ta2`~GY#tk{p]U<c' );
define( 'NONCE_KEY',        '[*LqxAQHOb~,oOGp=U&$~<RHh[4_o-oJ Nh/w7(!4we/Oui5rd Q`l:4~g6XAZ)o' );
define( 'AUTH_SALT',        'aegCHT0&DU!T(h8B6a;<QVx-k#U(4&Z./- 7+ixswY9l`V]J@~E%!,3&9w :WxqR' );
define( 'SECURE_AUTH_SALT', 'XoFs*PhHxU< c{pSYR9~OlnbR&yC<r;{`rD{3|VSGX=V}qNR)aQ>?9dvpf5L-kA.' );
define( 'LOGGED_IN_SALT',   'b!_VigCA.3jM0!DK~g*D)#:}c:p9;~993|Th>%qKy7(:JLBSA3ieXxmJFf/1C PG' );
define( 'NONCE_SALT',       '`!djRi;d*T,o|bt|+he[e^1t]7DO3X4j:ZEY%mij^ S?9x|X4YX6;bD^^yiy0+cc' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
