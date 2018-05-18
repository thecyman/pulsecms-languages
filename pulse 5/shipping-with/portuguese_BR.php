<?php

//Global
$lang_cancel = "Cancelar";
$lang_duplicate = "Duplicar";
$lang_help = "Ajuda";
$lang_help_url ="https://help.pulsecms.com/";
$lang_settings = "Configurações";
$lang_account = "Conta";
$lang_save = "Salvar";
$lang_rename_btn = "Renomear";
$lang_title = "Pulse CMS";

// Auto backup
$lang_autobackup_email_subject_line = 'Lembrete do auto-backup do Pulse';
$lang_autobackup_email_text =<<<EOD
Hi,

Your Pulse install has generated a backup zip file.

Regards,
The Pulse CMS Team
EOD;

// Login
$lang_login_forgot_password = "Esqueceu sua senha ?";
$lang_login_forgot_password_email_body =<<<EOD
	Hi,
	
	Your Pulse password is PASSWORD
EOD;
$lang_login_forgot_password_email_subject_line = "Esqueceu a senha do Pulse?"; 
$lang_login_incorrect = "A senha está incorreta!";
$lang_login_password = "Senha";
$lang_login_button = "Login";
$lang_nav_logout = "Sair";
$lang_login_otp = "Senha OTP";
$lang_login_welcome = "Oi!";
$lang_login_name = "Usuário Pulse";

$lang_login_forgot_password_message = 'Sua senha foi redefinida';

// Home
$lang_home_emptyfold = "Esta pasta está vazia"; 
$lang_home_new = "Novo";
$lang_home_upload_button = "Upload";
$lang_home_preview = "Preview";

// Navigation
$lang_nav_title = "Navigação";
$lang_nav_home = "Painel";
$lang_nav_blocks = "Blocos";
$lang_nav_img = "Mídia";
$lang_nav_blog = "Blog";
$lang_nav_pages = "Páginas";
$lang_nav_stats = "Statísticas";

// Navigation logged in bar
$lang_nav_logged_in_add_block     = 'Adicionar novo bloco';
$lang_nav_logged_in_add_blog_post = 'Adicionar novo post no blog';
$lang_nav_logged_in_add_media     = 'Adicionar nova mídia';
$lang_nav_logged_in_add_page      = 'Adicionar nova página';


// Gallery
$lang_gal_alt_gallery = "alt tag";
$lang_gal_caption_gallery = "Insira uma legenda aqui";
$lang_gal_filename = "Nome do arquivo";
$lang_gal_dimensions = "Dimensões";
$lang_gal_size = "Tamanho";
$lang_gal_img = "IMG";
$lang_gal_link = "Link";
$lang_gallery_tool_tip = "Para criar uma galeria lightbox, crie uma pasta com imagens e use a tag embed.";
$lang_crop = 'Cortar';
$lang_media_order = 'Ordenar';
$lang_media_replace = 'Substituir';

// Pages
$lang_pages_meta = "Meta";
$lang_pages_title = "Título da página";
$lang_pages_description = "Descrição da página";

$lang_pages_css = 'CSS Inline';
$lang_pages_js = 'JS Inline';
$lang_pages_template = 'Modelo de página';


// Create
$lang_create_file_or_folder = 'Nova página';

$lang_create_file_or_folder_block = "Novo bloco";
$lang_create_file_or_folder_blog  = "Novo blog";
$lang_create_file_or_folder_page  = "Nova página";
$lang_create_file_or_folder_media = "Nova mídia";

$lang_create_item_block = 'Item de bloco';
$lang_create_item_blog  = 'Item de blog';
$lang_create_item_page  = 'Página';
$lang_create_item_media = 'Item de mídia';
$lang_create_item_folder = 'Pasta';

$lang_create_button = "Criar"; 
$lang_create_tool_tip = "Páginas, blocos e posts de blog devem terminar com '.txt', que é adicionado automaticamente. Para crair uma pasta ou um blog novo, selecione Pasta ou Blog e Criar.";
$lang_create_embed = "Embed";
$lang_create_embed_tag = "Tag embed";
$lang_create_embed_url = "URL embed:";
$lang_create_embed_html = "HTML embed:";
$lang_create_embed_php = "PHP embed:";

$lang_create_block_move = "Mover bloco para";
$lang_create_media_move = "Mover mídia para";

$lang_create_folder_error        = 'Não foi possível criar a pasta';
$lang_create_folder_error_exists = 'Essa pasta já existe';

$lang_create_folder_error_no_base   = 'Nenhuma pasta base encontrada';
$lang_create_folder_error_no_folder = 'Nome da pasta não foi preenchido';

// Delete
$lang_delete = 'Tem certeza que quer apagar ';
$lang_del_button = "Apagar";

// Errors
$lang_error_create_ext = 'Extensão de arquivo inválida.';
$lang_error_file_exists = 'Já existe um arquivo com esse nome na pasta.';
$lang_error_upload = 'Você precisa estar em Galeria para enviar uma imagem.';
$lang_no_content = 'nenhum conteúdo encontrado';

//Blog
$lang_blog_title = 'Nome do Blog';
$lang_blog_date = 'Data';
$lang_blog_read_more = 'Ler mais';
$lang_blog_back_button = 'Voltar';
$lang_blog_older = 'Mais antigo';
$lang_blog_newer = 'Mais novo';
$lang_blog_error_folder = "Você não pode criar uma pasta em Blog";
$lang_blog_tool_tip = "Entradas do Blog são ordenadas por número, sendo o maior correspondente ao post mais novo.";
$lang_blog_import = 'Importar';
$lang_blog_import_tool_tip = 'Importar entradas de blog de RSS. O importador vai importar formatos RSS e ATOM.';
$lang_blog_import_page_max = 'Número máximo de páginas';
$lang_blog_import_page_var = 'Nome variável de paginação';
$lang_blog_import_url = 'URL';

$lang_blog_description = 'Descrição do blog';
$lang_blog_tags = 'Tags do blog (separadas por vírgula)';
$lang_blog_tags_short = 'Tags do blog';
$lang_blog_url = 'URL do blog';
$lang_blog_index = 'Você quer indexar isso?';
$lang_blog_nofollow = 'Você quer marcar como "no follow?"';
$lang_blog_custom = 'Descrição META customizada';

//Form
$lang_form_error1 = 'Please fill out field ';
$lang_form_error2a = 'Your field ';
$lang_form_error2b = ' is too long.';
$lang_form_subject_line = 'Contact';
$lang_form_email_sent = 'Email was sent';
$lang_form_sent_button = 'Send';
$lang_auto_thank_contact = 'Thank you for sending me an email - we will reply soon and have received your email';

//Newsletter Form
$lang_newsletter_thanks ='Thanks!';
$lang_newsletter_try_again ='Try again';
$lang_newsletter_placeholder ='Enter Email';
$lang_newsletter_send ='Sign Up';

// Redactor
$lang_redactor_mail_button     = 'Adds an Email address';
$lang_redactor_mail_link_title = 'Send Email to me';

// Stats
$lang_stats_today = "Visitors";
$lang_stats_refers = "Top Referrers";
$lang_stats_pages = "Top Pages";
$lang_stats_refresh = "Refresh";
$lang_stats_pageviews = "Pageviews";
$lang_stats_per_visit = "Pages / Visit";
$lang_stats_bounce_rate ="Bounce Rate";
$lang_stats_online = "Online";
$lang_stats_thisweek = "This Week";
$lang_stats_todays_stats = "Today";
$lang_stats_nodata = "No Data";

$lang_stats_browsers  = "browsers";
$lang_stats_countries = "countries";
$lang_stats_devices   = "devices";
$lang_stats_systems   = "systems";

// Sweet Alert
$lang_sweetalert_ok    = "OK";
$lang_sweetalert_saved = "Saved";

// Custom post types
$lang_custom_post_type_error_illegal_characters = 'Custom post type name has illegal characters';
$lang_custom_post_type_error_illegal_name       = 'Custom post type name has an illegal name';
$lang_custom_post_type_error_unknown_entry      = 'This custom post type entry is unknown';

// Status messages
$lang_status_ok = 'Data saved';

// Dashboard
$lang_dashboard_backups = 'Backups';
$lang_dashboard_blocks = 'Blocks';
$lang_dashboard_edit_blocks = 'Edit Blocks';
$lang_dashboard_blog = 'Blog';
$lang_dashboard_edit_blog = 'Edit Blog';
$lang_dashboard_notes = 'Dashboard notes';
$lang_dashboard_file_storage = 'File Storage';
$lang_dashboard_media = 'Media';
$lang_dashboard_edit_media = 'Edit Media';
$lang_dashboard_pages = 'Pages';
$lang_dashboard_edit_page = 'Edit Page';

// Settings
$lang_settings_title = 'Pulse Settings';
$lang_settings_general = 'General';
$lang_settings_forms = 'Forms';
$lang_settings_security = 'Security';
$lang_settings_permissions = 'Permissions';
$lang_settings_extend = 'Extend';

//// Settings: General
$lang_settings_path = 'Path';
$lang_settings_path_tooltip = 'Leave blank if installed in root folder';
$lang_settings_admin = 'Admin';
$lang_settings_admin_tooltip = 'Admin folder name';
$lang_settings_password = 'Password';
$lang_settings_password_tooltip = 'Something difficult to guess';
$lang_settings_backup_tooltip = 'Automatic site backup';
$lang_settings_backupemail = 'Backup email';
$lang_settings_backupemail_tooltip = 'The place to send the ZIP backup';
$lang_settings_time = 'Default timezone';
$lang_settings_language = 'Language';
$lang_settings_ip = 'Anonymize IP';
$lang_settings_frontpage = 'Front page display';
$lang_settings_adminfrontpage = 'Admin front page display';
$lang_settings_adminname = 'Admin username';
$lang_settings_adminname_tooltip = 'Used to display name for Blog posts';
$lang_settings_css = 'CSS overwrite for whole site';
$lang_settings_css_tooltip = 'Paste your CSS in here';
$lang_settings_js = 'JS overwrite for whole site';
$lang_settings_js_tooltip = 'Paste your JS in here';

//// Settings: Cache
$lang_settings_title_cache = 'Cache';
$lang_settings_cache = 'Enable frontend cache';

//// Settings: Editor
$lang_settings_title_editor = 'Editor';
$lang_settings_wysiwyg = 'Enable WYSIWYG editor on Blocks (otherwise HTML and Markdown)';
$lang_settings_upload = 'Allowed files to upload';
$lang_settings_upload_tooltip = 'Use comma to separate file extensions';
$lang_settings_wysiwygpages = 'Enable WYSIWYG editor on Pages (otherwise HTML and Markdown)';

//// Settings: Made in Pulse
$lang_settings_title_made_in_pulse = 'Made in Pulse';
$lang_settings_made_in_pulse       = 'Made in Pulse badge added';
$lang_settings_made_in_pulse_label = 'Enable made-in-pulse content for template';

$lang_settings_theme_meta_author_show       = 'Show author meta in theme';
$lang_settings_theme_meta_author_show_label = 'Show author meta in theme';

//// Settings: Media
$lang_settings_title_media = 'Media';
$lang_settings_jpeg = 'JPEG quality';
$lang_settings_jpeg_tooltip = 'Use 100 for full JPEG quality (larger files)';
$lang_settings_jpegresample = 'JPEG resampling "off"';
$lang_settings_jpegsize = 'JPEG quality';
$lang_settings_jpegsize_tooltip = 'Scale JPEGs to a max pixel size (height)';
$lang_settings_thumbheight = 'Thumbnail height';
$lang_settings_thumbheight_tooltip = 'Height in px';
$lang_settings_thumb = 'Create thumbnails';

//// Settings: Navigation
$lang_settings_title_navigation = 'Navigation';
$lang_settings_navigationmenu = 'Enable frontend editing';
$lang_settings_title_managenavigation = 'Manage site navigation';

/// Settings: Google Analytics
$lang_settings_title_google = 'Google Analytics';
$lang_settings_google = 'Analytics tracking code';
$lang_settings_google_tooltip = 'Paste your Google Analytics tracking code snippet here';

//// Settings: GeoIP
$lang_settings_title_geoip = 'GeoIP';
$lang_settings_geoip       = 'GeoIP data for site stats';
$lang_settings_geoip_label = 'Enable GeoIP for stats here';

//// Settings: OGP
$lang_settings_title_ogp = 'OGP';
$lang_settings_ogp = 'OGP default image';
$lang_settings_ogp_tooltip = 'Relative or absolute link';

//// Settings: Blog
$lang_settings_title_blog = 'Blog';
$lang_settings_blogresults = 'Results per page';
$lang_settings_blogresults_tooltip = 'Blog posts per page';
$lang_settings_blogdisqus = 'Enable Disqus comments';
$lang_settings_blogdisqususer = 'Disqus username';
$lang_settings_blogdisqususer_tooltip = 'Add your Disqus account shortname';
$lang_settings_blogdate = 'Date format';
$lang_settings_blogdate_tooltip = 'PHP date format. For more see: https://php.net/manual/en/function.date.php';
$lang_settings_blogmasonry = 'Enable Blog masonry layout';

//// Settings: RSS
$lang_settings_title_rss = 'RSS';
$lang_settings_rsstitle = 'RSS blog title';
$lang_settings_rsstitle_tooltip = 'My Blog';
$lang_settings_rssdescription = 'RSS blog description';
$lang_settings_rssdescription_tooltip = 'This is my blog.';
$lang_settings_rssurl = 'Blog URL';
$lang_settings_rssurl_tooltip = 'http://example.com/blog';
$lang_settings_rsslang = 'Date format';
$lang_settings_rsslang_tooltip = 'en-gb';
$lang_settings_rssurlprefix = 'Blog URL prefix';
$lang_settings_rssurlprefix_tooltip = '(blog) would be blog-1-post-title, also edit in htaccess';

//// Settings: SMTP Settings
$lang_settings_title_smtp = 'SMTP Settings';
$lang_settings_smtpusername = 'SMTP username';
$lang_settings_smtpusername_tooltip = 'Only fill in if want to use SMTP';
$lang_settings_smtppassword = 'SMTP password';
$lang_settings_smtppassword_tooltip = 'Password';
$lang_settings_smtphost = 'SMTP host';
$lang_settings_smtphost_tooltip = 'mail.server.com';
$lang_settings_smtpport = 'SMTP port';
$lang_settings_smtpport_tooltip = '465';

//// Settings: SweetAlert
$lang_settings_title_sweetalert = 'SweetAlert Settings';
$lang_settings_sweetalert_active_tooltip  = 'Activate alerts';
$lang_settings_sweetalert_active          = 'Activate';
$lang_settings_sweetalert_timeout_tooltip = 'Timeout delay (milliseconds)';
$lang_settings_sweetalert_timeout         = 'Timeout';

//// Settings: Pagination
$lang_settings_title_pagination = 'Pagination';
$lang_settings_paginationlinks = 'Page links to show';
$lang_settings_paginationlinks_tooltip = 'Appears on Blocks and Pages navigation for example';
$lang_settings_paginationpages = 'Results per page';
$lang_settings_paginationpages_tooltip = 'How many pages to appear per link';

//// Settings: Forms
$lang_settings_forminputname = 'Name input';
$lang_settings_forminputname_tooltip = 'text';
$lang_settings_forminputemail = 'Email input';
$lang_settings_forminputemail_tooltip = 'email';
$lang_settings_forminputtel = 'Tel input';
$lang_settings_forminputtel_tooltip = 'text';

$lang_settings_formnamename = 'Text for Name';
$lang_settings_formnamename_tooltip = 'Name';
$lang_settings_formemailname = 'Text for Email';
$lang_settings_formemailname_tooltip = 'Email';
$lang_settings_formtextarea = 'Textarea size';
$lang_settings_formtextarea_tooltip = 'Number of rows in comment textarea';
$lang_settings_formemail = 'Form recipient';
$lang_settings_formemail_tooltip = 'Separate multiple recipients by a comma';
$lang_settings_formsubject = 'Form subject line';
$lang_settings_formsubject_tooltip = 'You received an email';
$lang_settings_formthanks = 'Enable automatic thank you reply after submission';
$lang_settings_formredirect = 'Submission redirect';
$lang_settings_formredirect_tooltip = 'http://yoursite.com/thanks';

$lang_settings_formcomment             = 'Text/Label for comment';
$lang_settings_formcommentname_tooltip = 'Comment';
$lang_settings_formphone               = 'Text/Label for phone';
$lang_settings_formphonename_tooltip   = 'Phone';

//// Settings: OTP One-Time Password
$lang_settings_title_otp = 'One Time Password settings (Admin)';
$lang_settings_otpactivate = 'Activate One Time Password';
$lang_settings_otpsecret = 'One Time Password secret';
$lang_settings_otpsecret_tooltip = 'Get from OTP mobile app, such as Google Authenticator';

//// Settings: reCAPTCHA
$lang_settings_title_recap = 'reCAPTCHA';
$lang_settings_recapkey = 'reCAPTCHA Site Key';
$lang_settings_recapkey_tooltip = 'Get from Google account: https://www.google.com/recaptcha';
$lang_settings_recapkeysecret = 'reCAPTCHA Secret Key';
$lang_settings_recapkeysecret_tooltip = 'Get from Google account: https://www.google.com/recaptcha';

//// Settings: Permissions
$lang_settings_title_editor = 'Editor User';
$lang_settings_editor = 'Enable Editor user';
$lang_settings_editorpass = 'Editor password';
$lang_settings_editorpass_tooltip = 'Something difficult to guess';
$lang_settings_editoruser = 'Editor username';
$lang_settings_editoruser_tooltip = 'Used to display name for Blog posts';

$lang_settings_title_editorotp = 'One Time Password settings (Editor)';
$lang_settings_editorotpactivate = 'Activate One Time Password';
$lang_settings_editorotpsecret = 'One Time Password secret';
$lang_settings_editorotpsecret_tooltip = 'Get from OTP mobile app, such as Google Authenticator';

$lang_settings_title_editoraccess = 'Allow Editor to access any (or all) of these blocks:';
$lang_settings_title_editorpagesaccess = 'Allow Editor to access any (or all) of these pages:';

//// Settings: Extend
$lang_settings_title_themes = 'Themes';
$lang_settings_themeselect = 'Theme selected';
$lang_settings_themeupload = 'Upload theme ZIP';

$lang_settings_title_plugins = 'Plugins';
$lang_settings_pluginupload = 'Upload plugin ZIP';

$lang_settings_title_customposts = 'Custom Post Types';
$lang_settings_managecustomposts = 'Manage custom post types';

$lang_settings_themeuploader = 'Upload a new theme ZIP file';
$lang_settings_pluginuploader = 'Upload a new plugin ZIP file';

$lang_settings_title_debug_info  = 'Debug Info';
$lang_settings_manage_debug_info = 'Debug Info';

$lang_settings_title_update  = 'Update';
$lang_settings_manage_update = 'Update';

//// Settings: Media
$lang_settings_mediaupload = 'Upload a media file';

//// Settings: Navigation
$lang_settings_navigationtitle = 'Manage the navigation links';
$lang_settings_navigationsubtitle = 'Drag and drop to re-order the list.';
$lang_settings_navigationsubmenu = 'Add sub-menu';

$lang_settings_navigation_non_pulse_page = 'Add non Pulse item';
$lang_settings_navigation_non_pulse_name = 'Name';
$lang_settings_navigation_non_pulse_url  = 'URL';

$lang_settings_navigation_activate = 'Activate';

$lang_settings_navigation_add_menu = "Add menu";
$lang_settings_navigation_menus = "Menus";

//// Settings: Custom Post Type
$lang_settings_custompostentries = 'Custom post type entries for:';
$lang_settings_custompostadd = 'Add a new entry';

$lang_settings_title_custompostedit = 'Custom post type entries for:';
$lang_settings_custompostback = '< Back to the list page';
$lang_settings_custompostname = 'Post Name';

$lang_settings_custompostdelete = 'custom post type entry';

$lang_settings_custompostaddentry = 'Add a custom post type entry for:';

$lang_settings_customposttypes = 'Custom post types';
$lang_settings_custompostmanage = 'manage entries';
$lang_settings_custompostmanageedit = 'edit';
$lang_settings_custompostmanageadd = 'Add a new custom post type';

$lang_settings_title_custompostedit_title = 'Edit a custom post type';
$lang_settings_title_custompostedit_titlein = 'Edit a custom post type entry in:';

$lang_settings_custompostdefadd = 'Add a custom post type';
$lang_settings_custompostdeftypename = 'Post type name';
$lang_settings_custompostdefname = 'Name';
$lang_settings_custompostdeftype = 'Type';
$lang_settings_custompostdeffield = 'Field';
$lang_settings_custompostcontent = 'Content';

// Tags
$lang_settings_title_tags = 'Tags';
$lang_settings_manage_tags = 'Manage Tags';

$lang_settings_tags_title = 'Manage the tags';
$lang_settings_tags_subtitle = 'Add / Delete tags and descriptions.';

$lang_settings_tags_name = 'Name';
$lang_settings_tags_description = 'Description';

// Search
$lang_search_title = 'Search';
$lang_search_placeholder = 'Search Term';
$lang_search_cta = 'Search';
$lang_search_noresults = 'No results found';
$lang_search_results = 'Search results';
$lang_search_links = 'Link to';

// Page List
$lang_pagelist = 'Page List';

// Admin - Debug info
$lang_debug_info_title     = 'Debug info';
$lang_debug_info_path      = 'Path';
$lang_debug_info_title_sub = 'File/Directory permissions';
$lang_debug_info_button    = 'Download';
$lang_debug_info_text      = 'Download the zip file';

// Admin - Open
$lang_open_meta_searchable = 'Show in search';

// Admin - Update
$lang_update_title     = 'Update a Pulse CMS install';
$lang_update_title_sub = 'Upload the new PulseCMS zip file';
$lang_update_button    = 'Update';
