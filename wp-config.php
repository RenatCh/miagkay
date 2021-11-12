<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'rfghfk37!' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9Dmi&!m<:#g2#&PU3RdL)/:6lh{! {b/vO+sDW/k<![()>$:yf}RfXU]}vY4?z=c' );
define( 'SECURE_AUTH_KEY',  '%gIm=0JT#cQP1* yN JoWU/;KYo|p=^~&) M/L~4,.;u~x3tVNLx4V?RxNoJqwbi' );
define( 'LOGGED_IN_KEY',    '62RQ+?P,+D{J(F,JQKrSGIj{-@::x(}p^Ob~M ?ob?mAp<l!|#/<d6rnjr:sRedJ' );
define( 'NONCE_KEY',        'T|kY (uYec6xx6-u:Z|/` #Tok_$jJXpo7T,z[5v4U{ASwvu!=[^P-F$QRL/i.sm' );
define( 'AUTH_SALT',        '8C~zlpRA)|Y]H$*3Y4b7iw%m~-@o?1 *viA!)4A42Rhsf_a@E*K<8moD#XMc2x t' );
define( 'SECURE_AUTH_SALT', 'VA&rqw#/`q}|l+f`[Hw4&Kw0XB@@Yebzb_<V{8-~Alg4bj_PWI(Q*Dc9D9((SGV#' );
define( 'LOGGED_IN_SALT',   'f9jmm>:eBWD.3:tGk?EpK6S>?3i?s-~Rp X%bgaC$KM!SOW)-?6X0V-lB?|1[6&N' );
define( 'NONCE_SALT',       '@(,jQa)}w&fNW>2:9rZWv_wyu1SK6[q1^)w(VGd^gRZMi[0e~Do{)PZD_+E?#e7z' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
define('FS_CHMOD_FILE',0777);
define('FS_CHMOD_DIR',0777);
define('FS_METHOD', 'direct');
