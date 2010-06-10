<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   ���������� �� �������: ��������� �������(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
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

$lang = array_merge($lang, array(
// MG CMS - BEGIN
	'CMS_WELCOME' => '����� ���������� � Icy Phoenix',
	'BP_Title' => '��� ������� ������',
 'BP_Explain' => '�������, ������������ ��� ������� ������� ������, ������� ����� �������������� � ��������� �����. �������� �� ��������� ������� - \'header \', \'footer \', \'right \', \'left \'� \'centre \'. ��� ������� ������������� ����� ����������, ������������ ��� ������������ �������� �����. ������ ������������ ������� �� �������� ����� ������ ���� ��������� �����. ������� �������, ������� �� �������� ������������� � ��������� ����� ����������, �� ����� ���������� � �������� �����. ������ ������� ���� ������� � ������ ������ ���� ����������� �� �������� �����. ',
 'BP_Position' => '������ Position',
 'BP_Key' => '������� ���� �������',
 'BP_Layout' => '�������� �����',
 'BP_Add_Position' => '������� ����� �������',
 'No_bp_selected' => '������� ������� ������ ��� ����, ����� �������������',
 'BP_Edit_Position' => '������� ����� ���������',
 'Must_enter_bp' => '�� ������ ������ ������� ���� �������, ��������������� ������ � �������� �����',
 'BP_updated' => '������� ����������� �������',
 'BP_added' => '������� ������� �������',
 'Click_return_bpadmin' => '������� %s�����%s, ����� ������������ � ����������������� ������� ������',
 'BP_removed' => '������� ������� ������',
 'Portal_wide' => '���������� �����',

	'No_layout_selected' => '��� ��������� ������� ����� ��� �������������',
 'Layout_Title' => '�������� �����',
 'Layout_Explain' => '���������, ������������ ��� ������� ���������� ����� ���������� ��� ����� ������� �����. ������������� �������� ����� ����� ������������ �� �� ����� ����� ����������. ��������� ���� ������� ����� ���������� ������ ��������� ������� � �������� ����� ���������� ��� ����� ��������� ������� ������. ��� �� ��������� ������� �������� �� ��������� �������� �����. �������� �������� ����� ����� ������� ��������������� ������� ������� ��� ��� �������� � ���� ������, ����������� �� ���. �� ������ ����� ������������� �����, ����������� �� ������ ��������, � ������� ����� �������� �� ������ ����� ���� � ����� ���������� ��������� (���� ��� ������ ��������� ���, �� ������ ������� �������� ����� ��������, ��������� <b> mypage.php </b>).',
 'Layout_Special_Explain' => '���������, ������������ ��� ������� ����� ��� ����������� ������� ������ ����� (�� ����: �����, ���� �������������, memberlist, ��������, ������, � �.�.).',
 'Layout_Name' => '��������',
 'Layout_Template' => '���� �������',
 'Layout_Edit' => '�������� ����� ��������������',
 'Layout_Page' => '������������� ��������',
 'Layout_View' => '�������� ����',
 'Layout_Edit_Perm' => '����������� ����������',
 'Layout_Global_Blocks' => '���������� ���������� ������',
 'Layout_Page_Nav' => '���� ������������ �������� (������)',
 'Must_enter_layout' => '�� ������ ������ ��� � ���� �������',
 'Layout_updated' => '����������� �������� �����',
 'Click_return_layoutadmin' => '������� %s�����%s, ����� ���������� � ����� ����������������� ��������',
 'Layout_added' => '�������� ����� ���������',
 'Layout_removed' => '��������� �������� �����',
 'Layout_Add' => '������� �������� �����',
 'Layout_BP_added' => '��������� ���� ������������ ����� ����������: ������� ���� �������, ������������� �����������',
 'Layout_default' => '�������� �� ���������',
 'Layout_make_default' => '������ �������� �� ���������',

	'Blocks_Title' => '���������� �������',
	'Blocks_Explain' => '��������, �������������, ������� � ����������� ����� ��� ������ ��������� �������� �����. ������� ������ ������ ������������ ��� ������� �������� ������������ �����. ���� �� ������ ��������, ��� ����� ������ ��������� (� BBCodes ��� HTML), �� �� ������ ������� ������� ���� � ����� ���, \'ll �������������� � �������� ���������. ��������� ��������/�������������� ������ ������� ����� ���� �������: ������, ��� �� ������ � ��������� ������� ����� ��������� ��������� ��� �����, � ������ ��������, ��� �� ������ � ��������� ���������� ������� ������������ ����������.',
 'Blocks_Duplicate_Explain' => '������� ����� �� ������ ���� ����������. ������ ������, ����������� � ��������� ������ ����������, �������. ����� ����������� �����, �� ������ ������ ������ ���� ��� ������� �����, ������� �� ������ �������� � �������� ������� � ����� ������ "Duplicate Blocks" ������, ������������� � ��������� ��������.',
 'Blocks_Creation_01' => '���������/����������� ������� �������� 1 2',
 'Blocks_Creation_02' => '���������/����������� ������� �������� 2 2',
 'CMS_STANDARD_PAGES' => '����������� ��������',
 'CMS_CUSTOM_PAGES' => '�������� CMS',
 'CMS_CUSTOM_PAGES_ADV' => '������� ������� CMS',
 'Choose_Layout' => '�������� ��������',
 'B_Title' => '���������',
 'B_Position' => '�������',
 'B_Active' => '���������',
 'B_Display' => '�������������� ����������',
 'B_HTML' => 'HTML',
 'B_BBCode' => 'BBCode',
 'B_Type' => '���',
 'B_Border' => '������� ������',
 'B_Border_and_Background' => '������� � ���',
 'B_Titlebar' => '���������� Titlebar',
 'B_Titlebar_Content' => 'Titlebar',
 'B_Background' => '���������� ���',
 'B_Local' => '������������ Titlebar',
 'B_Cache' => '���?',
 'B_Cachetime' => '����������������� ����',
 'B_Groups' => '������ �������������',
 'B_All' => '���',
 'B_Guests' => '����� ������',
 'B_Reg' => '���������������� ������������',
 'B_Mod' => '����������',
 'B_Admin' => '��������������',
 'B_None' => '�� ����',
 'B_Layout' => '�������� �����',
 'B_Layout_Edit' => '��������� ��������� �������� ��������������',
 'B_Page' => '������������� ��������',
 'B_Add' => '��������� ����',
 'B_Duplicate' => '��������� �����',
 'B_Update' => '��������� �����',
	'Yes' => '��',
	'No' => '���',
	'Enabled' => '��������',
	'Disabled' => '���������',
	'B_Text' => '�����',
	'B_File' => '���� �����',
	'B_Move_Up' => '�����������',
 'B_Move_Down' => '����������',
 'B_View' => '�������������',
 'B_Text_Block' => '����� ��� ���� HTML',
 'NO_BLOCKS_AVAILABLE' => '��� ������ � ���� ����� ����������, �������, "�������� ����", ����� �������� ����',
 'No_blocks_selected' => '��������� ���� ����� No',
 'B_Content' => '�������������� ����������',
 'B_Blockfile' => '������� ����',
 'Block_Edit' => '������� ��������������',
 'Block_updated' => '����, �����������',
 'Blocks_updated' => '�����, �����������',
 'Must_enter_block' => '�� ������ ������ ������� ���������',
 'Block_added' => '����, �����������',
 'Blocks_added' => '�����, �����������',
 'Blocks_duplicated' => '�����, �������������',
 'Click_return_blocksadmin' => '������� %s�����%s, ����� ������������ � ���������� �������',
 'Block_removed' => '����, ������',
 'B_BV_added' => '������� ��������� ���� ������������: �������� ����������, ������������� �����������',

	'BV_Title' => '���������� ������',
 'BV_Explain' => '���������, ������������ ��� ������� ���������� ������������ ������, ������� ������������ � ������ � ��������� �����. ��� ���������� ����� ����� ���� ��������������� ����� �������� ������������ ������ ��������, ����� ��������� ��� ������.',
 'BV_Label' => '������� �����',
 'BV_Sub_Label' => '������� ����������',
 'BV_Name' => '�������� ������������',
 'BV_Options' => '�����',
 'BV_Values' => '������� ������',
 'BV_Type' => '��� ����������',
 'BV_Block' => '����',
 'BV_Add_Variable' => '��������� �������� ����������',
 'No_bv_selected' => '������� �������� ����������, ������� ����� ���������������, �������, ������������, ����� ��������� ���� ����.',
 'BV_Edit_Variable' => '����������� �������� ����������',
 'Must_enter_bv' => '�� ������ ������ ������� ����� � �������� ������������',
 'BV_updated' => '�������� ����������, �����������',
 'BV_added' => '�������� ����������, �����������',
 'Click_return_bvadmin' => '������� %s�����%s, ����� ������������ � ����������������� ���������� ������',
 'Config_Name_Explain' => '�� ������ ���� �������� ������������',
 'Field_Options_Explain' => '�������������� ��� �������������� ������� � <br/> ������ � ��������� ��������� (�������������� �������).',
 'Field_Values_Explain' => '�������������� ��� �������������� ������� � <br/> ������ � ��������� ��������� (�������������� �������).',
 'BV_removed' => '�������� ����������, ���������',

	'Config_updated' => '������������, �����������',
 'Click_return_config' => '������� %s�����%s, ����� ������������ � ������������',
 'Portal_Config' => '������������ ������� �����',
 'Portal_Explain' => '� ��������, �� ������ ���������� ������������, ����������� ��� ����� ����������� ������� �����. �������� ����������, ������������� � ���� ��������, ����� ���� �������/��������� � <b> ������������ ���������� ������ </b> ��������. ���������� ����� ��� ����������� ������� ����� ���� ��������/��������� � <b> ����������� �������� </b>.',
 'Portal_General_Config' => '����� ������������',
 'Default_Portal' => '�������� �� ��������� �������� �����',
 'Default_Portal_Explain' => '�������� �������� �����',
 'Cache_Enabled' => '��������� ������� ����',
 'Cache_Enabled_Explain' => '��� ����� ������� �������� ��������������� ���������� ������� �����',
 'Confirm_delete_item' => '������������� �� �� �������, ��� �� ������ ������� ���� �������?',
 'Cache_cleared' => '��������� ����� ����',

	'cms_pos_header' => '����������',
 'cms_pos_headerleft' => '�����',
 'cms_pos_headercenter' => '�������/�����',
 'cms_pos_footercenter' => '���������/�����',
 'cms_pos_footerright' => '�����',
 'cms_pos_footer' => '������ ����������',
 'cms_pos_nav' => '������������� ������',
 'cms_pos_left' => '�����',
 'cms_pos_center' => '�����',
 'cms_pos_right' => '�����',
 'cms_pos_xsnews' => '������� (�����)',
 'cms_pos_centerbottom' => '���������/�����',
 'cms_pos_toprow' => '�������',
 'cms_pos_column1' => '������� 1 (�����������)',
 'cms_pos_column2' => '������� 2 (�����)',
 'cms_pos_bottomrow' => '���������',
 'cms_pos_ghtop' => '������� ���������',
 'cms_pos_ghbottom' => '��������� ���������',
 'cms_pos_ghleft' => '(�����) ����� ���������',
 'cms_pos_ghright' => '����� ��������� (�����)',
//	'cms_pos_' => '',

	'cms_block_ads' => '�������',
 'cms_block_ajax_shoutbox' => '���� ���',
 'cms_block_album' => '������',
 'cms_block_birthdays' => '��� ��������',
 'cms_block_calendar' => '���������',
 'cms_block_center_downloads' => '��������',
 'cms_block_clock' => '��������� �����',
 'cms_block_donate' => '�������������',
 'cms_block_dyn_menu' => '������������ ����',
 'cms_block_flash_news' => 'flash �������',
 'cms_block_forum' => '�������',
 'cms_block_forum_attach' => '����������� �������',
 'cms_block_forum_list' => '������ ������',
 'cms_block_full_search' => '������ �����',
 'cms_block_global_header' => '���������� ���������',
 'cms_block_global_header_simple' => '���������� ������� ���������',
 'cms_block_gsearch' => '����� Google',
 'cms_block_gsearch_hor' => '�������������� ����� Google',
 'cms_block_index' => '����� �����',
 'cms_block_jumpbox' => 'Jumpbox',
 'cms_block_kb' => '���� ������',
 'cms_block_links' => '������',
 'cms_block_menu' => '������������ �����',
 'cms_block_nav_header' => '���������',
 'cms_block_nav_links' => '����� �����',
 'cms_block_nav_logo' => '����',
 'cms_block_new_downloads' => '����� ��������',
 'cms_block_news' => '�������',
 'cms_block_news_archive' => '����� ��������',
 'cms_block_news_posters' => '������� ��������',
 'cms_block_online_users' => '��� �������� �������',
 'cms_block_online_users2' => '��� �������� �������',
 'cms_block_paypal' => 'PayPal',
 'cms_block_poll' => '�����',
 'cms_block_random_attach' => '��������� ��������������',
 'cms_block_random_quote' => '��������� �������',
 'cms_block_random_topics' => '��������� ����',
 'cms_block_random_topics_ver' => '��������� ����',
 'cms_block_random_user' => '��������� ������������',
 'cms_block_recent_articles' => '�������� ������',
 'cms_block_recent_topics' => '�������� ����',
 'cms_block_recent_topics_wide' => '�������� ����',
 'cms_block_referers' => 'Referrers',
 'cms_block_rss' => 'RSS',
 'cms_block_search' => '�����',
 'cms_block_sec_menu' => '�������������� ����',
 'cms_block_shoutbox' => 'Shoutbox',
 'cms_block_staff' => '����',
 'cms_block_statistics' => '����������',
 'cms_block_style' => '�����',
 'cms_block_top_downloads' => '������ ��������',
 'cms_block_top_nav' => '������ ���������',
 'cms_block_top_posters' => '������ ������',
 'cms_block_user_block' => '���������������� ����',
 'cms_block_users_visited' => '�������� ������������',
 'cms_block_visit_counter' => '������� ���������',
 'cms_block_welcome' => '����� ����������',
 'cms_block_wordgraph' => '����',
 'cms_block_xs_news' => '�������',
//	'cms_block_' => '',

	'cms_var_cms_style' => 'CMS ����������� �����',
 'cms_var_cms_style_explain' => '����������� ����� ��� CMS ������� � ����������� ����� ���������� � ������� ���������� ����, � �� ����� ��� � ������������� ����� ���� �������� ����',
 'cms_var_header_width' => '���������� ����� ������ �������',
 'cms_var_header_width_explain' => '������ ������ ������� ����� ����� � �������� (������ ��� ���������� ������, ��� ����������)',
 'cms_var_footer_width' => '���������� ������ ������ �������',
 'cms_var_footer_width_explain' => '������ ������� ������� ����� ����� � �������� (������ ��� ���������� ������, ��� ����������)',
 'cms_var_md_cache_file_locking' => '������ ����� ����',
 'cms_var_md_cache_file_locking_explain' => '����� �������� ��������� ���� ��� ������ ���������������',
 'cms_var_md_cache_write_control' => '���������� ���',
 'cms_var_md_cache_write_control_explain' => '������������ ��������� ������������ ����� ����',
 'cms_var_md_cache_read_control' => '���������� ������ ����',
 'cms_var_md_cache_read_control_explain' => '������� CTRL ������� � ���� ����',
 'cms_var_md_cache_read_type' => '��� ���������� ������ ����',
 'cms_var_md_cache_read_type_explain' => '��� ���������� ������ (������ ���� �������� ���������� ��������)',
 'cms_var_md_cache_filename_protect' => '������ ����� ����� ����',
 'cms_var_md_cache_filename_protect_explain' => '������� ����� ����� ���� ��� ����� ������� ������������',
 'cms_var_md_cache_serialize' => '�������� �������������� ���������������� ������������',
 'cms_var_md_cache_serialize_explain' => '��������/ ��������� �������������� ���������������� ������������',
//	'cms_var_' => '',

	'CMS_Config_updated' => '������������, ��������� �������',
 'CMS_Click_return_config' => '������� %s�����%s, ����� ������������ � ���������� ���������',
 'CMS_Click_return_cms' => '������� %s�����%s, ����� ������������ � ���������� CMS',
 'CMS_TITLE' => 'CMS',
 'CMS_MANAGEMENT' => '���������� CMS',
 'CMS_Config' => '������������ CMS',
 'CMS_Guest' => '�����',
 'CMS_Reg' => '����������������',
 'CMS_VIP' => '����� ������ ����',
 'CMS_Publisher' => '��������',
 'CMS_Reviewer' => '���������',
 'CMS_Content_Manager' => '�������� ��������������� ����������',
 'CMS_ACP' => '������������� ��� ��������',
 'CMS_Pages' => '�������� �����',
 'CMS_ID' => 'ID',
 'CMS_Actions' => '��������',
 'CMS_Layout' => '����� ����������',
 'CMS_Blocks' => '�����',
 'CMS_Name' => '��������',
 'CMS_Description' => '��������',
 'CMS_LAYOUT_PAGE_ID' => 'ID ��������',
 'CMS_LAYOUT_PAGE_ID_EXPLAIN' => '��� - ID ��������, ������������ ��������� ��������. ������� ���������: ����� ������� ��������, �����, ������ �������������, ������� ������������.',
 'CMS_MUST_FILL_ALL_FIELDS' => '�� ������ ��������� ��� ����',
 'CMS_Filename' => '��� �����',
 'CMS_Filename_Explain' => '���� �� ����������� ��� ����� ����� ����� ��������, ������ � ���������� ���������, ������� �� �������.',
 'CMS_Filename_Explain_OK' => '<i> ����� �������� �����, �������, ��� ��� ������ ��������� �������������� �������� ������, ����� ������� ���� ������ ���� ������ �������������. </i>',
 'CMS_Filename_Explain_NO' => '<i> ����� �������� �����, �������, ��� ��� ������ <b> �� ��������� </b> �������������� �������� ������ �� ����� �����. ���� �� ������ ������� ����� �������� � ����� ���������� ���������, �� ������ ������� ������� ���� �� �������, �������� <b> index_empty.php </b> � �������������� ��� �������� ��������, ������� �� ������� �����. ������������� �� ������ ��������� ���������� ���������� �� ������ ������ �����, ����� ������� ��������� ����� �������� �������������. </i>',
 'CMS_Template' => '������',
 'CMS_FileAlreadyExists' => '����, ������� �� ��������� ������� ���, ����������. ���������� �������� ������ ��� �����.',
 'CMS_FileCreationSuccess' => '����� �������� ��� ������������� ������.',
 'CMS_FileCreationError' => '���� �� ����� ���� ������������� ������.',
 'CMS_FileCreationManual' => '���������� �������� ����� index_empty.php, ��������� ��� ��������, ������� �� �������� � ����� �������� �������� � ��������� �� � ����� ����� �����.',
 'CMS_Permissions' => '����������',
 'CMS_Global_Header' => '���������� ���������',
 'CMS_GLOBAL_BLOCKS' => '���������� �����',
 'CMS_BREADCRUMBS' => '������',
 'CMS_Edit' => '��������������',
 'CMS_Delete' => '�������',
 'CMS_Preview' => '��������������� ��������',
 'CMS_Configure_Blocks' => '������������� �����',
 'CMS_PAGES_PERMISSIONS' => '�������������� ����������',
 'CMS_PAGES_PERMISSIONS_EXPLAIN' => '������������� ���������������� �������, ��������� ����������� �������� ��������� ��������� ������. ���� ���������������, ��� ������ �������� �� ������ ����� �������, ����� ���������� ���������� ����� (��� ���� ������ ���������� ���������� �����������, ������ ���� ������� � <b> ������������ CMS </b>).',
 'CMS_Page' => '��������',
 'CMS_ADS' => '������f &amp; ��������',
 'CMS_OWNER' => '��������',
 'CMS_SAVE_CHANGES' => '������bnm ���������',
 'CMS_CHANGES_SAVED' => '��������� ����������',
//	'CMS_' => '',
// MG CMS - END

// MG CMS MENU - BEGIN
	'CMS_MENU_PAGE' => '������������ ����',
 'CMS_MENU_PAGE_EXPLAIN' => '�����e� ����������� ����, ����� �������� � ����� ��������� CMS ��� ����. �������� ��������� ��� ������ �� ������ ������������ �������� �������, ����� ��������� �������� ��� ���������� ���� ����������� ��������. �� ������ ���� ������� ������� ����������, ��������� ��� ������ ������ ��� ������ �� ������ ���� ������� � ��� �� ����� ���� ��� �����.',

 'CMS_Menu_New_Menu' => '������� ����� ���� ����',
 'CMS_Menu_New_cat' => '������� ����� ���������',
 'CMS_Menu_New_link' => '������� ����� ������',
 'CMS_Menu_Edit_menu_links_button' => '�������������� ����������� � ���� ����',
 'CMS_Menu_Edit_cat_button' => '��������� ��������������',
 'CMS_Menu_Edit_link_button' => '������ ��������������',
 'CMS_Menu_Set_auth' => '����������',
 'CMS_Menu_New_menu_name' => '�������� ����',
 'CMS_Menu_New_cat_name' => '�������� ���������',
 'CMS_Menu_New_link_name' => '�������� ������',
 'CMS_Menu_Default_link' => '�������� �� ��������� ������ (<b> * </b> ����� ��������������)',
 'CMS_Menu_No_default_link' => '��� ������ �� ��������� (�������� ��������� ���������)',
 'CMS_Menu_New_menu_des' => '�������� ����',
 'CMS_Menu_New_cat_des' => '�������� ���������',
 'CMS_Menu_New_link_des' => '�������� ������',
 'CMS_Menu_Choose_cat' => '�������� ���������',
 'CMS_Menu_Choose_cat_desc' => '�������� ���������, ��� ������ ������� �.',
 'CMS_Menu_link_status' => '���������',
 'CMS_Menu_Icon' => '������',
 'CMS_Menu_No_Icon' => '��� ������',
 'CMS_Menu_Standard_Icon' => '����������� ������',
 'CMS_Menu_link_external' => '������� ������',
 'CMS_Menu_New_link_name_key' => '�������� ���������� �������� (������������ � <b> lang_dyn_menu.php </b>)',
 'CMS_Menu_No_lang_key' => '��� �������� ���������� �������� (���������� ��������� ��������)',
 'CMS_Menu_New_link_url' => 'URL ������',
 'CMS_Menu_New_cat_link_url' => 'URL ��������� (���� ������� URL �� ������, ������� �� ������ ���������, �� ������ �����������/�������� �������� ���������)',
 'CMS_Menu_Update' => '���� ����������',

 'Click_Return_CMS_Menu' => '������� %s�����%s, ����� ������������ � ����������������� ����',

 'Menu_created' => '���� ������� �������',
 'Cat_created' => '��������� ������� �������',
 'Link_created' => '������ ������� �������',
 'Menu_updated' => '���� ������� ���������',
 'Cat_updated' => '��������� ������� ���������',
 'Link_updated' => '������ ������� ���������',
 'Menu_deleted' => '���� ������� �������',
 'Cat_deleted' => '��������� ������� �������',
 'Link_deleted' => '������ ������� �������',

 'CMS_Menu_Not_Exist' => '��� ����  doesn \'t ����������.',
 'CMS_Menu_Items_Not_Exist' => '��� ����  ��������� doesn \'t, ����� ����� ���������. ������� ���������, ����� �������� ���.',
 'CMS_Menu_No_Cats_Exist' => '��� ���� ��������� doesn \'t, ����� ����� ���������. ������, ��� ������� ������ �� ������ ������� ���������.',
 'CMS_Menu_Item_Not_Exist' => '����� ���� doesn \'t ����������.',
 'CMS_Menu_Item_Add_Edit' => '��������/�������� ����� ���� ',
// MG CMS MENU - END

// CMS - ADV - BEGIN
	'CMS_ADV' => '������� CMS',
 'CMS_LINKS' => '������',
 'CMS_SETTINGS' => '��������� ���������',
 'CMS_ADV_USERSLIST' => '������������ CMS',
 'CMS_ADV_CUSTOM_PAGES' => '�������� ��������',
 'CMS_ADV_DEFAULT_TEMPLATE' => '�������� �� ���������',
 'CMS_ADV_DEFAULT_TEMPLATE_OPTION' => '- �������� �� ��������� ������� -',

 'BLOCK_MOVE' => '���� �����������',
 'TURN_ACTIVE' => '�������/��������� ����',
 'TURN_BORDER' => '��������/��������� �������',
 'TURN_TITLEBAR' => '��������/��������� ������� ���������',
 'TURN_LOCAL' => '��������/��������� ��������� ��������������',
 'TURN_BACKGROUND' => '��������/��������� ���',

 'BLOCKS_POSITION_SAVE' => '��������� ������� ������',
 'BLOCKS_POSITION_UPDATED' => '�������������� ������, ������� ����������',

 'INVALID_BLOCKS' => '������������ ������� ������',
// CMS - ADV - END
	)
);
?>