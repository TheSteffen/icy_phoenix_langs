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
  'CMS_WELCOME' => 'Welcome in Icy Phoenix',
  'BP_Title' => 'Blocks Position Tag',
  'BP_Explain' => 'From this control panel, you can add, edit or delete blocks position that can be used in site pages. The default positions are \'header\', \'footer\', \'right\', \'left\' and \'center\'. These positions corresponds to the layout being used for a specific site page. Only existing positions per site page must be added here. Position keys that are not existing in the specified layout will not appear in the site page. Each position tag key and character must be unique per site page.',
  'BP_Position' => 'Position character',
  'BP_Key' => 'Position Tag Key',
  'BP_Layout' => 'Site Page',
  'BP_Add_Position' => 'Add New Position',
  'No_bp_selected' => 'No position selected for editing',
  'BP_Edit_Position' => 'Edit block position',
  'Must_enter_bp' => 'You must enter a position tag key, position character and site page',
  'BP_updated' => 'Block position updated',
  'BP_added' => 'Block position added',
  'Click_return_bpadmin' => 'Kattints %side%s to return to Blocks Position Administration',
  'BP_removed' => 'Block position removed',
  'Portal_wide' => 'Site Wide',
  'No_layout_selected' => 'No site page selected for editing',
  'Layout_Title' => 'Site Pages',
  'Layout_Explain' => 'From this control panel, you can add, edit or delete layout information for your site pages. Multiple site pages can use the same layout. The layout template file selected must reside in the layout directory under your forum template directory. You are not allowed to delete the default site page. Deleting a site page also deletes the corresponding block positions for that page and all the blocks assigned to it. You can also edit the blocks assigned to each page and create new pages from scratch even with a new physical name (if your server allows it you can create for example a new page called <b>mypage.php</b>).',
  'Layout_Special_Explain' => 'From this control panel, you can add, edit or delete blocks for standard pages of your site (i.e.: forum, view topic, memberlist, downloads, album, etc.).',
  'Layout_Name' => 'Name',
  'Layout_Template' => 'Template File',
  'Layout_Edit' => 'Edit site page',
  'Layout_Page' => 'Page ID',
  'Layout_View' => 'View permissions',
  'Layout_Edit_Perm' => 'Edit permissions',
  'Layout_Global_Blocks' => 'Show Global Blocks',
  'Layout_Page_Nav' => 'Page Navigation Block (Breadcrumbs)',
  'Must_enter_layout' => 'You must enter a name and a template file',
  'Layout_updated' => 'Site Page Updated',
  'Click_return_layoutadmin' => 'Kattints %side%s to return to Site Page Administration',
  'Layout_added' => 'Site Page added',
  'Layout_removed' => 'Site Page removed',
  'Layout_Add' => 'Add Site Page',
  'Layout_BP_added' => 'Layout Config file available: Block Position Tags automatically inserted',
  'Layout_default' => 'Default',
  'Layout_make_default' => 'Make Default',
  'Blocks_Title' => 'Blocks Management',
  'Blocks_Explain' => 'From this control panel, you can add, edit, delete and move blocks for each available site page. A block template must exist for every block file added. If you want to add a text only block (with BBCodes or HTML) you should not choose any block file and then you\'ll be redirected to the editor page. Blocks creation/edit setup is split among two pages: the first where you will be able to choose the general settings for the block, and a second page where you will be able to set the block specific variables.',
  'Blocks_Duplicate_Explain' => 'From this control panel you can duplicate blocks from other layouts. Only blocks compatible with selected layout will be shown. To duplicate blocks you have just to tick the box for each block you want to add to the current template and then click the button "Duplicate Blocks" located at page bottom.',
  'Blocks_Creation_01' => 'Add/Edit Block Page 1 of 2',
  'Blocks_Creation_02' => 'Add/Edit Block Page 2 of 2',
  'CMS_STANDARD_PAGES' => 'Standard Pages',
  'CMS_CUSTOM_PAGES' => 'CMS Pages',
  'CMS_CUSTOM_PAGES_ADV' => 'CMS Pages ADV',
  'Choose_Layout' => 'Choose Page',
  'B_Title' => 'Title',
  'B_Position' => 'Position',
  'B_Active' => 'Status',
  'B_Display' => 'Content',
  'B_HTML' => 'HTML',
  'B_BBCode' => 'BBCode',
  'B_Type' => 'Type',
  'B_Border' => 'Show Border',
  'B_Border_and_Background' => 'Border and BG',
  'B_Titlebar' => 'Show Titlebar',
  'B_Titlebar_Content' => 'Titlebar',
  'B_Background' => 'Show BG',
  'B_Local' => 'Localize Titlebar',
  'B_Cache' => 'Cache?',
  'B_Cachetime' => 'Cache Duration',
  'B_Groups' => 'Usergroups',
  'B_All' => 'All',
  'B_Guests' => 'Guests Only',
  'B_Reg' => 'Registered Users',
  'B_Mod' => 'Moderators',
  'B_Admin' => 'Administrators',
  'B_None' => 'None',
  'B_Layout' => 'Site Page',
  'B_Layout_Edit' => 'Edit Page Settings',
  'B_Page' => 'Page ID',
  'B_Add' => 'Add Block',
  'B_Duplicate' => 'Duplicate Blocks',
  'B_Update' => 'Update Blocks',
  'Yes' => 'Yes',
  'No' => 'No',
  'Enabled' => 'Enabled',
  'Disabled' => 'Disabled',
  'B_Text' => 'Text',
  'B_File' => 'Block File',
  'B_Move_Up' => 'Move Up',
  'B_Move_Down' => 'Move Down',
  'B_View' => 'View By',
  'B_Text_Block' => 'Text or HTML block',
  'NO_BLOCKS_AVAILABLE' => 'No blocks in this layout, click on "Add Block" to add one',
  'No_blocks_selected' => 'No block file selected',
  'B_Content' => 'Content',
  'B_Blockfile' => 'Block File',
  'Block_Edit' => 'Block Edit',
  'Block_updated' => 'Block updated',
  'Blocks_updated' => 'Blocks updated',
  'Must_enter_block' => 'You must enter a block title',
  'Block_added' => 'Block added',
  'Blocks_added' => 'Blocks added',
  'Blocks_duplicated' => 'Blocks duplicated',
  'Click_return_blocksadmin' => 'Kattints %side%s to return to Blocks Management',
  'Block_removed' => 'Block removed',
  'B_BV_added' => 'Block Config file available: Block Variables automatically inserted',
  'BV_Title' => 'Blocks Variables',
  'BV_Explain' => 'From this control panel, you can add, edit or delete blocks config variables that are used in blocks in Site Pages. These variables can then be configured through the Home Page Configuration page to customize your portal.',
  'BV_Label' => 'Field Label',
  'BV_Sub_Label' => 'Field Info',
  'BV_Name' => 'Config Name',
  'BV_Options' => 'Options',
  'BV_Values' => 'Field Values',
  'BV_Type' => 'Control Type',
  'BV_Block' => 'Block',
  'BV_Add_Variable' => 'Add Block Variable',
  'No_bv_selected' => 'No block variable to be configured, click on SUBMIT to save this block.',
  'BV_Edit_Variable' => 'Edit block variable',
  'Must_enter_bv' => 'You must enter a field label and config name',
  'BV_updated' => 'Block variable updated',
  'BV_added' => 'Block variable added',
  'Click_return_bvadmin' => 'Kattints %side%s to return to Blocks Variables Administration',
  'Config_Name_Explain' => 'Must have no space',
  'Field_Options_Explain' => 'Mandatory for dropdown lists and<br />radio buttons (comma delimited).',
  'Field_Values_Explain' => 'Mandatory for dropdown lists and<br />radio buttons (comma delimited).',
  'BV_removed' => 'Block variable removed',
  'Config_updated' => 'Configuration updated',
  'Click_return_config' => 'Kattints %side%s to return to Configuration',
  'Portal_Config' => 'Site Pages Configuration',
  'Portal_Explain' => 'In page, you can set the configuration needed for your customized site pages. Block variables listed in this page can be created/updated in <b>Blocks Variables Configuration</b> page. Global blocks for standard pages may be enabled/disabled in <b>Page Permissions</b>.',
  'Portal_General_Config' => 'General Configuration',
  'Default_Portal' => 'Default Site Page',
  'Default_Portal_Explain' => 'Homepage of the site',
  'Cache_Enabled' => 'Enable cache system',
  'Cache_Enabled_Explain' => 'For faster loading of site pages related information',
  'Confirm_delete_item' => 'Are you sure you want to delete this item?',
  'Cache_cleared' => 'Cache files removed',
  'cms_pos_header' => 'Page Header',
  'cms_pos_headerleft' => 'Left',
  'cms_pos_headercenter' => 'Top/Center',
  'cms_pos_footercenter' => 'Bottom/Center',
  'cms_pos_footerright' => 'Right',
  'cms_pos_footer' => 'Page Footer',
  'cms_pos_nav' => 'Navigation Bar',
  'cms_pos_left' => 'Left',
  'cms_pos_center' => 'Center',
  'cms_pos_right' => 'Right',
  'cms_pos_xsnews' => 'News (Center)',
  'cms_pos_centerbottom' => 'Bottom/Center',
  'cms_pos_toprow' => 'Top',
  'cms_pos_column1' => 'Column 1 (Left)',
  'cms_pos_column2' => 'Column 2 (Right)',
  'cms_pos_bottomrow' => 'Bottom',
  'cms_pos_ghtop' => 'Header Top',
  'cms_pos_ghbottom' => 'Header Bottom',
  'cms_pos_ghleft' => 'Header Centre (Left)',
  'cms_pos_ghright' => 'Header Centre (Right)',
  'cms_block_ads' => 'Ads',
  'cms_block_ajax_shoutbox' => 'AJAX Chat',
  'cms_block_album' => 'Album',
  'cms_block_birthdays' => 'Birthdays',
  'cms_block_calendar' => 'Calendar',
  'cms_block_center_downloads' => 'Downloads',
  'cms_block_clock' => 'Clock',
  'cms_block_donate' => 'Donations',
  'cms_block_dyn_menu' => 'Dynamic Menu',
  'cms_block_flash_news' => 'Flash News',
  'cms_block_forum' => 'News',
  'cms_block_forum_attach' => 'Advanced News',
  'cms_block_forum_list' => 'Forum List',
  'cms_block_full_search' => 'Full Search',
  'cms_block_global_header' => 'Global Header',
  'cms_block_global_header_simple' => 'Global Header Simple',
  'cms_block_gsearch' => 'Google Search',
  'cms_block_gsearch_hor' => 'Google Search Horizontal',
  'cms_block_index' => 'Site Map',
  'cms_block_jumpbox' => 'Jumpbox',
  'cms_block_kb' => 'Knowledge Base',
  'cms_block_links' => 'Links',
  'cms_block_menu' => 'Site Navigation',
  'cms_block_nav_header' => 'Header',
  'cms_block_nav_links' => 'Site Map',
  'cms_block_nav_logo' => 'Logo',
  'cms_block_new_downloads' => 'New Downloads',
  'cms_block_news' => 'News',
  'cms_block_news_archive' => 'News Archive',
  'cms_block_news_posters' => 'News Posters',
  'cms_block_online_users' => 'Who is Online',
  'cms_block_online_users2' => 'Who is Online',
  'cms_block_paypal' => 'PayPal',
  'cms_block_poll' => 'Poll',
  'cms_block_random_attach' => 'Random Attach',
  'cms_block_random_quote' => 'Random Quote',
  'cms_block_random_topics' => 'Random Topics',
  'cms_block_random_topics_ver' => 'Random Topics',
  'cms_block_random_user' => 'Random User',
  'cms_block_recent_articles' => 'Recent Articles',
  'cms_block_recent_topics' => 'Recent Topics',
  'cms_block_recent_topics_wide' => 'Recent Topics',
  'cms_block_referers' => 'Referrers',
  'cms_block_rss' => 'RSS',
  'cms_block_search' => 'Search',
  'cms_block_sec_menu' => 'Extra Menu',
  'cms_block_shoutbox' => 'Shoutbox',
  'cms_block_staff' => 'Staff',
  'cms_block_statistics' => 'Statistics',
  'cms_block_style' => 'Style',
  'cms_block_top_downloads' => 'Top Downloads',
  'cms_block_top_nav' => 'Top Nav',
  'cms_block_top_posters' => 'Top Posters',
  'cms_block_user_block' => 'User Block',
  'cms_block_users_visited' => 'Active Users',
  'cms_block_visit_counter' => 'Visit Counter',
  'cms_block_welcome' => 'Welcome',
  'cms_block_wordgraph' => 'Tags',
  'cms_block_xs_news' => 'News',
  'cms_var_cms_style' => 'CMS Modern Style',
  'cms_var_cms_style_explain' => 'Modern Style for CMS consists in a modern layout with top transparent menu, while classic style has side menu',
  'cms_var_header_width' => 'Global Left Column Width',
  'cms_var_header_width_explain' => 'Width of site-wide left column in pixels',
  'cms_var_footer_width' => 'Global Right Column Width',
  'cms_var_footer_width_explain' => 'Width of site-wide right column in pixels',
  'cms_var_md_cache_file_locking' => 'Cache File Locking',
  'cms_var_md_cache_file_locking_explain' => 'Can avoid cache corruption under bad circumstances',
  'cms_var_md_cache_write_control' => 'Cache Write Control',
  'cms_var_md_cache_write_control_explain' => 'Detect some corrupt cache files',
  'cms_var_md_cache_read_control' => 'Cache Read Control',
  'cms_var_md_cache_read_control_explain' => 'A control key is embeded in cache file',
  'cms_var_md_cache_read_type' => 'Cache Read Control Type',
  'cms_var_md_cache_read_type_explain' => 'Type of read control (only if read control is enabled)',
  'cms_var_md_cache_filename_protect' => 'Cache File Name Protection',
  'cms_var_md_cache_filename_protect_explain' => 'Encrypt cache file names for higher security',
  'cms_var_md_cache_serialize' => 'Cache Automatic Serialization',
  'cms_var_md_cache_serialize_explain' => 'Enable / disable automatic serialization',
  'CMS_Config_updated' => 'Configuration Updated Successfully',
  'CMS_Click_return_config' => 'Kattints %side%s to return to settings',
  'CMS_Click_return_cms' => 'Kattints %side%s to return to CMS Management',
  'CMS_TITLE' => 'CMS',
  'CMS_MANAGEMENT' => 'CMS Management',
  'CMS_Config' => 'CMS Configuration',
  'CMS_Guest' => 'Guest',
  'CMS_Reg' => 'Registered',
  'CMS_VIP' => 'VIP',
  'CMS_Publisher' => 'Publisher',
  'CMS_Reviewer' => 'Reviewer',
  'CMS_Content_Manager' => 'Content Manager',
  'CMS_ACP' => 'Edit This Page',
  'CMS_Pages' => 'Site Pages',
  'CMS_ID' => 'ID',
  'CMS_Actions' => 'Actions',
  'CMS_Layout' => 'Layout',
  'CMS_Blocks' => 'Blocks',
  'CMS_Name' => 'Name',
  'CMS_Description' => 'Description',
  'CMS_LAYOUT_PAGE_ID' => 'Page ID',
  'CMS_LAYOUT_PAGE_ID_EXPLAIN' => 'This is the Page ID used by the auth system. Chars allowed: lowercase alpha, numbers, underscore, no spaces.',
  'CMS_MUST_FILL_ALL_FIELDS' => 'You have to fill all fields',
  'CMS_Filename' => 'Filename',
  'CMS_Filename_Explain' => 'If you specify a filename then a new page is created with the physical name you have chosen.',
  'CMS_Filename_Explain_OK' => '<i>After a quick test it seems that your server allows automatic files creation, so the file should be created automatically.</i>',
  'CMS_Filename_Explain_NO' => '<i>After a quick test it seems that your server <b>DOES NOT ALLOW</b> automatic files creation on your root. If you want to create a new page with a new physical name you should manually create the file on the server by duplicating <b>index_empty.php</b> and renaming it according to name you have chosen here. Alternatively you may assign the correct permissions to the root of your site so the procedure may run automatically.</i>',
  'CMS_Template' => 'Template',
  'CMS_FileAlreadyExists' => 'The file you are trying to create already exists. Please choose another filename.',
  'CMS_FileCreationSuccess' => 'The new page has been automatically created.',
  'CMS_FileCreationError' => 'The file cannot be automatically created.',
  'CMS_FileCreationManual' => 'Please create a copy of index_empty.php, assign it the name you have inserted in the page creation form and upload it in your site root.',
  'CMS_Permissions' => 'Permissions',
  'CMS_Global_Header' => 'Global Header',
  'CMS_GLOBAL_BLOCKS' => 'Global Blocks',
  'CMS_BREADCRUMBS' => 'Breadcrumbs',
  'CMS_Edit' => 'Edit',
  'CMS_Delete' => 'Delete',
  'CMS_Preview' => 'Preview',
  'CMS_Configure_Blocks' => 'Configure Blocks',
  'CMS_PAGES_PERMISSIONS' => 'Extra Permissions',
  'CMS_PAGES_PERMISSIONS_EXPLAIN' => 'Configure the user level required to view some others standard pages. If applicable, for each page you can also select to display global blocks (for this feature Global Blocks should be enabled in <b>CMS Configuration</b>).',
  'CMS_Page' => 'Page',
  'CMS_ADS' => 'Ads &amp; Sponsors',
  'CMS_OWNER' => 'Owner',
  'CMS_SAVE_CHANGES' => 'Save Changes',
  'CMS_CHANGES_SAVED' => 'Changes Saved',
  'CMS_MENU_PAGE' => 'Dynamic Menu',
  'CMS_MENU_PAGE_EXPLAIN' => 'Create a customized menu to show in your CMS pages as a block. When creating a category or a link you can use language keys to assign names or specify your own name. You may even choose the permission level required for each link or whether the link should be opened in the same window or a new one.',
  'CMS_Menu_New_Menu' => 'Create a new menu block',
  'CMS_Menu_New_cat' => 'Create a new category',
  'CMS_Menu_New_link' => 'Create a new link',
  'CMS_Menu_Edit_menu_links_button' => 'Edit links in this menu',
  'CMS_Menu_Edit_cat_button' => 'Edit category',
  'CMS_Menu_Edit_link_button' => 'Edit link',
  'CMS_Menu_Set_auth' => 'Permission',
  'CMS_Menu_New_menu_name' => 'Menu name',
  'CMS_Menu_New_cat_name' => 'Category name',
  'CMS_Menu_New_link_name' => 'Link name',
  'CMS_Menu_Default_link' => 'Default link (<b>*</b> will be ignored)',
  'CMS_Menu_No_default_link' => 'No default link (Custom settings)',
  'CMS_Menu_New_menu_des' => 'Menu description',
  'CMS_Menu_New_cat_des' => 'Category description',
  'CMS_Menu_New_link_des' => 'Link description',
  'CMS_Menu_Choose_cat' => 'Choose category',
  'CMS_Menu_Choose_cat_desc' => 'Choose the category where the link is related to.',
  'CMS_Menu_link_status' => 'Status',
  'CMS_Menu_Icon' => 'Icon',
  'CMS_Menu_No_Icon' => 'No Icon',
  'CMS_Menu_Standard_Icon' => 'Standard Icon',
  'CMS_Menu_link_external' => 'External link',
  'CMS_Menu_New_link_name_key' => 'Language var (specified in <b>lang_dyn_menu.php</b>)',
  'CMS_Menu_No_lang_key' => 'No lang var (use the specified name)',
  'CMS_Menu_New_link_url' => 'URL of the link',
  'CMS_Menu_New_cat_link_url' => 'URL of the category (if no URL is entered, clicking on category link you can expand/collapse category items)',
  'CMS_Menu_Update' => 'Update Menu',
  'Click_Return_CMS_Menu' => 'Kattints %side%s to return to the menu administration',
  'Menu_created' => 'Menu successfully created.',
  'Cat_created' => 'Category successfully created.',
  'Link_created' => 'Link successfully created.',
  'Menu_updated' => 'Menu successfully updated.',
  'Cat_updated' => 'Category successfully updated.',
  'Link_updated' => 'Link successfully updated.',
  'Menu_deleted' => 'Menu successfully removed.',
  'Cat_deleted' => 'Category successfully removed.',
  'Link_deleted' => 'Link successfully removed.',
  'CMS_Menu_Not_Exist' => 'This menu doesn\'t exist.',
  'CMS_Menu_Items_Not_Exist' => 'This menu block doesn\'t have any category. Click on add to add one.',
  'CMS_Menu_No_Cats_Exist' => 'This menu block doesn\'t have any category. Before creating a link you need to create a category.',
  'CMS_Menu_Item_Not_Exist' => 'This menu item doesn\'t exist.',
  'CMS_Menu_Item_Add_Edit' => 'Add/Edit Menu Item',
  'CMS_ADV' => 'CMS ADV',
  'CMS_LINKS' => 'Links',
  'CMS_SETTINGS' => 'Settings',
  'CMS_ADV_USERSLIST' => 'CMS Users',
  'CMS_ADV_CUSTOM_PAGES' => 'Light Pages',
  'CMS_ADV_DEFAULT_TEMPLATE' => 'Default',
  'CMS_ADV_DEFAULT_TEMPLATE_OPTION' => '-- Template default --',
  'BLOCK_MOVE' => 'Move Block',
  'TURN_ACTIVE' => 'Enable/Disable Block',
  'TURN_BORDER' => 'Enable/Disable Border',
  'TURN_TITLEBAR' => 'Enable/Disable Title Bar',
  'TURN_LOCAL' => 'Enable/Disable Location Title',
  'TURN_BACKGROUND' => 'Enable/Disable Background',
  'BLOCKS_POSITION_SAVE' => 'Save blocks position',
  'BLOCKS_POSITION_UPDATED' => 'Blocks location successfully updated',
  'INVALID_BLOCKS' => 'Invalid blocks position',
  'Layout_Forum_wide' => 'Site Wide Blocks',
  'Standard_Pages' => 'Standard Pages',
  'Custom_Pages' => 'Customized Pages',
  'Portal_Header' => 'Enable site wide header and left blocks',
  'Portal_Header_Explain' => 'Always show header and left global blocks',
  'Portal_Tail' => 'Enable site wide right and footer',
  'Portal_Tail_Explain' => 'Always show right and footer global blocks',
  'cms_pos_gh_top' => 'Top',
  'cms_pos_gh_bottom' => 'Bottom',
  'cms_pos_gh_center_left' => 'Center (Left)',
  'cms_pos_gh_center_right' => 'Center (Right)',
  'CMS_Title' => 'CMS',
  'CMS_Management' => 'CMS Management',
  'CMS_Global_Blocks' => 'Global Blocks',
  'CMS_Page_Permissions' => 'Page Permissions',
  'CMS_Page_Permissions_Explain' => 'In this page you can configure the user level required to view standard pages. For each page you can also choose if the global blocks should be displayed or not (for this feature Global Blocks should be enabled in <b>CMS Configuration</b>).',
  'CMS_Menu_Page' => 'Dynamic Menu',
  'CMS_Menu_Page_Explain' => 'In this page you can create customized menu to show in your CMS pages as a block. When creating a category or a link you can use language keys to assign names or specify your own name. You may even choose the permission level required for each link or whether the link should be open in the same window or a new one.',
))
?>