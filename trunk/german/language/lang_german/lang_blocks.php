<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* TheSteffen, KugeLSichA, Tom, Carsten
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'Title_ads' => 'Werbung',
	'Title_ads_tla' => 'Werbung',
	'Title_album' => 'Foto-Galerie',
	'Title_birthdays' => 'Geburtstage',
	'Title_calendar' => 'Kalender',
	'Title_calendar_events' => 'Termine',
	'Title_center_downloads' => 'Downloads',
	'Title_clock' => 'Uhr',
	'Title_donate' => 'Spenden',
	'Title_dyn_menu' => 'Navigation',
	'Title_flash' => 'Flash',
	'Title_flash_news' => 'Flash News',
	'Title_forum' => 'News',
	'Title_forum_attach' => 'News',
	'Title_forum_list' => 'Forum Liste',
	'Title_global_header' => 'Global Header',
	'Title_global_header_simple' => 'Global Header Einfach',
	'Title_gsearch' => 'Google Suche',
	'Title_gsearch_hor' => 'Google Suche',
	'Title_kb' => 'Wissensdatenbank',
	'Title_links' => 'Links',
	'Title_menu' => 'Forum Navigation',
	'Title_nav_header' => 'Header',
	'Title_nav_links' => 'Sitemap',
	'Title_nav_logo' => 'Logo',
	'Title_news' => 'News',
	'Title_news_archive' => 'News Archiv',
	'Title_news_posters' => 'Newsschreiber',
	'Title_online_users' => 'Wer ist Online',
	'Title_online_users2' => 'Wer ist Online',
	'Title_paypal' => 'PayPal',
	'Title_paypal_donate' => 'Spenden',
	'Title_plugin_guestbook' => 'Gästebuch',
	'Title_poll' => 'Umfrage',
	'Title_random_attach' => 'Zufällige Anhänge',
	'Title_random_topics' => 'Zufällige Themen',
	'Title_random_topics_ver' => 'Zufällige Themen',
	'Title_random_user' => 'Zufällige Benutzer',
	'Title_recent_articles' => 'Neueste Artikel',
	'Title_recent_topics' => 'Neueste Themen',
	'Title_recent_topics_wide' => 'Neueste Themen',
	'Title_referers' => 'Referrers',
	'Title_rss' => 'RSS',
	'Title_search' => 'Suche',
	'Title_sec_menu' => 'Extra-Menü',
	'Title_sh_visit_counter' => 'Besucherzähler',
	'Title_shoutbox' => '<a href="shoutbox_max.' . PHP_EXT . '?sid=' . $userdata['session_id'] . '">Shoutbox</a>',
	'Title_staff' => 'Team',
	'Title_statistics' => 'Statistik',
	'Title_style' => 'Style',
	'Title_top_downloads' => 'Top Downloads',
	'Title_top_posters' => 'Top Poster',
	'Title_user_block' => 'Benutzerblock',
	'Title_users_visited' => 'Aktive Benutzer',
	'Title_visit_counter' => 'Besucherzähler',
	'Title_welcome' => 'Willkommen',
	'Title_wordgraph' => 'Tags',

	'Advanced_GSearch' => 'Erweiterte Google Suche',
	'Advanced_search' => 'Erweiterte Suche',
	'Album' => 'Foto-Galerie',
	'All_News_Archives' => 'Alle News Archive',
	'All_News_Categories' => 'Alle News Kategorien',
	'Articles' => 'Artikel',
	'Articles_time' => 'Geschrieben in',
	'Articles_options' => 'Optionen',
	'Article_Reply' => 'Schreibe einen Kommentar',
	'Article_Print' => 'Drucke diesen Artikel',
	'Article_Email' => 'An einen Freund weiterleiten',
	'Censor' => 'Zensieren',
	'Click_to_join_chat' => 'Klicke hier um zum Chat zu gelangen',
	'Comments' => 'Kommentare',
	'Credits' => 'Mods und Credits',
	'Day_users' => '%d registrierte Benutzer haben das Forum in den letzten %d Stunden besucht.',
	'Disable_BBCode_post' => 'BBCode in diesem Beitrag deaktivieren',
	'Disable_HTML_post' => 'HTML in diesem Beitrag deaktivieren',
	'Dls' => 'Downloads',
	'Donate_Funds' => 'Spenden',
	'GSearch' => 'Suche',
	'GSearch2' => 'Google Suche:',
	'GSearch_At' => 'Suche bei',
	'Guest' => 'Gast',
	'Guest_user_total' => '%d Gast',
	'Guest_users_total' => '%d Gäste',
	'Guest_users_zero_total' => 'keine Gäste',
	'Hidden_user_total' => '%d versteckter und ',
	'Hidden_users_total' => '%d versteckte und ',
	'Hidden_users_zero_total' => 'kein versteckter und ',
	'How_Many_Chatters' => 'Es sind zur Zeit <b>%d</b> Benutzer im Chat.',
	'Kb_name' => 'Wissensdatenbank',
	'IP_info' => 'IP Information',
	'Login_to_join_chat' => 'Bitte melde dich an, um zum Chat zu gelangen.',
	'Login_to_vote' => 'Du musst dich anmelden, um Abstimmen zu können.',
	'Lookup_IP' => 'IP-Adresse nachschlagen',
	'New_donations' => 'Neue Spenden',
	'New_downloads' => 'Neue Downloads',
	'News_And' => 'und hat',
	'News_Archives' => 'News Archive',
	'News_Categories' => 'News Kategorien',
	'News_Cats' => 'News Kategorien',
	'News_Comments' => 'Kommentare',
	'News_Email' => 'Thema per E-Mail versenden',
	'News_Print' => 'Thema ausdrucken',
	'News_Reply' => 'Auf diesen News Beitrag antworten',
	'News_Summary' => 'Dieser News Artikel wurde',
	'News_Views' => 'mal gelesen',
	'No_News_Cats' => 'Es sind leider keine News Kategorien verfügbar!',
	'No_Pics' => 'Keine Bilder',
	'No_poll' => 'Momentan keine Umfragen',
	'No_topics_found' => 'Es wurden keine Themen gefunden.',
	'None' => 'Keiner',
	'Not_day_users' => '%d registrierte Benutzer haben das Forum in den letzten %d Stunden <span style="color:red">NICHT</span> besucht.',
	'Not_found' => 'Keine Anhänge gefunden.',
	'Not_rated' => 'Nicht bewertet',
	'Online_user_total' => 'Insgesamt ist <b>%d</b> Benutzer online: ',
	'Online_users_total' => 'Insgesamt sind <b>%d</b> Benutzer online: ',
	'Online_users_zero_total' => 'Insgesamt sind <b>0</b> Benutzer online:',
	'Other_IP_this_user' => 'Andere IP Adressen, von denen der Benutzer geschrieben hat',
	'PAYPAL_DONATE_AMOUNT' => 'Wir haben bisher %s erhalten.',
	'PAYPAL_DONATE_DES' => 'If you found this site useful please consider <a href="%s">donating</a> to the project.',
	'PAYPAL_DONATE_USERS' => '<b>%d</b> users already donated to this site.',
	'Pic_Title' => 'Bildtitel',
	'Poll' => 'Umfrage',
	'Post_your_comment' => 'Kommentar schreiben',
	'Posted' => 'Geschrieben',
	'POSTED_ON' => 'am',
	'Poster' => 'Poster',
	'Posts' => 'Beiträge',
	'Rating' => ' Bewertung',
	'Read_Full' => 'Alles lesen',
	'Record_online_users' => 'Der Rekord liegt bei <b>%s</b> Benutzern am %s.',
	'Reg_user_total' => '%d registrierter, ',
	'Reg_users_total' => '%d registrierte, ',
	'Reg_users_zero_total' => 'keine registrierten, ',
	'Register_new_account' => 'Du hast noch kein Benutzer-Konto?<br />Jetzt kostenlos %sregistrieren%s!',
	'Registered_users' => 'Registrierte Benutzer:',
	'Remember_me' => 'Automatisch einloggen',
	'Save_Topic' => 'Das Thema als Datei speichern',
	'Shout_refresh' => 'Aktualisieren',
	'Shout_text' => 'Dein Text',
	'Shoutbox_date' => 'D G:i \\s\c\h\r\i\e\b ',
	'SH_Visit_counter_statement' => 'Diese Seite hatte seit dem %s <b>%d</b> Besucher.',
	'Tell_Friend' => 'Als E-Mail an einen Freund senden',
	'This_posts_IP' => 'IP Adresse für diesen Eintrag',
	'Top_downloads' => 'Top Downloads',
	'Total_votes' => 'Stimmen insgesamt',
	'Users_this_IP' => 'Benutzer, die von dieser IP Adresse geschrieben haben',
	'View' => 'Ansehen',
	'View_comments' => 'Kommentare anzeigen',
	'View_complete_list' => 'Komplette Liste anzeigen',
	'Visit_counter' => 'Besucherzähler',
	'Visit_counter_statement' => 'Diese Seite wurde seit %s <b>%d</b> mal aufgerufen',
	'Vote' => 'Abstimmen',

	'donated_by' => 'gespendet von',
	'search' => 'Suche',
	'search2' => 'Suche:',
	'search_at' => 'Suche bei',
	'total_topics' => ' Insgesamt <b>%s</b> Themen',


// Blocks Config
/*
	'cms_var_' => '',
	'cms_option_' => '',
	'cms_value_' => '',
*/

	'cms_var_kb_cat_id' => 'Kategorie ID',
	'cms_var_kb_cat_id_explain' => 'Wähle die Kategorie ID der Wissensdatenbank (Dynamisches Menü ID)',
	'cms_var_md_ads_type' => 'Anzeigen Typ',
	'cms_var_md_ads_type_explain' => 'Wähle den Anzeigen Typ (H = Horizontal, V = Vertikal, B = Box, 1 = klein, 2 = mittel, 3 = groß)',
	'cms_var_md_cat_id' => 'Kategorie um Bilder zu empfangen von',
	'cms_var_md_cat_id_explain' => '0 für alle Kategorien oder Eintragungen mit Komma abgegrenzt eingeben',
	'cms_var_md_col' => 'Spaltenanzahl',
	'cms_var_md_col_explain' => 'Wähle die Anzahl der Spalten.',
	'cms_var_md_news_cat_id' => 'Kategorien von der die News abgerufen werden sollen',
	'cms_var_md_news_cat_id_explain' => '0 für alle Kategorien oder Eintragungen mit Komma abgegrenzt eingeben',
	'cms_var_md_list_forum_id' => 'Kategorie aufgelistet werden',
	'cms_var_md_list_forum_id_explain' => '0 für alle Kategorien oder Eintragungen mit Komma abgegrenzt eingeben',
	'cms_var_md_display_not_visit' => 'Zeige Benutzer die noch nicht besucht haben',
	'cms_var_md_display_not_visit_explain' => 'Setze Häckchen bei den Benutzer die die Seite noch nicht besucht haben',
	'cms_var_md_events_num' => 'Anzahl der angezeigten Termine',
	'cms_var_md_events_num_explain' => 'Anzahl der Termine, die angezeigt werden sollen.',
	'cms_var_md_events_forums_id' => 'Foren IDs',
	'cms_var_md_events_forums_id_explain' => 'Gib die IDs der Foren (kommagetrennt) ein, die angezeigt werden sollten. (0 = Alle)',
	'cms_var_md_events_end' => 'Termin-Ende anzeigen',
	'cms_var_md_events_end_explain' => 'Wähle, ob das Termin-Ende angezeigt werden soll oder nicht.',
	'cms_var_md_flash_src' => 'Flash source file',
	'cms_var_md_flash_src_explain' => 'Name der Flash Datei',
	'cms_var_md_flash_id' => 'Flash ID',
	'cms_var_md_flash_id_explain' => 'Gib die ID für das HTML Element an (nur Kleinbuchstaben und keine Leerzeichen)',
	'cms_var_md_flash_w' => 'Breite',
	'cms_var_md_flash_w_explain' => 'Breite der Flash Datei',
	'cms_var_md_flash_h' => 'Höhe',
	'cms_var_md_flash_h_explain' => 'Höhe der Flash Datei',
	'cms_var_md_full_search_option_text' => 'Voller Suchwahl Text',
	'cms_var_md_full_search_option_text_explain' => 'Text als Standardauswahl anzeigen',
	'cms_var_md_gsearch_banner' => 'Suchseiten Banner',
	'cms_var_md_gsearch_banner_explain' => 'Banner der Website (die URL ohne http://)',
	'cms_var_md_gsearch_site' => 'Suchseite',
	'cms_var_md_gsearch_site_explain' => 'Webseite auf der die Suche ausgeführt wird (die URL ohne http://)',
	'cms_var_md_gsearch_style' => 'Stil',
	'cms_var_md_gsearch_style_explain' => 'Wähle zwischen Horizontal und Vertikal',
	'cms_var_md_gsearch_text' => 'Suchoption Text',
	'cms_var_md_gsearch_text_explain' => 'Der Text der als Standardoption angezeigt wird',
	'cms_var_md_hours_track_users' => 'Anzahl der Stunden in denen die Benutzer beobachtet werden',
	'cms_var_md_hours_track_users_explain' => '',
	'cms_var_md_ignore_auth_view' => 'Ignoriere Ansichtsberechtigung?',
	'cms_var_md_ignore_auth_view_explain' => 'Wenn dies aktiviert ist wird die Ansichtsberechtigung ignoriert (dies ist wichtig wenn du versteckte Foren benutzen willst mit "KEINER" als Ansichtsberechtigung)',
	'cms_var_md_links_code' => 'Links -> Code',
	'cms_var_md_links_code_explain' => 'zeige HTML code für deinen eigenen Link Button',
	'cms_var_md_links_own1' => 'Links -> Eigener (Oben)',
	'cms_var_md_links_own1_explain' => 'zeige deinen Link Button über den anderen Buttons',
	'cms_var_md_links_own2' => 'Links -> Eigener (Unten)',
	'cms_var_md_links_own2_explain' => 'zeige deinen Link Button unter den anderen Buttons',
	'cms_var_md_links_style' => 'Links -> Style',
	'cms_var_md_links_style_explain' => 'wähle Feste- oder Scroll-Anzeige',
	'cms_var_md_jumpbox_align' => 'Ausrichtung',
	'cms_var_md_jumpbox_align_explain' => 'Wähle die Ausrichtung',
	'cms_var_md_menu_id' => 'Menue-Block-ID',
	'cms_var_md_menu_id_explain' => 'Gib die ID des Menue-Blocks ein, den du zeigen möchtest (0 = standard).',
	'cms_var_md_menu_show_hide' => 'Zeige/Verberge Schalter',
	'cms_var_md_menu_show_hide_explain' => 'Aktiviere Zeige/Verberge Schalter um das Menu zu verbergen (es funktioniert nur auf der linken Seite beim GLOBALEN Block!!!).',
	'cms_var_md_news_number' => 'Anzahl der anzuzeigenden News',
	'cms_var_md_news_number_explain' => '',
	'cms_var_md_news_sort' => 'Zufällige oder neuste News?',
	'cms_var_md_news_sort_explain' => '',
	'cms_var_md_news_length' => 'Länge der News',
	'cms_var_md_news_length_explain' => 'Anzahl der anzuzeigenden Buchstaben',
	'cms_var_md_news_archive_type' => 'Zeige Archiv oder Kategorien?',
	'cms_var_md_news_archive_type_explain' => 'Wähle ob Archive oder Kategorien angezeigt werden sollen',
	'cms_var_md_news_images_width' => 'News Bild Breite',
	'cms_var_md_news_images_width_explain' => 'Wähle Bild Breite in Pixel oder Prozent',
	'cms_var_md_news_forum_id' => 'News Forum-ID(s)',
	'cms_var_md_news_forum_id_explain' => 'mit Komma abgegrenzt',
	'cms_var_md_news_length' => 'Länge der News',
	'cms_var_md_news_length_explain' => 'Anzahl der angezeigten Zeichen (gib 0 ein für alle)',
	'cms_var_md_news_posters_page_link' => 'Link zum Archiv',
	'cms_var_md_news_posters_page_link_explain' => 'Der Link zu der Seite die das News Archiv beinhaltet (z.B. <b>index.php</b>)',
	'cms_var_md_news_posters_sort' => 'Sortierung',
	'cms_var_md_news_posters_sort_explain' => 'Wähle die Sortierungsmethode',
	'cms_var_md_news_posters_avatar' => 'Avatare anzeigen',
	'cms_var_md_news_posters_avatar_explain' => '',
	'cms_var_md_num_new_downloads' => 'Neue Downloads',
	'cms_var_md_num_new_downloads_explain' => 'Anzahl der anzuzeigenden Neuen Downloads',
	'cms_var_md_num_news' => 'Anzahl der News im Portal',
	'cms_var_md_num_news_explain' => '',
	'cms_var_md_num_posts' => 'Anzahl der Beiträge im Portal',
	'cms_var_md_num_posts_explain' => 'Anzahl der Beiträge, die angezeigt werden',
	'cms_var_md_num_random_topics' => 'Anzahl der zufälligen Themen',
	'cms_var_md_num_random_topics_explain' => 'Anzahl der anzuzeigenden Themen',
	'cms_var_md_num_random_topics_ver' => 'Anzahl der zufälligen Themen',
	'cms_var_md_num_random_topics_ver_explain' => 'Anzahl der Themen, die angezeigt werden',
	'cms_var_md_num_recent_topics' => 'Anzahl der neuesten Themen',
	'cms_var_md_num_recent_topics_explain' => 'Anzahl der anzuzeigenden Themen',
	'cms_var_md_num_recent_topics_wide' => 'Anzahl der neuesten Themen',
	'cms_var_md_num_recent_topics_wide_explain' => 'Anzahl der anzuzeigenden Themen',
	'cms_var_md_num_top_downloads' => 'Top Downloads',
	'cms_var_md_num_top_downloads_explain' => 'Anzahl der anzuzeigenden Top Downloads',
	'cms_var_md_paypal_donate_link' => 'Spenden Link',
	'cms_var_md_paypal_donate_link_explain' => 'Link zur Spenden Seite',
	'cms_var_md_paypal_total_donors' => 'Insgesamt erhaltene Spenden anzeigen',
	'cms_var_md_paypal_total_donors_explain' => 'Insgesamt erhaltene Spenden',
	'cms_var_md_paypal_total_amount' => 'Insgesamt erhaltenen Spendenbetrag anzeigen',
	'cms_var_md_paypal_total_amount_explain' => 'Insgesamt erhaltener Spendenbetrag',
	'cms_var_md_pics_all' => 'Anzeige von welchen Foto-Galerien?',
	'cms_var_md_pics_all_explain' => '',
	'cms_var_md_pics_cols_number' => 'Spaltenanzahl',
	'cms_var_md_pics_cols_number_explain' => '',
	'cms_var_md_pics_number' => 'Anzahl der anzuzeigenden Bilder',
	'cms_var_md_pics_number_explain' => '',
	'cms_var_md_pics_rows_number' => 'Reihenanzahl',
	'cms_var_md_pics_rows_number_explain' => '',
	'cms_var_md_pics_slider' => 'Slideshow erstellen',
	'cms_var_md_pics_slider_explain' => 'Erstelle einen Slideshow-Block mit ausgewählten Bildern.',
	'cms_var_md_pics_sort' => 'Zufällige oder neuste Bilder?',
	'cms_var_md_pics_sort_explain' => '',
	'cms_var_md_poll_bar_length' => 'Umfrage Balken LängePoll Bar Length',
	'cms_var_md_poll_bar_length_explain' => 'verringern/vergrößern des Wertes der Umfrage Balken Länge',
	'cms_var_md_poll_forum_id' => 'Umfrage Forum-ID(s)',
	'cms_var_md_poll_forum_id_explain' => 'Forum-ID(s) durch Komma getrennt angeben',
	'cms_var_md_poll_topic_id' => 'Umfrage Beitrags-ID',
	'cms_var_md_poll_topic_id_explain' => 'Gib die Beitrags-ID ein, um eine spezielle Umfrage auszuwählen',
	'cms_var_md_poll_type' => 'Zufällige oder neuste Umfrage?',
	'cms_var_md_poll_type_explain' => 'wähle hier aus, ob du die neusten oder zufällige Umfragen anzeigen möchtest',
	'cms_var_md_posts_forum_id' => 'Beitrags Forum-ID(s)',
	'cms_var_md_posts_forum_id_explain' => 'mit Komma getrennt',
	'cms_var_md_posts_length' => 'Länge der Beiträge',
	'cms_var_md_posts_length_explain' => 'Anzahl der anzuzeigenden Buchstaben',
	'cms_var_md_posts_random' => 'Neueste oder Zufällige?',
	'cms_var_md_posts_random_explain' => 'Wähle neuste oder zufällige Themen',
	'cms_var_md_posts_show_portal' => 'Alle Themen oder nur ausgewählte?',
	'cms_var_md_posts_show_portal_explain' => 'Wähle alle Themen oder nur die mit "Im Portal anzeigen" aus',
	'cms_var_md_ran_att_forums_excl' => 'Zufällige Anhänge ausschließende Forum-ID(s)',
	'cms_var_md_ran_att_forums_excl_explain' => 'mit Komma getrennt; lasse dies frei für keine Ausschlüsse',
	'cms_var_md_ran_att_forums_incl' => 'Zufällige Anhänge einschließende Forum-ID(s)',
	'cms_var_md_ran_att_forums_incl_explain' => 'mit Komma getrennt; lasse dies frei für alle Foren',
	'cms_var_md_ran_att_height' => 'Zufällige Anhänge Max Höhe',
	'cms_var_md_ran_att_height_explain' => 'Wenn die Höhe > die Breite, wird dies als Höhe bei der Verwendung des BBCode IMG Tags benutzt',
	'cms_var_md_ran_att_max' => 'Zufällige Anhänge Max Dateien',
	'cms_var_md_ran_att_max_explain' => 'Maximale Anzahl der Dateien',
	'cms_var_md_ran_att_width' => 'Zufällige Anhänge Max Breite',
	'cms_var_md_ran_att_width_explain' => 'Wenn die Breite > die Höhe, wird dies als Breite bei der Verwendung des BBCode IMG Tags benutzt',
	'cms_var_md_random_topics_style' => 'Zufällige Themen Style',
	'cms_var_md_random_topics_style_explain' => 'wähle Feste oder Scroll Anzeige',
	'cms_var_md_random_topics_forums' => 'Forum-ID(s)',
	'cms_var_md_random_topics_forums_explain' => 'Forum-ID(s) die verwendet werden sollen (0 = alle)',
	'cms_var_md_random_topics_ver_forums' => 'Forum-ID(s)',
	'cms_var_md_random_topics_ver_forums_explain' => 'Forum-ID(s) die verwendet werden sollen (0 = alle)',
	'cms_var_md_recent_articles_style' => 'Neue Artikel Style',
	'cms_var_md_recent_articles_style_explain' => 'wähle Feste oder Scroll Anzeige',
	'cms_var_md_recent_topics_style' => 'Neue Themen Style',
	'cms_var_md_recent_topics_style_explain' => 'wähle Feste oder Scroll Anzeige',
	'cms_var_md_recent_topics_wide_style' => 'Neue Themen Style',
	'cms_var_md_recent_topics_wide_style_explain' => 'wähle Feste- oder Scroll-Anzeige',
	'cms_var_md_rss_feeder' => 'RSS-Feed Adresse',
	'cms_var_md_rss_feeder_explain' => 'Gib die Adresse des RSS-Feeds ein. (z.B. http://www.icyphoenix.com/rss.php)',
	'cms_var_md_rss_title' => 'RSS-Feed Titel',
	'cms_var_md_rss_title_explain' => 'Gib den Titel des RSS-Feeds ein (z.B. Icy Phoenix)',
	'cms_var_md_rss_style' => 'RSS Block Style',
	'cms_var_md_rss_style_explain' => 'Wähle zwischen horizontal oder vertikal aus.',
	'cms_var_md_rss_scroll' => 'RSS Block Scroll',
	'cms_var_md_rss_scroll_explain' => 'Wähle zwischen feststehend oder scrollend aus.',
	'cms_var_md_show_background' => 'Kategorie-Hintergrund anzeigen?',
	'cms_var_md_show_background_explain' => 'Wähle JA wenn du möchtest das die Kategorien einen Hintergrund erhalten sollen.',
	'cms_var_md_show_cats_icon' => 'Zeige Kategorie Icons?',
	'cms_var_md_show_cats_icon_explain' => 'Wähle JA wenn du möchtest das die Kategorie Icons angezeigt werden sollen.',
	'cms_var_md_show_desc' => 'Link-Beschreibungen anzeigen?',
	'cms_var_md_show_desc_explain' => 'Wähle JA wenn du möchtest das die Link-Beschreibungen mit einem Maus-Hover Effekt angezeigt werden sollen.',
	'cms_var_md_show_links_icon' => 'Zeige Links Icons?',
	'cms_var_md_show_links_icon_explain' => 'Wähle JA wenn du möchtest das die Links Icons angezeigt werden sollen.',
	'cms_var_md_show_sep_icon' => 'Separate Icons anzeigen?',
	'cms_var_md_show_sep_icon_explain' => 'Wähle JA wenn du möchtest das separate Icons angezeigt werden sollen.',
	'cms_var_md_show_title' => 'Kategorie-Namen anzeigen?',
	'cms_var_md_show_title_explain' => 'Wähle JA wenn die Kategorie-Namen angezeigt werden sollen.',
	'cms_var_md_single_post_auto_id' => 'Erhalte ID von Adresse',
	'cms_var_md_single_post_auto_id_explain' => 'Bei Aktivierung wird die ID direkt von der Adresse bezogen (post_id=XXX)',
	'cms_var_md_single_post_id' => 'Beitrags ID',
	'cms_var_md_single_post_id_explain' => 'Gib die Beitrags ID ein',
	'cms_var_md_single_post_retrieve' => 'Einzel Beitrag abrufen',
	'cms_var_md_single_post_retrieve_explain' => 'Bei Aktivierung wird nur ein Beitrag angezeigt, der weiter unten bestimmt wurde, alle anderen Einstellungen werden ignoriert',
	'cms_var_md_scroll_delay' => 'Scroll Verzögerung',
	'cms_var_md_scroll_delay_explain' => 'Größere Einträge bedeuten langsameres scrollen',
	'cms_var_md_search_option_text' => 'Suchfeld Beschreibung',
	'cms_var_md_search_option_text_explain' => 'Suchfeld Beschreibung',
	'cms_var_md_show_avatars' => 'Avatare anzeigen',
	'cms_var_md_show_avatars_explain' => '',
	'cms_var_md_tla_display' => 'Horizontal / Vertikal',
	'cms_var_md_tla_display_explain' => 'Wähle aus, ob Sponsoren horizontal oder vertikal angezeigt werden sollen.',
	'cms_var_md_tla_inventory_key' => 'Text Link Ads Inventory Key',
	'cms_var_md_tla_inventory_key_explain' => 'Insert the inventory key for this page',
	'cms_var_md_tla_xml_filename' => 'Text Link Ads XML Filename',
	'cms_var_md_tla_xml_filename_explain' => 'Insert the full XML filename which should be located in <b>files/</b> folder (example: <i>local_XXXXXX.xml</i>)',
	'cms_var_md_total_articles' => 'Anzahl der neuen Artikel',
	'cms_var_md_total_articles_explain' => 'Anzahl der anzuzeigenden neuen Artikel',
	'cms_var_md_total_poster' => 'Anzahl der Top Poster',
	'cms_var_md_total_poster_explain' => '',
	'cms_var_md_wordgraph_count' => 'Aktiviere Wort Zählungen',
	'cms_var_md_wordgraph_count_explain' => 'Zeige die Gesamtanzahl der Wörter neben jedem Wort',
	'cms_var_md_wordgraph_words' => 'Maximale Wörter',
	'cms_var_md_wordgraph_words_explain' => 'Wähle die Anzahl der maximal anzuzeigenden Wörter',
	'cms_var_plugin_guestbook_id' => 'Gästebuch ID',
	'cms_var_plugin_guestbook_id_explain' => 'Enter guestbook ID you want to show',

	'cms_option_All_Topics' => 'Alle Themen',
	'cms_option_Alphabetical' => 'Alphabetisch',
	'cms_option_Archive' => 'Archiv',
	'cms_option_Categories' => 'Kategorien',
	'cms_option_News' => 'News',
	'cms_option_Newest' => 'Neueste',
	'cms_option_Public' => 'Öffentlich',
	'cms_option_Public_and_Personal' => 'Öffentlich und Persönlich',
	'cms_option_Random' => 'Zufällige',
	'cms_option_Recent' => 'Neuesten',
	'cms_option_Scroll' => 'Scrollend',
	'cms_option_Static' => 'Feststehend',
	'cms_option_Horizontal' => 'Horizontal',
	'cms_option_Vertical' => 'Vertikal',
	'cms_option_Show_In_Portal' => 'Im Portal anzeigen',
	'cms_option_Yes' => 'Ja',
	'cms_option_No' => 'Nein',
	'cms_option_Left' => 'Links',
	'cms_option_Center' => 'Center',
	'cms_option_Right' => 'Rechts',

	'cms_value_All_Topics' => '0',
	'cms_value_Archive' => '0',
	'cms_value_Categories' => '1',
	'cms_value_Newest' => '0',
	'cms_value_Public' => '0',
	'cms_value_Public_and_Personal' => '1',
	'cms_value_Random' => '1',
	'cms_value_Recent' => '0',
	'cms_value_Show_In_Portal' => '1',
	)
);

?>