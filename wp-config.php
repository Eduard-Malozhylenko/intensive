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
define('DB_NAME', 'intensiv');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?%ON[;TZ7=SLfs38/y(*+yR;ujwo|)ov](cx,`=vwv1#}-)GsjRt*+Z:K!jv:k:,');
define('SECURE_AUTH_KEY',  'z6PR6J+0#4:~3Bm7Mr(*]c>Nk})T-$cG+a^QZ9ZH;azfR5|;t.|VKRWG.c6E*Uz|');
define('LOGGED_IN_KEY',    'y:V;|+5d}$;^V`cn[}[*]VZi8i4f5%f=X%ij1_TpWT,4V+prC=Yhr8}c;I(3?9<E');
define('NONCE_KEY',        '}NA%&1$^V7O,4mrKn0)0gg_0=V^!WvVV-b|?^.#S uRT/EQYO;by;:M!}TF<^oKC');
define('AUTH_SALT',        '6=aFH+l3{H W !EUm0<DUXE1^.R`ZE5^6{cx&3.}9pYLwVQ>~Z!v-.(ZmJ4(&T$`');
define('SECURE_AUTH_SALT', 'kgZBI@VKY++kG1m{kT_Y, db1U%>~ f;5DjF<|f30IIrk`F)=Oj3N(<ZRq{jv4`6');
define('LOGGED_IN_SALT',   'WoJpUS5|N^?:{e7/[E6_`ZT#.EENuH.[yTcBLo:*&3?Y&Yc${lAN09xi`yypf0T=');
define('NONCE_SALT',       'p`(h^Uiu0VYbIn71QJ($spZ# ]ra,u!#%Ze]&Z2V5sU$XGSeo-oRFK+4zG[Hz}BL');

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
