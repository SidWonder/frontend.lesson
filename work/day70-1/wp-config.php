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
define( 'DB_NAME', 'cardboard' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ',2]^lX6`-T?^@7Vkhlm?2&=Gw`D]{$0F4Gdc,/Gu0ddb)K0.$nJ6m5,~e&5.hs38' );
define( 'SECURE_AUTH_KEY',  'B^w8|rQ)8U6L~B%M}22P72_.R|UZ1e~@17ud<GM$6bg@&#iCS:1$wfM(A_NcVZnH' );
define( 'LOGGED_IN_KEY',    'J D-JG*dp:m?zZ5>YgkZ5Z[wzS0N]VTRY% a{YgaV(})ei4=`kG-_6.}Irm-7fjn' );
define( 'NONCE_KEY',        '@/HMA5:0f0n#IAlrYDGl [y~ln0M{Std[RtA5F4br5%,c?_p5*~[MkW]|o~Mkij4' );
define( 'AUTH_SALT',        'D B,ewofb-1|-_9}=kUi&5%6R %qP4@E-L]OtZayI-FlDb}*+WD0@)I)c80O$2i0' );
define( 'SECURE_AUTH_SALT', '>UM;wdQ|.^kImh*LZ2~T:$5j[K(-%KP2!8L7Y_d[66,%NmTdb@/Lu:nq$ZPsp1%)' );
define( 'LOGGED_IN_SALT',   '*sOB:}*BiQ0Sa <or)G[tg9B_0T<0dZ&C4;7Ll]AxgY40du,?H:KH|BF|hB[7}?|' );
define( 'NONCE_SALT',       '[!fm:.%wGY6<nEK%Kd_uJC*~8&~3A.wIf&j3^A4.QgZTa6BR4q@mXu*G-:;X,,_z' );

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
