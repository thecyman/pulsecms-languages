<?php
	
//Global
$lang_cancel = "Отмена";
$lang_duplicate = "Дублировать";
$lang_help = "Помощь";
$lang_help_url ="https://help.pulsecms.com/";
$lang_settings = "Настройки";
$lang_account = "Эккаунт";
$lang_save = "Сохранить";
$lang_rename_btn = "Переименовать";
$lang_title = "Pulse CMS";

// Auto backup
$lang_autobackup_email_subject_line = 'Pulse напоминание об автосохранении';
$lang_autobackup_email_text =<<<EOD
Здравствуйте,

Pulse сгенерировал для вас backup zip файл.

Всего наилучшего,
Команда Pulse CMS
EOD;

// Login
$lang_login_forgot_password = "Забыли ваш пароль?";
$lang_login_forgot_password_email_body =<<<EOD
	Здравствуйте,
	
	Ваш Pulse пароль PASSWORD
EOD;
$lang_login_forgot_password_email_subject_line = "Забыли ваш пароль?"; 
$lang_login_incorrect = "Ваш пароль неверен!";
$lang_login_password = "Пароль";
$lang_login_button = "Логин";
$lang_nav_logout = "Выйти";
$lang_login_otp = "Одноразовый Пароль";
$lang_login_welcome = "Здравствуйте!";
$lang_login_name = "Pulse пользователь";

$lang_login_forgot_password_message = 'Ваш пароль был сброшен';

// Home
$lang_home_emptyfold = "Эта папка пуста."; 
$lang_home_new = "Создать";
$lang_home_upload_button = "Загрузить";
$lang_home_preview = "Просмотр";

// Navigation
$lang_nav_title = "Навигация";
$lang_nav_home = "Панель управления";
$lang_nav_blocks = "Блоки";
$lang_nav_img = "Медиа";
$lang_nav_blog = "Блог";
$lang_nav_pages = "Страницы";
$lang_nav_stats = "Статистика";

// Navigation logged in bar
$lang_nav_logged_in_add_block     = 'Добавить блок';
$lang_nav_logged_in_add_blog_post = 'Новый пост';
$lang_nav_logged_in_add_media     = 'Добавить файл';
$lang_nav_logged_in_add_page      = 'Добавить страницу';


// Gallery
$lang_gal_alt_gallery = "дополнительный тег";
$lang_gal_caption_gallery = "Вставить подпись";
$lang_gal_filename = "Имя файла";
$lang_gal_dimensions = "Размеры";
$lang_gal_size = "Объём";
$lang_gal_img = "Изображение";
$lang_gal_link = "Ссылка";
$lang_gallery_tool_tip = "Чтобы создать галерею, сохраните папку с изображениями и используйте встроенную ссылку";
$lang_crop = 'Кадрировать';
$lang_media_order = 'Порядок';
$lang_media_replace = 'Заменить';

// Pages
$lang_pages_meta = "Метаданные";
$lang_pages_title = "Название страницы";
$lang_pages_description = "Описание страницы";

$lang_pages_css = 'Встроенный CSS';
$lang_pages_js = 'Встроенный JS';
$lang_pages_template = 'Шаблон страницы';


// Create
$lang_create_file_or_folder = 'Новая страница';

$lang_create_file_or_folder_block = "Новый блок";
$lang_create_file_or_folder_blog  = "Новый блог";
$lang_create_file_or_folder_page  = "Новая страница";
$lang_create_file_or_folder_media = "Новый медиафайл";

$lang_create_item_block = 'Блок';
$lang_create_item_blog  = 'Блог';
$lang_create_item_page  = 'Страницу';
$lang_create_item_media = 'Медиафайл';
$lang_create_item_folder = 'Папку';

$lang_create_button = "Создать"; 
$lang_create_tool_tip = "Страницы, блоки и посты в блогах должны заканчиваться расширением '.txt', которое добавляется автоматически. Чтобы создать папку или новый блог выберите Папка или Блог и Создать";
$lang_create_embed = "Встроить";
$lang_create_embed_tag = "Встроенный тег:";
$lang_create_embed_url = "Встроенная ссылка:";
$lang_create_embed_html = "Встроенный HTML код:";
$lang_create_embed_php = "Встроенный PHP код:";

$lang_create_block_move = "Переместить блок в";
$lang_create_media_move = "Переместить медиафайл в";

$lang_create_folder_error        = 'Невозможно создать новую папку';
$lang_create_folder_error_exists = 'Новая папка уже существует';

$lang_create_folder_error_no_base   = 'Искомая папка не найдена';
$lang_create_folder_error_no_folder = 'Не введено имя папки';

// Delete
$lang_delete = 'Вы уверены, что хотите удалить? ';
$lang_del_button = "Удалить";

// Errors
$lang_error_create_ext = 'Неправильное разрешение файла.';
$lang_error_file_exists = 'Файл с таким именем уже существует.';
$lang_error_upload = 'Вы должны быть в Галерее, чтобы загрузить изображение.';
$lang_no_content = 'ничего не найдено';

//Blog
$lang_blog_title = 'Название блога';
$lang_blog_date = 'Дата';
$lang_blog_read_more = 'Читать дальше';
$lang_blog_back_button = 'Назад';
$lang_blog_older = 'Предыдущий';
$lang_blog_newer = 'Следующий';
$lang_blog_posted_in = 'Опубликовано в:';
$lang_blog_error_folder = "Вы не можете создать папку в Блогах";
$lang_blog_tool_tip = "Посты в блогах сортируются по номеру, чем выше номер, тем новее пост.";
$lang_blog_import = 'Импортировать';
$lang_blog_import_tool_tip = 'Импорт блога из RSS. Могут быть использованы RSS и АТОM форматы.';
$lang_blog_import_page_max = 'Максимальное кол-во страниц';
$lang_blog_import_page_var = 'Имя переменной подкачки';
$lang_blog_import_url = 'URL';

$lang_blog_description = 'Описание блога';
$lang_blog_tags = 'Теги блога (разделенные запятой)';
$lang_blog_tags_short = 'Теги блога';
$lang_blog_url = 'URL Блога';
$lang_blog_index = 'Хотите чтобы это было проиндексировано?';
$lang_blog_nofollow = 'Хотите, чтобы эта ссылка не индексировалась поисковиком ("no follow?")';
$lang_blog_custom = 'Пользовательское META описание';

//Form
$lang_form_error1 = 'Пожалуйста, заполните поле ';
$lang_form_error2a = 'Ваше поле ';
$lang_form_error2b = ' слишком длинно.';
$lang_form_subject_line = 'Контакты';
$lang_form_email_sent = 'Email был отправлен';
$lang_form_sent_button = 'Послать';
$lang_auto_thank_contact = 'Спасибо, что послали мне Email - мы ответим в ближайшее время и получили ваш адрес электронной почты';

//Newsletter Form
$lang_newsletter_thanks ='Спасибо!';
$lang_newsletter_try_again ='Попробуйте ещё раз';
$lang_newsletter_placeholder ='Введите Email';
$lang_newsletter_send ='Послать';

// Redactor
$lang_redactor_mail_button     = 'Добавляет адрес электронной почты';
$lang_redactor_mail_link_title = 'Посылает мне Email';

// Stats
$lang_stats_today = "Посетителей";
$lang_stats_refers = "Топ ссылающихся ресурсов";
$lang_stats_pages = "Топ посещаемых страниц";
$lang_stats_refresh = "Обновить";
$lang_stats_pageviews = "Просмотров страниц";
$lang_stats_per_visit = "Страницы / Посещение";
$lang_stats_bounce_rate ="Показатель отказов";
$lang_stats_online = "Онлайн";
$lang_stats_thisweek = "На этой неделе";
$lang_stats_todays_stats = "Сегодня";
$lang_stats_nodata = "Нет данных";

$lang_stats_browsers  = "браузеры";
$lang_stats_countries = "страны";
$lang_stats_devices   = "устройства";
$lang_stats_systems   = "системы";

// Sweet Alert
$lang_sweetalert_ok    = "OK";
$lang_sweetalert_saved = "Сохранено";

// Custom post types
$lang_custom_post_type_error_illegal_characters = 'Заголовок пользовательского сообщения имеет недопустимые символы';
$lang_custom_post_type_error_illegal_name       = 'Заголовок пользовательского сообщения имеет недопустимое имя';
$lang_custom_post_type_error_unknown_entry      = 'Способ записи сообщения неизвестен';

// Status messages
$lang_status_ok = 'Данные сохранены';

// Dashboard
$lang_dashboard_backups = 'Бэкапы';
$lang_dashboard_blocks = 'Блоки';
$lang_dashboard_edit_blocks = 'Редактировать Блоки';
$lang_dashboard_blog = 'Блог';
$lang_dashboard_edit_blog = 'Редактировать Блог';
$lang_dashboard_notes = 'Заметки панели управления';
$lang_dashboard_file_storage = 'Хранилище файлов';
$lang_dashboard_media = 'Медиа';
$lang_dashboard_edit_media = 'Редактировать медиа';
$lang_dashboard_pages = 'Страницы';
$lang_dashboard_edit_page = 'Редактировать страницы';

// Settings
$lang_settings_title = 'Настройки Pulse';
$lang_settings_general = 'Основные';
$lang_settings_forms = 'Формы';
$lang_settings_security = 'Безопасность';
$lang_settings_permissions = 'Права доступа';
$lang_settings_extend = 'Расширенные';

//// Settings: General
$lang_settings_path = 'Путь';
$lang_settings_path_tooltip = 'Оставьте пустым, если Pulse установлен в корневой папке';
$lang_settings_admin = 'Администратор';
$lang_settings_admin_tooltip = 'Имя папки администратора';
$lang_settings_password = 'Пароль';
$lang_settings_password_tooltip = 'Что-то, что трудно будет угадать';
$lang_settings_backup_tooltip = 'Автоматический бэкап';
$lang_settings_backupemail = 'Email для бэкапа';
$lang_settings_backupemail_tooltip = 'Pulse отправит ZIP архив на этот email';
$lang_settings_time = 'Часовой пояс по умолчанию';
$lang_settings_language = 'Язык';
$lang_settings_ip = 'Анонимный IP-адрес';
$lang_settings_frontpage = 'Отображение главной страницы';
$lang_settings_adminfrontpage = 'Отображение главной страницы администратора';
$lang_settings_adminname = 'Имя администратора';
$lang_settings_adminname_tooltip = 'Используется для отображения в заголовках блогов';
$lang_settings_css = 'Перезапись CSS для всего сайта';
$lang_settings_css_tooltip = 'Скопируйте ваш CSS сюда';
$lang_settings_js = 'Перезапись JS для всего сайта';
$lang_settings_js_tooltip = 'Скопируйте ваш JS сюда';

//// Settings: Avatar
$lang_settings_avatar_upload = 'Загрузка аватара';

//// Settings: GDPR
$lang_settings_title_gdpr = 'GDPR';
$lang_settings_gdpr_enable_in_form = 'Включить ВПР в теге формы';

$lang_settings_gdpr_enable_in_tag    = 'Включить показатель ВВП в теге';
$lang_settings_gdpr_tag_text         = 'Всплывающий текст GDPR';
$lang_settings_gdpr_tag_text_tooltip = 'Всплывающий текст GDPR (подсказка)';

//// Settings: Cache
$lang_settings_title_cache = 'Кэш';
$lang_settings_cache = 'Включить внешний кэш';

//// Settings: Editor
$lang_settings_title_editor = 'Редактор';
$lang_settings_wysiwyg = 'Включить WYSIWYG редактор в Блоках (в противном случае HTML и Markdown)';
$lang_settings_upload = 'Позволить загружать файлы';
$lang_settings_upload_tooltip = 'Используйте запятую для разделения расширений файлов';
$lang_settings_wysiwygpages = 'Включить WYSIWYG редактор в Страницах (в противном случае HTML and Markdown)';

//// Settings: Made in Pulse
$lang_settings_title_made_in_pulse = 'Сделано на Pulse';
$lang_settings_made_in_pulse       = 'Добавить значёк Made in Pulse';
$lang_settings_made_in_pulse_label = 'Включить "Made-in-pulse content" для шаблона';

$lang_settings_theme_meta_author_show       = 'Показать метаданные автора в теме';
$lang_settings_theme_meta_author_show_label = 'Показать метаданные автора в теме';

//// Settings: Media
$lang_settings_title_media = 'Медиа';
$lang_settings_jpeg = 'Качество JPEG';
$lang_settings_jpeg_tooltip = 'Использовать 100 для наилучшего качества JPEG (большие файлы)';
$lang_settings_jpegresample = 'Преобразование JPEG "выкл"';
$lang_settings_jpegsize = 'Качество JPEG';
$lang_settings_jpegsize_tooltip = 'Масштабировать JPEG до максимального размера  (высота)';
$lang_settings_thumbheight = 'Высота миниатюры';
$lang_settings_thumbheight_tooltip = 'Высота в пикселях';
$lang_settings_thumb = 'Создавать миниатюры';

//// Settings: Navigation
$lang_settings_title_navigation = 'Навигация';
$lang_settings_navigationmenu = 'Включить редактирование на лету';
$lang_settings_title_managenavigation = 'Редактировать навигацию сайта';

/// Settings: Google Analytics
$lang_settings_title_google = 'Google Analytics';
$lang_settings_google = 'Код отслеживания Google Analytics';
$lang_settings_google_tooltip = 'Вставьте здесь код отслеживания Google Analytics';

//// Settings: GeoIP
$lang_settings_title_geoip = 'GeoIP';
$lang_settings_geoip       = 'GeoIP данные для статистики сайта';
$lang_settings_geoip_label = 'Включить GeoIP данные для статистики';

$lang_settings_geoip_api_key         = 'GeoIP оказание услуг API KEY';
$lang_settings_geoip_api_key_tooltip = 'GeoIP оказание услуг API KEY';
$lang_settings_geoip_service         = 'GeoIP оказание услуг';
$lang_settings_geoip_service_tooltip = 'freegeoip, ipstack';

//// Settings: OGP
$lang_settings_title_ogp = 'OGP';
$lang_settings_ogp = 'OGP изображение по умолчанию';
$lang_settings_ogp_tooltip = 'Относительная или абсолютная ссылка';

//// Settings: Blog
$lang_settings_title_blog = 'Блог';
$lang_settings_blogresults = 'Результаты для страницы';
$lang_settings_blogresults_tooltip = 'Записи блогов для страницы';
$lang_settings_blogdisqus = 'Включить дискуссионные комментарии';
$lang_settings_blogdisqususer = 'Дискуссионный ник';
$lang_settings_blogdisqususer_tooltip = 'Добавить ваш дискуссионный ник';
$lang_settings_blogdate = 'Формат даты';
$lang_settings_blogdate_tooltip = 'PHP формат даты. Более подробно: https://php.net/manual/en/function.date.php';
$lang_settings_blog_flag_reverse = 'обратный порядок в блоге'; 
$lang_settings_blogmasonry = 'Включить masonry макет для Блога';

//// Settings: RSS
$lang_settings_title_rss = 'RSS';
$lang_settings_rsstitle = 'Заголовок Блога RSS';
$lang_settings_rsstitle_tooltip = 'Мой Блог';
$lang_settings_rssdescription = 'Описание блога RSS';
$lang_settings_rssdescription_tooltip = 'Это мой блог.';
$lang_settings_rssurl = 'URL блога';
$lang_settings_rssurl_tooltip = 'http://example.com/blog';
$lang_settings_rsslang = 'Формат даты';
$lang_settings_rsslang_tooltip = 'en-gb';
$lang_settings_rssurlprefix = 'Блог URL префикс';
$lang_settings_rssurlprefix_tooltip = '(блог) будет blog-1-post-title, также редактировать в htaccess';

//// Settings: SMTP Settings
$lang_settings_title_smtp = 'SMTP Настройки';
$lang_settings_smtpusername = 'SMTP логин';
$lang_settings_smtpusername_tooltip = 'Заполнять, только если хотите использовать SMTP';
$lang_settings_smtppassword = 'SMTP пароль';
$lang_settings_smtppassword_tooltip = 'Пароль';
$lang_settings_smtphost = 'SMTP host';
$lang_settings_smtphost_tooltip = 'mail.server.com';
$lang_settings_smtpport = 'SMTP port';
$lang_settings_smtpport_tooltip = '465';

//// Settings: SweetAlert
$lang_settings_title_sweetalert = 'Настройки SweetAlert';
$lang_settings_sweetalert_active_tooltip  = 'Активировать оповещения';
$lang_settings_sweetalert_active          = 'Активировать';
$lang_settings_sweetalert_timeout_tooltip = 'Задержка ожидания (миллисекунды)';
$lang_settings_sweetalert_timeout         = 'Задержка';

//// Settings: Pagination
$lang_settings_title_pagination = 'Нумерация страниц';
$lang_settings_paginationlinks = 'Ссылки на страницы, чтобы показать';
$lang_settings_paginationlinks_tooltip = 'например появляется в Блоках и навигации Страниц';
$lang_settings_paginationpages = 'Результаты для страницы';
$lang_settings_paginationpages_tooltip = 'Сколько страниц должно появиться по ссылке';

//// Settings: Forms
$lang_settings_forminputname = 'Введите Имя';
$lang_settings_forminputname_tooltip = 'текст';
$lang_settings_forminputemail = 'введите Email';
$lang_settings_forminputemail_tooltip = 'email';
$lang_settings_forminputtel = 'Введите телефон';
$lang_settings_forminputtel_tooltip = 'текст';

$lang_settings_formnamename = 'Текст для Имени';
$lang_settings_formnamename_tooltip = 'Имя';
$lang_settings_formemailname = 'Текст для Email';
$lang_settings_formemailname_tooltip = 'Email';
$lang_settings_formtextarea = 'Размер текстовой области';
$lang_settings_formtextarea_tooltip = 'Количество строк в комментарии текстовой области';
$lang_settings_formemail = 'Получатель формы';
$lang_settings_formemail_tooltip = 'Разделите несколько получателей запятой';
$lang_settings_formsubject = 'Строка темы формы';
$lang_settings_formsubject_tooltip = 'вы получили email';
$lang_settings_formthanks = 'Включить автоматическую благодарность за ответ после отправки';
$lang_settings_formredirect = 'Перенаправление отправки';
$lang_settings_formredirect_tooltip = 'http://yoursite.com/thanks';
$lang_settings_formcomment             = 'Текст/Ярлык для комментария';
$lang_settings_formcommentname_tooltip = 'Комментарий';
$lang_settings_form_gdpr = 'GDPR intrare';
$lang_settings_form_gdpr_name_tooltip = 'GDPR';
$lang_settings_formphone               = 'Текст/Ярлык для телефона';
$lang_settings_formphonename_tooltip   = 'Телефон';

//// Settings: OTP One-Time Password
$lang_settings_title_otp = 'Настройки одноразового пароля (Администратор)';
$lang_settings_otpactivate = 'Включить одноразовый пароль';
$lang_settings_otpsecret = 'Секретный пароль';
$lang_settings_otpsecret_tooltip = 'Получить из мобильного OTP приложения, такого как Google Authenticator';

//// Settings: reCAPTCHA
$lang_settings_title_recap = 'reCAPTCHA';
$lang_settings_recapkey = 'Ключ сайта reCAPTCHA';
$lang_settings_recapkey_tooltip = 'Получить из Google эккаунта: https://www.google.com/recaptcha';
$lang_settings_recapkeysecret = 'Секретный ключ reCAPTCHA';
$lang_settings_recapkeysecret_tooltip = 'Получить из Google эккаунта: https://www.google.com/recaptcha';

//// Settings: Permissions
$lang_settings_title_editor = 'Редактор';
$lang_settings_editor = 'Включить редактора';
$lang_settings_editorpass = 'Пароль редактора';
$lang_settings_editorpass_tooltip = 'Что-то, что трудно угадать';
$lang_settings_editoruser = 'Имя редактора';
$lang_settings_editoruser_tooltip = 'Используется для отражения имени в Блогах';

$lang_settings_title_editorotp = 'Одноразовый пароль (Редактор)';
$lang_settings_editorotpactivate = 'Включить одноразовый пароль';
$lang_settings_editorotpsecret = 'Одноразовый секретный пароль';
$lang_settings_editorotpsecret_tooltip = 'Получить из мобильного приложения OTP, такого как Google Authenticator';

$lang_settings_title_editoraccess = 'Разрешить редактору доступ к любому (или ко всем) из этих блоков:';
$lang_settings_title_editorpagesaccess = 'Разрешить редактору доступ к любому (или ко всем) из этих страниц:';

//// Settings: Extend
$lang_settings_title_themes = 'Темы';
$lang_settings_themeselect = 'Выбранная тема';
$lang_settings_themeupload = 'Загрузить тему ZIP';

$lang_settings_title_plugins = 'Плагины';
$lang_settings_pluginupload = 'Загрузить плагин ZIP';

$lang_settings_title_customposts = 'Пользовательские Типы Сообщения';
$lang_settings_managecustomposts = 'Управлять пользовательскими типами сообщений';

$lang_settings_themeuploader = 'Загрузить новую тему в ZIP файле';
$lang_settings_pluginuploader = 'Загрузить новый плагин в ZIP файле';

$lang_settings_title_debug_info  = 'Отладочная информация';
$lang_settings_manage_debug_info = 'Отладочная информация';
$lang_settings_manage_log_viewer = 'Просмотр журнала';

$lang_settings_title_update  = 'Обновить';
$lang_settings_manage_update = 'Обновить';

//// Settings: Media
$lang_settings_mediaupload = 'Загрузить медиафайл';

//// Settings: Navigation
$lang_settings_navigationtitle = 'Редактировать навигацию';
$lang_settings_navigationsubtitle = 'Перетащите, чтобы упорядочить список.';
$lang_settings_navigationsubmenu = 'Добавить подменю';

$lang_settings_navigation_non_pulse_page = 'Добавить не Pulse объекты';
$lang_settings_navigation_non_pulse_name = 'Имя';
$lang_settings_navigation_non_pulse_url  = 'Ссылка';

$lang_settings_navigation_activate = 'Включить';

$lang_settings_navigation_add_menu = "Добавить меню";
$lang_settings_navigation_menus = "Меню";

//// Settings: Custom Post Type
$lang_settings_custompostentries = 'Ваша новая запись для:';
$lang_settings_custompostadd = 'Добавить новую запись';

$lang_settings_title_custompostedit = 'Добавить свой тип записи для:';
$lang_settings_custompostback = '< Обратно к списку страниц';
$lang_settings_custompostname = 'Имя вашей записи';

$lang_settings_custompostdelete = 'Вашу запись';

$lang_settings_custompostaddentry = 'Добавить вашу запись:';

$lang_settings_customposttypes = 'Пользовательские типы записей';
$lang_settings_custompostmanage = 'управление записями ';
$lang_settings_custompostmanageedit = 'редактировать';
$lang_settings_custompostmanageadd = 'Добавить новый тип записи';

$lang_settings_title_custompostedit_title = 'Редактировать вашу запись';
$lang_settings_title_custompostedit_titlein = 'Редактировать вашу запись в:';

$lang_settings_custompostdefadd = 'Добавить свой тип сообщения';
$lang_settings_custompostdeftypename = 'Название типа сообщения';
$lang_settings_custompostdefname = 'Имя';
$lang_settings_custompostdeftype = 'Тип';
$lang_settings_custompostdeffield = 'Поле';
$lang_settings_custompostcontent = 'Содержание';

# log viewer
$lang_settings_log_viewer_log_files   = 'Лог-файлы';
$lang_settings_log_viewer_log_content = 'Вход в журнал'; 

// Tags
$lang_settings_title_tags = 'Теги';
$lang_settings_manage_tags = 'Редактировать теги';

$lang_settings_tags_title = 'Редактировать теги';
$lang_settings_tags_subtitle = 'Добавить / Стереть теги и описание.';

$lang_settings_tags_name = 'Имя';
$lang_settings_tags_description = 'Описание';

// Template Strings
$lang_settings_title_template_strings = 'Текст шаблона';

$lang_settings_template_string_admin_login_welcome_tooltip = 'Выделен тег Span. Текущий
: Здравствуйте! Pulse пользователь';
$lang_settings_template_string_admin_login_welcome         = 'Вход Приветствующий текст';

# User Group List
$lang_settings_title_user_group_list  = 'Список групп пользователей';
$lang_settings_manage_user_group_list = 'Управление списком групп пользователей';

$lang_settings_user_group_list_title    = 'Управление группами';
$lang_settings_user_group_list_subtitle = 'Добавить / Удалить группы';

$lang_settings_user_group_list_group_name  = 'Имя группы';
$lang_settings_user_group_list_permissions = 'Разрешения доступа';

$lang_settings_user_group_list_read       = 'Читать';
$lang_settings_user_group_list_read_write = 'Читай пиши';

$lang_settings_user_group_list_access_denied = 'Доступ к этому элементу отклонен';

// User List
$lang_settings_title_user_list = 'Список пользователей';
$lang_settings_manage_user_list = 'Управление списком пользователей';

$lang_settings_user_list_title = 'Управление пользователями';
$lang_settings_user_list_subtitle = 'Добавить / удалить пользователей';

$lang_settings_user_list_acl_role = 'Роль пользователя';
$lang_settings_user_list_otp_activate = 'OTP активировать';
$lang_settings_user_list_password = 'пароль';
$lang_settings_user_list_username = 'имя пользователя';

// Search
$lang_search_title = 'Поиск';
$lang_search_placeholder = 'Искать текст';
$lang_search_cta = 'Поиск';
$lang_search_noresults = 'Ничего не найдено';
$lang_search_results = 'Результаты поиска';
$lang_search_links = 'Ссылка на';

// Page List
$lang_pagelist = 'Список страниц';

// Admin - Debug info
$lang_debug_info_title     = 'Отладочная информация';
$lang_debug_info_path      = 'Путь';
$lang_debug_info_title_sub = 'Файл / Права директории';
$lang_debug_info_button    = 'Скачать';
$lang_debug_info_text      = 'Скачать zip архив';

// Admin - Open
$lang_open_meta_searchable = 'Показывать в поиске';

// Admin - Update
$lang_update_title     = 'Обновить Pulse CMS';
$lang_update_title_sub = 'Загрузить новый PulseCMS zip архив';
$lang_update_button    = 'Обновить';