<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* Lopalong
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

$lang = array_merge($lang, array (
  'Title_ads' => 'Ads',
  'Title_album' => 'Album',
  'Title_birthdays' => 'Sz�let�snapok',
  'Title_center_downloads' => 'Let�lt�sek',
  'Title_clock' => 'Clock',
  'Title_donate' => 'Adom�nyok',
  'Title_dyn_menu' => 'Gyorslinkek',
  'Title_flash_news' => 'Flash News',
  'Title_forum' => 'H�rek',
  'Title_forum_attach' => 'H�rek',
  'Title_forum_list' => 'F�rumlista',
  'Title_global_header' => 'Global Header',
  'Title_global_header_simple' => 'Global Header Simple',
  'Title_gsearch' => 'Google keres�s',
  'Title_gsearch_hor' => 'Google Search Horizontal',
  'Title_kb' => 'Tud�sb�zis',
  'Title_links' => 'Linkek',
  'Title_menu' => 'Oldalnavig�ci�',
  'Title_nav_header' => 'Header',
  'Title_nav_links' => 'Oldalt�rk�p',
  'Title_nav_logo' => 'Logo',
  'Title_news' => 'H�rek',
  'Title_news_archive' => 'Arch�vum',
  'Title_news_posters' => 'News Posters',
  'Title_online_users' => 'Online figyel�',
  'Title_online_users2' => 'Online figyel�',
  'Title_paypal' => 'PayPal',
  'Title_poll' => 'Szavaz�s',
  'Title_random_attach' => 'V�letlen csatolm�ny',
  'Title_random_topics' => 'V�letlen t�ma',
  'Title_random_topics_ver' => 'V�letlen t�ma',
  'Title_random_user' => 'Random User',
  'Title_recent_articles' => 'Legut�bbi cikkek',
  'Title_recent_topics' => 'Legut�bbi t�m�k',
  'Title_recent_topics_wide' => 'Legut�bbi t�m�k',
  'Title_referers' => 'Hivatkoz�k',
  'Title_rss' => 'RSS',
  'Title_search' => 'Keres�s',
  'Title_sec_menu' => 'Extra Men�',
  'Title_shoutbox' => '<a href="shoutbox_max.?sid=">�zen�fal</a>',
  'Title_staff' => 'Staff',
  'Title_statistics' => 'Statisztik�k',
  'Title_style' => 'St�lus',
  'Title_top_downloads' => 'Top let�lt�sek',
  'Title_top_posters' => 'Top hozz�sz�l�k',
  'Title_user_block' => 'Felhaszn�l�-blokk',
  'Title_users_visited' => 'Akt�v felhaszn�l�k',
  'Title_visit_counter' => 'L�togat�s sz�ml�l�',
  'Title_welcome' => '�dv�zl�nk',
  'Title_wordgraph' => 'Tagok',
  'Advanced_GSearch' => 'R�szletes Google keres�s',
  'Advanced_search' => 'R�szletes keres�s',
  'Album' => 'Album',
  'All_News_Archives' => 'Minden �j arch�vum',
  'All_News_Categories' => 'Minden �j kateg�ria',
  'Articles' => 'Cikkek',
  'Articles_time' => 'Bek�ldte',
  'Articles_options' => 'Opci�k',
  'Article_Reply' => 'Hozz�sz�l�s bek�ld�se',
  'Article_Print' => 'Cikk nyomtat�sa',
  'Article_Email' => 'Email egy bar�tnak',
  'Censor' => 'Cenzor',
  'Click_to_join_chat' => 'Csatlakoz�s a chat-hez',
  'Comments' => 'Hozz�sz�l�s',
  'Credits' => 'K�sz�net',
  'Day_users' => '%d regisztr�lt l�togat� az elm�lt %d �r�ban:',
  'Disable_BBCode_post' => 'A BBCode letiltva ebben a hozz�sz�l�sban',
  'Disable_HTML_post' => 'A HTML letiltva ebben a hozz�sz�l�sban',
  'Dls' => 'Let�lt�sek',
  'Donate_Funds' => 'Adom�nyoz�s',
  'GSearch' => 'Keres�s',
  'GSearch2' => 'Google keres�s:',
  'GSearch_At' => 'Keres�s',
  'Guest' => 'Vend�g',
  'Guest_user_total' => '%d vend�g',
  'Guest_users_total' => '%d vend�gek',
  'Guest_users_zero_total' => '0 vend�g',
  'Hidden_user_total' => '%d rejtett �s ',
  'Hidden_users_total' => '%d rejtett �s ',
  'Hidden_users_zero_total' => '0 rejtett �s ',
  'How_Many_Chatters' => '<b>%d</b> felhaszn�l� van a cseveg�ben.',
  'Kb_name' => 'Tud�sb�zis',
  'IP_info' => 'IP Inform�ci�',
  'Login_to_join_chat' => 'K�rlek jelentkezz be a f�rumba, hogy haszn�lhasd a chat-et',
  'Login_to_vote' => 'Be kell jelentkezned a szavaz�shoz',
  'Lookup_IP' => 'IP c�m felold�sa',
  'New_donations' => '�j adom�nyok',
  'New_downloads' => '�j let�lt�sek',
  'News_And' => '�s',
  'News_Archives' => '�j arch�vumok',
  'News_Categories' => '�j kateg�ri�k',
  'News_Cats' => '�j kateg�ri�k',
  'News_Comments' => 'felhaszn�l� komment�lta',
  'News_Email' => 'E-Mail err�l a t�m�r�l',
  'News_Print' => 'T�ma nyomtat�sa',
  'News_Reply' => 'V�lasz erre a h�rre',
  'News_Summary' => 'Ezt a h�rt eddig',
  'News_Views' => 'felhaszn�l� l�tta',
  'No_News_Cats' => 'Bocsi, nincs �j el�rhet� kateg�ria!',
  'No_Pics' => 'Nincsenek k�pek',
  'No_poll' => 'Jelenleg nincs szavaz�s',
  'No_topics_found' => 'Nem tal�lhat� t�ma.',
  'None' => 'Nincs',
  'Not_day_users' => '%d regisztr�lt felhaszn�l� <span style="color:red">NEM</span> l�togatta meg az ut�bbi %d �r�ban:',
  'Not_found' => 'Nem tal�lhat� csatolm�ny.',
  'Not_rated' => 'Nem �rt�kelt.',
  'Online_user_total' => '�sszesen <b>%d</b> felhaszn�l�b�l online:',
  'Online_users_total' => '�sszesen <b>%d</b> felhaszn�l�b�l online:',
  'Online_users_zero_total' => '�sszesen <b>0</b> felhaszn�l�b�l online:',
  'Other_IP_this_user' => 'Ezen IP c�mekr�l k�ld�tt be hozz�sz�l�st ez a felhaszn�l�',
  'Pic_Title' => 'K�pc�m',
  'Poll' => 'Szavaz�s',
  'Post_your_comment' => 'Hozz�sz�l�s bek�ld�se',
  'Posted' => 'Bek�ld�tt',
  'POSTED_ON' => 'on',
  'Poster' => 'Bek�ld�',
  'Posts' => 'Hozz�sz�l�sok',
  'Rating' => ' �rt�kelt',
  'Read_Full' => 'Teljes elolvas�sa',
  'Record_online_users' => 'A legt�bb online felhaszn�l� (<b>%s</b>) %s-�n volt',
  'Reg_user_total' => '%d regisztr�lt, ',
  'Reg_users_total' => '%d regisztr�lt, ',
  'Reg_users_zero_total' => '0 regisztr�lt, ',
  'Register_new_account' => 'M�g nincs hozz�f�r�sed?<br />%sRegisztr�lj%s egyet INGYEN',
  'Registered_users' => 'Regisztr�lt felhaszn�l�k:',
  'Remember_me' => 'Automatikus bejelentkez�s',
  'Save_Topic' => 'T�ma elment�se egy f�jlba',
  'Shout_refresh' => 'Friss�t�s',
  'Shout_text' => 'Te sz�veged',
  'Shoutbox_date' => 'D G:i \\�\\r\\t\\a ',
  'SH_Visit_counter_statement' => 'Ezt az oldalt <b>%d</b> l�togat� l�tta %s �ta',
  'Tell_Friend' => 'E-mail-ben elk�ld�m egy bar�tomnak',
  'This_posts_IP' => 'Hozz�sz�l� IP c�me',
  'Top_downloads' => 'Top let�lt�sek',
  'Total_votes' => '�sszes szavazat',
  'Users_this_IP' => 'A felhaszn�l�k ezekr�l az IP c�mekr�l sz�ltak hozz�',
  'View' => 'Megn�z',
  'View_comments' => 'Megjegyz�sek megn�z�se',
  'View_complete_list' => 'Teljes lista megn�z�se',
  'Visit_counter' => 'L�togat�sz�ml�l�',
  'Visit_counter_statement' => 'Ezen a weboldalon <b>%d</b> lapot n�ztek meg %s �ta',
  'Vote' => 'Szavaz�s',
  'donated_by' => 'adom�nyozta:',
  'search' => 'Keres�s',
  'search2' => 'Keres�s:',
  'search_at' => 'Keres�s itt:',
  'total_topics' => ' <b>%s</b> t�m�b�l',
  'cms_var_kb_cat_id' => 'Kateg�ria ID',
  'cms_var_kb_cat_id_explain' => 'V�lassz egy kateg�ria ID-t a TB-b�l (dinamikus men� ID)',
  'cms_var_md_ads_type' => 'Ads type',
  'cms_var_md_ads_type_explain' => 'Select the ad type (H = Horizontal, V = Vertical, B = Box, 1 = Small, 2 = Medium, 3 = Large)',
  'cms_var_md_cat_id' => 'Vkit�l fogadott k�pek kateg�ria:',
  'cms_var_md_cat_id_explain' => 'Adj meg 0-�t minden kateg�ria meghat�roz�s�hoz, vagy vessz�vel elv�lasztva sorold fel a k�v�nt kateg�ri�kat',
  'cms_var_md_col' => 'Oszlopok sz�ma',
  'cms_var_md_col_explain' => 'Az indexoszlopok sz�ma',
  'cms_var_md_news_cat_id' => 'Vkit�l fogadott kateg�ri�k:',
  'cms_var_md_news_cat_id_explain' => 'Adj meg 0-�t minden kateg�ria meghat�roz�s�hoz, vagy vessz�vel elv�lasztva sorold fel a k�v�nt kateg�ri�kat',
  'cms_var_md_list_forum_id' => 'List�zott kateg�ri�k',
  'cms_var_md_list_forum_id_explain' => 'Adj meg 0-�t minden kateg�ria meghat�roz�s�hoz, vagy vessz�vel elv�lasztva sorold fel a k�v�nt kateg�ri�kat',
  'cms_var_md_display_not_visit' => 'Nem idel�togat� felhaszn�l�k megjelen�t�se',
  'cms_var_md_display_not_visit_explain' => 'Azon felhaszn�l�k megjelen�t�se, akik nem l�togatt�k meg ezt az oldalt',
  'cms_var_md_full_search_option_text' => 'Teljes keres�s opci�j�nak sz�vege',
  'cms_var_md_full_search_option_text_explain' => 'Alap�rtelmezett opci�k�nt megjelen�tett sz�veg',
  'cms_var_md_gsearch_banner' => 'Search site banner',
  'cms_var_md_gsearch_banner_explain' => 'Banner of the site (the url without http://)',
  'cms_var_md_gsearch_site' => 'Search site',
  'cms_var_md_gsearch_site_explain' => 'Site where the search should be performed (the url without http://)',
  'cms_var_md_gsearch_style' => 'Search style',
  'cms_var_md_gsearch_style_explain' => 'Choose between horizontal and vertical',
  'cms_var_md_gsearch_text' => 'Search option text',
  'cms_var_md_gsearch_text_explain' => 'Text displayed as the default option',
  'cms_var_md_hours_track_users' => 'Number of hours to track users',
  'cms_var_md_hours_track_users_explain' => '',
  'cms_var_md_ignore_auth_view' => 'Ignore auth view permission?',
  'cms_var_md_ignore_auth_view_explain' => 'Enabling this forums view permissions will be ignored (this is important if you want to use hidden forums with NONE as view permission)',
  'cms_var_md_links_code' => 'Links -> Code',
  'cms_var_md_links_code_explain' => 'Show HTML for your own link button',
  'cms_var_md_links_own1' => 'Links -> Own (Top)',
  'cms_var_md_links_own1_explain' => 'Show your own link button above other buttons',
  'cms_var_md_links_own2' => 'Links -> Own (Bottom)',
  'cms_var_md_links_own2_explain' => 'Show your own link button below other buttons',
  'cms_var_md_links_style' => 'Links -> Style',
  'cms_var_md_links_style_explain' => 'Choose between static and scrolling',
  'cms_var_md_jumpbox_align' => 'Alignment',
  'cms_var_md_jumpbox_align_explain' => 'Select jumpbox alignment',
  'cms_var_md_menu_id' => 'Menu block ID',
  'cms_var_md_menu_id_explain' => 'Enter the ID of the menu block you want to show (0 = default).',
  'cms_var_md_menu_show_hide' => 'Show/Hide Switch',
  'cms_var_md_menu_show_hide_explain' => 'Enable Show/Hide switch to hide menu (it will work only on left GLOBAL block!!!).',
  'cms_var_md_news_number' => 'Number Of News To Display',
  'cms_var_md_news_number_explain' => '',
  'cms_var_md_news_sort' => 'Random Or Newest News?',
  'cms_var_md_news_sort_explain' => '',
  'cms_var_md_news_length' => 'Length of news',
  'cms_var_md_news_length_explain' => 'Number of characters displayed (enter 0 for all)',
  'cms_var_md_news_archive_type' => 'Show Archive Or Categories?',
  'cms_var_md_news_archive_type_explain' => 'Choose if you want to show Archives or Categories',
  'cms_var_md_news_images_width' => 'News Image Width',
  'cms_var_md_news_images_width_explain' => 'Choose image width in pixels or percentage',
  'cms_var_md_news_forum_id' => 'News Forum ID(s)',
  'cms_var_md_news_forum_id_explain' => 'Comma delimited',
  'cms_var_md_news_posters_page_link' => 'Page Link',
  'cms_var_md_news_posters_page_link_explain' => 'The link to the page which contains news archive (i.e. <b>index.php</b>)',
  'cms_var_md_news_posters_sort' => 'Sort',
  'cms_var_md_news_posters_sort_explain' => 'Select the sort method',
  'cms_var_md_news_posters_avatar' => 'Show Avatars',
  'cms_var_md_news_posters_avatar_explain' => '',
  'cms_var_md_num_new_downloads' => 'New Downloads',
  'cms_var_md_num_new_downloads_explain' => 'Number of new downloads displayed',
  'cms_var_md_num_news' => 'Number of news on portal',
  'cms_var_md_num_news_explain' => '',
  'cms_var_md_num_posts' => 'Number of posts',
  'cms_var_md_num_posts_explain' => 'Number of posts to be displayed',
  'cms_var_md_num_random_topics' => 'Number of random topics',
  'cms_var_md_num_random_topics_explain' => 'Number of topics displayed',
  'cms_var_md_num_random_topics_ver' => 'Number of random topics',
  'cms_var_md_num_random_topics_ver_explain' => 'number of topics displayed',
  'cms_var_md_num_recent_topics' => 'Number of recent topics',
  'cms_var_md_num_recent_topics_explain' => 'Number of topics displayed',
  'cms_var_md_num_recent_topics_wide' => 'Number Of Recent Topics',
  'cms_var_md_num_recent_topics_wide_explain' => 'Number of topics displayed',
  'cms_var_md_num_top_downloads' => 'Top Downloads',
  'cms_var_md_num_top_downloads_explain' => 'Number of top downloads displayed',
  'cms_var_md_pics_all' => 'Display From What Galleries?',
  'cms_var_md_pics_all_explain' => '',
  'cms_var_md_pics_cols_number' => 'Number Of Columns',
  'cms_var_md_pics_cols_number_explain' => '',
  'cms_var_md_pics_number' => 'Number Of Images To Display',
  'cms_var_md_pics_number_explain' => '',
  'cms_var_md_pics_rows_number' => 'Number Of Rows',
  'cms_var_md_pics_rows_number_explain' => '',
  'cms_var_md_pics_sort' => 'Random Or Newest Pics?',
  'cms_var_md_pics_sort_explain' => '',
  'cms_var_md_poll_bar_length' => 'Poll Bar Length',
  'cms_var_md_poll_bar_length_explain' => 'Decrease/increase the value for 1 vote bar length',
  'cms_var_md_poll_forum_id' => 'Poll Forum ID(s)',
  'cms_var_md_poll_forum_id_explain' => 'Comma delimited',
  'cms_var_md_poll_type' => 'Random Or Newest Poll?',
  'cms_var_md_poll_type_explain' => 'Choose if you want to show latest or random',
  'cms_var_md_posts_forum_id' => 'Posts Forum ID(s)',
  'cms_var_md_posts_forum_id_explain' => 'Comma delimited',
  'cms_var_md_posts_length' => 'Length of posts',
  'cms_var_md_posts_length_explain' => 'Number of characters displayed',
  'cms_var_md_posts_random' => 'Recent or random?',
  'cms_var_md_posts_random_explain' => 'Select recent or random topics',
  'cms_var_md_posts_show_portal' => 'All topics or only marked?',
  'cms_var_md_posts_show_portal_explain' => 'Select all topics or only marked with "Show in Home Page"',
  'cms_var_md_ran_att_forums_excl' => 'Random Attach Exclude Forum ID(s)',
  'cms_var_md_ran_att_forums_excl_explain' => 'Comma delimited; leave blank for no exclusions',
  'cms_var_md_ran_att_forums_incl' => 'Random Attach Include Forum ID(s)',
  'cms_var_md_ran_att_forums_incl_explain' => 'Comma delimited; leave blank for all forums',
  'cms_var_md_ran_att_height' => 'Random Attach Max Height',
  'cms_var_md_ran_att_height_explain' => 'When the height > the width, this will be set as height in the img tag',
  'cms_var_md_ran_att_max' => 'Random Attach Max Files',
  'cms_var_md_ran_att_max_explain' => 'Maximum number of files to return',
  'cms_var_md_ran_att_width' => 'Random Attach Max Width',
  'cms_var_md_ran_att_width_explain' => 'When the width > the height, this will be set as width in the img tag',
  'cms_var_md_random_topics_style' => 'Random Topics Style',
  'cms_var_md_random_topics_style_explain' => 'Choose between static and scrolling',
  'cms_var_md_random_topics_forums' => 'Forum IDs',
  'cms_var_md_random_topics_forums_explain' => 'IDs of the forums to be processed (0 = all)',
  'cms_var_md_random_topics_ver_forums' => 'Forum IDs',
  'cms_var_md_random_topics_ver_forums_explain' => 'IDs of the forums to be processed (0 = all)',
  'cms_var_md_recent_articles_style' => 'Recent Articles Style',
  'cms_var_md_recent_articles_style_explain' => 'Choose between static and scrolling',
  'cms_var_md_recent_topics_style' => 'Recent Topics Style',
  'cms_var_md_recent_topics_style_explain' => 'Choose between static and scrolling',
  'cms_var_md_recent_topics_wide_style' => 'Recent Topics Style',
  'cms_var_md_recent_topics_wide_style_explain' => 'Choose between static and scrolling',
  'cms_var_md_rss_feeder' => 'RSS Feed Address',
  'cms_var_md_rss_feeder_explain' => 'Enter the address of the RSS feed (i.e. http://www.icyphoenix.com/rss.php)',
  'cms_var_md_rss_title' => 'RSS Feed Title',
  'cms_var_md_rss_title_explain' => 'Enter the title of the RSS feed (i.e. Icy Phoenix)',
  'cms_var_md_rss_style' => 'RSS Block Style',
  'cms_var_md_rss_style_explain' => 'Choose between horizontal and vertical',
  'cms_var_md_rss_scroll' => 'RSS Block Scroll',
  'cms_var_md_rss_scroll_explain' => 'Choose between static and scrolling',
  'cms_var_md_show_background' => 'Show Cats Background?',
  'cms_var_md_show_background_explain' => 'Select YES if you want to show cats background',
  'cms_var_md_show_cats_icon' => 'Show Cats Icons?',
  'cms_var_md_show_cats_icon_explain' => 'Select YES if you want to show cats icons',
  'cms_var_md_show_desc' => 'Show Links Descriptions?',
  'cms_var_md_show_desc_explain' => 'Select YES if you want to show links descriptions with mousehover effect',
  'cms_var_md_show_links_icon' => 'Show Links Icons?',
  'cms_var_md_show_links_icon_explain' => 'Select YES if you want to show links icons',
  'cms_var_md_show_sep_icon' => 'Show Separator Icons?',
  'cms_var_md_show_sep_icon_explain' => 'Select YES if you want to show separator icons',
  'cms_var_md_show_title' => 'Show Cats Title?',
  'cms_var_md_show_title_explain' => 'Select YES if you want to show cats title',
  'cms_var_md_single_post_auto_id' => 'Get ID From Address',
  'cms_var_md_single_post_auto_id_explain' => 'Enabling this will get the ID directly from address (post_id=XXX)',
  'cms_var_md_single_post_id' => 'Posts ID',
  'cms_var_md_single_post_id_explain' => 'Enter post ID',
  'cms_var_md_single_post_retrieve' => 'Retrieve Single Post',
  'cms_var_md_single_post_retrieve_explain' => 'Enabling this only one post will be shown, the one specified below, all other settings will be ignored',
  'cms_var_md_scroll_delay' => 'Scroll delay',
  'cms_var_md_scroll_delay_explain' => 'Higher values means slower scroll',
  'cms_var_md_search_option_text' => 'Search Field Description',
  'cms_var_md_search_option_text_explain' => 'Search field description',
  'cms_var_md_show_avatars' => 'Show Avatars',
  'cms_var_md_show_avatars_explain' => '',
  'cms_var_md_total_articles' => 'Number of Recent Articles',
  'cms_var_md_total_articles_explain' => 'Number of articles shown',
  'cms_var_md_total_poster' => 'Number Of Top Posters',
  'cms_var_md_total_poster_explain' => '',
  'cms_var_md_wordgraph_count' => 'Enable Tags Counts',
  'cms_var_md_wordgraph_count_explain' => 'Display the total number of tags next to each word',
  'cms_var_md_wordgraph_words' => 'Maximum Tags',
  'cms_var_md_wordgraph_words_explain' => 'Select the maximum number of tags to display',
  'cms_option_All_Topics' => 'All Topics',
  'cms_option_Alphabetical' => 'Alphabetical',
  'cms_option_Archive' => 'Arch�v',
  'cms_option_Categories' => 'Categories',
  'cms_option_News' => 'News',
  'cms_option_Newest' => 'Newest',
  'cms_option_Public' => 'Public',
  'cms_option_Public_and_Personal' => 'Public and Personal',
  'cms_option_Random' => 'V�letlen',
  'cms_option_Recent' => 'Recent',
  'cms_option_Scroll' => 'Scroll',
  'cms_option_Static' => 'Static',
  'cms_option_Horizontal' => 'Horizontal',
  'cms_option_Vertical' => 'Vertical',
  'cms_option_Show_In_Portal' => 'Show in Home Page',
  'cms_option_Yes' => 'Igen',
  'cms_option_No' => 'Nem',
  'cms_option_Left' => 'Balra',
  'cms_option_Center' => 'K�z�pre',
  'cms_option_Right' => 'Jobbra',
  'cms_value_All_Topics' => '0',
  'cms_value_Archive' => '0',
  'cms_value_Categories' => '1',
  'cms_value_Newest' => '0',
  'cms_value_Public' => '0',
  'cms_value_Public_and_Personal' => '1',
  'cms_value_Random' => '1',
  'cms_value_Recent' => '0',
  'cms_value_Show_In_Portal' => '1',
  'ON' => 'Be',
  'Shout_censor' => 'sor elt�vol�tva!',
))
?>