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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f_A)3$.phixOTy8qhDPY0TQ8}FWAQOr/`j96Wlz#B.am&u!FtWpL5tDsd$px$4{~');
define('SECURE_AUTH_KEY',  '8:Hx>.9{d9K3G8g4nA=WNE 0+/*NIlxaU[5Sj:0/J^dE,Jt*sfc--1I~dG1gx@.?');
define('LOGGED_IN_KEY',    '2nfrfR@Hg0_eI!VZ9KXWRpH{>P7>+X*MoWKioCy<Vz/;Wsq<{2Z2%}`$qy*jD-#J');
define('NONCE_KEY',        '>t9R{@AdJRedI$IkL47qoN_<N2K?x/`*D1h;,2U;r]?)d;F7eR0<BmyV3_0.%rRY');
define('AUTH_SALT',        '{L*:mB?Inry|0^*mEG4N}*<WfRpBL;gg$3x/-Z%uB`71||1KX#Ck{{Y]}N<pVE3)');
define('SECURE_AUTH_SALT', '7gC=2iz@Y.6:!TI4zY[10A[VZo+~D=n%vZj[BrP1fD7]A+q!2h#D!U81ZV#<X]C9');
define('LOGGED_IN_SALT',   ':a)cdoYr:K@~f~Vst^#3h5T+huf&F^r4m>=~7B !eu~hW-XQ(AJekc2,MYF;MF |');
define('NONCE_SALT',       'MmUAr$0Zi3C8KE`c.0_}.GI!K[X8e.Dk:Qq61 CRn<wq{67;]<K nW&/3B}<RgEC');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
