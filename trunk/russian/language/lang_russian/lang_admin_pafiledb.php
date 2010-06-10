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
// Categories
	'Cat_manage_title' => '���������� ����������',
 'File_manage_title' => '���������� �������',
 'All_files' => '��� �����',
 'Approved_files' => '�������������� �����',
 'Broken_files' => '��������� �����',
 'File_cat' => '��������� �����',
 'Maintenance' => '������������ �����',
 'Approve' => '��������',
 'Unapprove' => '����������',
 'File_mode' => '�������������',
 'Approve_selected' => '�������� ���������',
 'Unapprove_selected' => '���������� ���������',
 'Delete_selected' => '������� ���������',
 'No_file' => '��� ������� ������',
 'Acat' => '���������: �������',
 'Ecat' => '���������: �������������',
 'Dcat' => '���������: �������',
 'Rcat' => '���������: ���������������',
 'Cat_Permissions' => '����� ���������',
 'User_Permissions' => '������������ ��������',
 'Group_Permissions' => '���������� ������',
 'User_Global_Permissions' => '���������������� ���������� ���������� ����������',
 'Group_Global_Permissions' => '���������� ���������� ���������� ������',
 'Acattitle' => '��������� ���������',
 'Ecattitle' => '��������� ��������������',
 'Dcattitle' => '������� ���������',
 'Rcattitle' => '����������������� ���������',
 'Catexplain' => '�� ������ ������������ ������ ���������� ����������, ����� ��������, �������������, ������� � ��������������� ���������. ����� �������� ����� � ����� ���� ������, � ��� ������ ���� �� ������� ���� ���� ��������� ���������. �� ������ ������� ������ ����, ����� ��������� ������ �����������.',
 'Rcatexplain' => '�� ������ ��������������� ���������, ����� �������� �������, � ������� ��� ���������� �� �������� ��������. ����� ��������������� ���������, �������� ����� �� �����, �� ������ �� ����������. 1 ����� ������� �������, 2 ����� ������� �������, � �.�. ��� �� ����������� ������������.',
 'Catadded' => '����� ��������� ��� ������� ��������',
 'Catname' => '�������� ���������',
 'Catnameinfo' => '��� ������ ��������� ���������.',
 'Catdesc' => '�������� ���������',
 'Catdescinfo' => '��� - �������� ������ � ���������',
 'Catparent' => '������������ ���������',
 'Catparentinfo' => '���� �� ������, ����� ��� ��������� ���� �������������, �������� ���������, �� ������� �� ������, ����� ��� ���� �������������.',
 'Allow_file' => '��������� ��������� ����',
 'Allow_file_info' => '���� �� �� ���������� ��������� ����� � ���� ���������, ��� ����� ��������������� ��������� � �� ������ �������� ��������� ��� sub ��� ���� ���������, ��� �� ������.',
 'None' => '�� ����',
 'Catedited' => '���������, ������� �� �������, ���� ������� ���������������',
 'Delfiles' => '��� �� ������ ������� � ������� � ���� ���������?',
 'Do_cat' => '��� �� ������ ������� � ������������� � ���� ���������?',
 'Move_to' => '��������� �',
 'Catsdeleted' => '���������, ������� �� �������, ���� ������� �������',
 'Cdelerror' => '�� didn \'t �������� ����� ���������, ����� �������',
 'Rcatdone' => '��������� ���� ������� ���������������',

//Categories Permission
	'View' => '��������',
	'Read' => '������',
	'View_file' => '���� �������������',
// MX Addon
	'Delete_file' => '������� ����',
	'Edit_file' => '������������� ����',
// End
	'Upload' => '���� ��������',
 'Download_file' => '���� ��������',
 'Rate' => '�����',
 'View_comment' => '���������� �����������',
 'Post_comment' => '�������� �����������',
 'Edit_comment' => '������������� �����������(n/a)',
 'Delete_comment' => '������� �����������',
 'Category_auth_updated' => '����������� ���������� ���������',
 'Click_return_catauth' => '������� %s�����%s, ����� ���������� � ��������� ����������',
 'Auth_Control_Category' => '���������� ���������� ���������',
 'Category_auth_explain' => '�������� ������ ���������� ������ ���������. �������, ��� ��������� ������ ���������� ��������� ��������, ����� ������������ ����� ��������� ��������� �������� � �������� ���.',
 'Select_a_Category' => '�������� ���������',
 'Look_up_Category' => '��������� ���������',
 'Category' => '���������',
 'Auth_Control_Category' => '���������� ���������� ���������',

 'Category_ALL' => '���',
 'Category_REG' => '�������.',
 'Category_PRIVATE' => '�������',
 'Category_MOD' => '���',
 'Category_ADMIN' => '�������������',

// Configuration
	'Settings' => '������������',
 'Settingstitle' => '������������ ��������',
 'Settingsexplain' => '����������� ��� ����� ����� ��������.',
 'Dbname' => '�������� ���� ������',
 'Dbnameinfo' => '��� - �������� ���� ������, ����� ��� ������ \'Download \'',
 'Sitename' => '�������� �����',
 'Sitenameinfo' => '��� - �������� ������ ����� ��� �������������� ����, ������ ��� \'Home \'',
 'Dburl' => 'URL ���� ������',
 'Dburlinfo' => '��� - URL � ��������, ��� ��� �����������',
 'Hpurl' => 'URL �������� ��������',
 'Hpurlinfo' => '��� - URL � ����� ���������� ��� �������� ��������',
 'Topnum' => '������� �����',
 'Topnuminfo' => '������� ������ ����� ���������� �� ������� X ����������� ������� ������',
 'Nfdays' => '����� ��� �����',
 'Nfdaysinfo' => '������� ���� ����� ���� ������ ���� ����������� � \'New ������ \' ������. ���� ��� ����� ����������� � 5, �� � ���� ������, ����������� � ������� ������� 5 ����, ����� \'New ���� \'������',
 'Showva' => '���������� \'View ��� ����� \'',
 'Showvainfo' => '��������, ������� �� �� ����� \'View ��� ����� \' ���������, ������������ � ������� ����������� �� �������� ��������',
 'Php_template' => 'PHP � �������',
 'Php_template_info' => '��� �������� ��� ������������ php ��������������� � ������ �������',
 'Dbdl' => '��������� ��������',
 'Dbdlinfo' => '��� ������� ������ �������� ����������� �������������. ��� - ������� �����, ����� ������������, ����� ����������� � ����� ���� ������. ������ ������������� ����� � ��������� ����������� ���� ������',
 'Isdisabled' => '������ �������� � ��������� ����� ����������, ���������� ����������� ����� �����.',
 'Com_settings' => '��������� ��������� �����������',
 'Com_allowh' => '��������� HTML',
 'Com_allowb' => '��������� BBCode',
 'Com_allows' => '��������� ������',
 'Com_allowl' => '��������� ������',
 'Com_messagel' => '�������� �� ��������� \'No ������ \' ���������',
 'Com_messagel_info' => '���� ������� �� ��������� ���� �����, ����� ��������� ������ �����',
 'Com_allowi' => '��������� �����������',
 'Com_messagei' => '�������� �� ��������� \'No ����������� \' ���������',
 'Com_messagei_info' => '���� ������������ �� ��������� ���� �����, ����� ��������� ������ �����',
 'Max_char' => '������������ ���������� ��������',
 'Max_char_info' => '���� ���-�� ��������� �����������, ������� ��������� ������������ ����� ��������, ���� ����� ��������� �� ������� ����� ���������� (������ �����������).',
 'Settings_changed' => '���� ��������� ��������� ���� ������� ���������',
 'File_per_page' => '����� ����� �� ��������',
 'File_per_page_info' => '������������ ����� ������ �� ��������, ���� �� ���������� ���, �������, ����� �� �������� ����� 20.',
 'Hotlink_prevent' => '�������������� ������������� ������',
 'Hotlinl_prevent_info' => '����� ��� � ��, ���� �� ��������� \'t, ����� ��������� ������������� ������ ������',
 'Hotlink_allowed' => '����������� ������ ��� ������������� ������',
 'Hotlink_allowed_info' => '����������� ������ ��� ������������� ������ (���������� �������), ��������, www.phpbb.com, www.icyphoenix.com',
 'Default_sort_method' => '����� ���������� �� ���������',
 'Default_sort_order' => '����� ���������� �� ���������',
 'Max_filesize' => '������������ ������ �����',
 'Max_filesize_explain' => '������������ ������ ����� ��� ������. �������� 0 ������� \'unlimited \'. ��� ��������� ���������� ����� ������������� �������. ��������, ���� ���� php ������������ ������ ��������� �������� �������� �� 2 ������, ��� �� ����� ���� �������� ������ ��������. ',
 'Upload_directory' => '�������� �������',
 'Upload_directory_explain' => '������ ������������� ���� �� ����� icyphoenix ����������� �� �������� �������� ������. ��������, ������� \'downloads/\', ���� ���� icyphoenix ����������� ����������� � http://www.yourdomain.com/icyphoenix, � ������� �������� �������� ���������� � http://www.yourdomain.com/icyphoenix/downloads. ',
 'Screenshots_directory' => '������� ����������',
 'Screenshots_directory_explain' => '������ ������������� ���� �� ����� icyphoenix ����������� �� �������� �������� ����������. ��������, ������� \'files/screenshots/\', ���� ���� icyphoenix ����������� ����������� � http://www.yourdomain.com/icyphoenix, � ������� �������� �������� ���������� � http://www.yourdomain.com/icyphoenix/files/screenshots. ',
 'Forbidden_extensions' => '����������� ����������',
 'Forbidden_extensions_explain' => '��������� ��� ������� ����������� ����������. �������� ������ ���������� � �������.',
 'Permission_settings' => '��������� ��������� ����������',
 'Auth_search' => '���������� ������',
 'Auth_search_explain' => '��������� ����� ������������ ������ �������������',
 'Auth_stats' => '���������� Stats',
 'Auth_stats_explain' => '��������� stats ��� ������������ ������ �������������',
 'Auth_toplist' => '���������� Toplist',
 'Auth_toplist_explain' => '��������� toplist ��� ������������ ������ �������������',
 'Auth_viewall' => '���������� Viewall',
 'Auth_viewall_explain' => '��������� viewall ��� ������������ ������ �������������',
 'Bytes' => '�����',
 '�B' => '�����',
 '�B' => '�����',


// Custom Field
 '������ �� ����' => '�������� ����: ��������',
 'Efield' => '�������� ����: ������������',
 'Dfield' => '�������� ����: �������',
 'Mfieldtitle' => '�������� ����',
 'Afieldtitle' => '��������� ����',
 'Efieldtitle' => '����������� ����',
 'Dfieldtitle' => '������� ����',
 'Fieldexplain' => '�� ������ ������������ �������� ������ ���������� ������, ����� ��������, �������������, � ������� �������� ����. �� ������ ������������ �������� ����, ����� �������� ��������� ���������� � �����. ��������, ���� �� ������, ����� �������������� ���� ��������� ���� \������ �, �� ������ ������� �������� ����, � ����� �� ������ �������� ������ ����� ��������/������������� �������� �����.',
 'Fieldname' => '��� ����',
 'Fieldnameinfo' => '��� - �������� ����, �������� \'File ������ \'',
 'Fielddesc' => '������� ��������',
 'Fielddescinfo' => '��� - �������� ����, �������� \'File ������ � ���������� \'',
 'Fieldadded' => '�������� ���� ��� ������� ��������',
 'Fieldedited' => '�������� ����, ������� �� �������, ��� ������� ��������������',
 'Dfielderror' => '�� didn \'t �������� ����� ����, ����� �������',
 'Fieldsdel' => '�������� ����, ������� �� �������, ���� ������� �������',

 'Field_data' => '�����',
 'Field_data_info' => '������ �����, �� ������� ����� ������� ������������. �������� ������ ����� � ����� ������� (������� �������).',
 'Field_regex' => '���������� ���������',
 'Field_regex_info' => '�� ������ �����������, ����� ������� ���� ��������������� ����������� ��������� %s (PCRE) %s.',
 'Field_order' => '����� �������',

// File
	'Afile' => '����: ��������',
 'Efile' => '����: �������������',
 'Dfile' => '����: �������',
 'Afiletitle' => '�������� ����',
 'Efiletitle' => '���� �������������',
 'Dfiletitle' => '������� ����',
 'Fileexplain' => '�� ������ ������������ ������ ���������� �������, ����� ��������, �������������, � ������� �����.',
 '��������' => '���� ��������',
 'Uploadinfo' => '�������� ���� ����',
 'Uploaderror' => '���� ���� ��� ����������. ���������� ������������ ���� � ����������� �����.',
 'Uploaddone' => '���� ���� ��� ������� �������. URL � ����� is',
 'Uploaddone2' => '�������� � ���� �����, ����� ��������� ���� URL � ���� URL ��������.',
 'Upload_do_done' => '�������',
 'Upload_do_not' => '�� ��������',
 'Upload_do_exist' => '���� ����������',
 '��� �����' => '��� �����',
 'Filenameinfo' => '��� - �������� �����, ������� �� ����������, ����� ��� \'My Picture. \'',
 'Filesd' => '�������� ��������',
 'Filesdinfo' => '��� - �������� �������� �����. ��� ������ �� ��������, ������� ����������� ��� ����� � ���������, ����� ������� ��� �������� ������ ���� �������� ����������',
 'Fileld' => '������� ��������',
 'Fileldinfo' => '��� - ����� ������� �������� �����. ��� ������ �� ����� \�������������� ��������, ����� ������� ��� �������� ������ ���� ����� �������',
 'Filecreator' => '���������/�����',
 'Filecreatorinfo' => '��� - �������� ����, ��� �� �� ������ ����.',
 'Fileversion' => '������ �����',
 'Fileversioninfo' => '��� - ������ �����, ������ ��� 3.0 ��� 1.3 ����',
 'Filess' => 'URL ���������',
 'Filessinfo' => '��� - URL � ��������� �����. ��������, ���� �� �� ���������� ���� Winamp, ��� ��� �� URL � ��������� Winamp � ���� �����. �� ������ ������� ������ URL, ��� �� ������ �������� ��� �������� � �������� ��������, ��������� ����� ����.',
 'Filess_upload' => '�������� ��������',
 'Filessinfo_upload' => '�� ������ �������� ��������, ������� �� �����',
 'Filess_link' => '�������� ��� ������',
 'Filess_link_info' => '���� �� ������ �������� ��������� ��� ������ ������ ��.',
 'Filedocs' => '����������������/������ URL',
 'Filedocsinfo' => '��� - URL � ������������ ��� ����������� ��� �����',
 'Fileurl' => 'URL �����',
 'Fileurlinfo' => '��� - URL � �����, ������� ����� ��������. �� ������ ���������� ��� �������, ��� �� ������ ������ �� ����� ���� � �������� ����.',
 'File_upload' => '�������� �����',
 'Fileinfo_upload' => '�� ������ �������� ����, ������� �� �����',
 'Uploaded_file' => '���������� ����',
 'Filepi' => '�������� ������',
 'Filepiinfo' => '�� ������ ������� �������� ������ ��� �����. ��������� ������ ������� ����� � ������ � ������ ������.',
 'Filecat' => '���������',
 'Filecatinfo' => '��� - ���������, � ������� ����������� ����.',
 'Filelicense' => '��������',
 'Filelicenseinfo' => '��� - ������������ ����������, �� ������� ������ ����������� ������������ ������, ��� ��������� ����.',
 'Filepin' => '���� �������',
 'Filepininfo' => '��������, ���� �� ������ ����������� ���� ��� ���. ����������� ������ ����� ������ ���������� ������� ������ �����.',
 'Fileadded' => '����� ���� ��� ������� ��������',
// MX Addon
	'Filedeleted' => '���� ��� ������� ������',
// End
	'Fileedited' => '����, ������� �� �������, ��� ������� ��������������',
 'Fderror' => '�� didn \'t �������� ����� �����, ����� �������',
 'Filesdeleted' => '�����, ������� �� �������, ���� ������� �������',
 'Filetoobig' => '��� ���� �������� ������� �������!',
 '����������' => '����������',
 'Not_approved' => '(�� ����������)',
 'Approved_info' => '���������� ��� �����, ����� ������� ���� ��������� ��� �������������, � ����� �������� �����, ������� ��� ������� ��������������.',
 'Fchecker' => '������������ �����',
 'File_checker' => '������������ �����',
 'File_checker_explain' => '��������� ��� ����� � ���� ������, � ����� � �������� ��������.',
 'File_saftey' => '������������ ����� ���������� ������� ��� ����� � ���������, ������� �� � ��������� ����� ���������� � ������ ����� ������ �����, ��� ���� ��� ������, � ������� ��� ���������, ������� �� �������. <br/> <br/>, ���� ����� �� ���������� � <span class="text_red">{html_path}</span> �����, ����� ����� ��������� ��� ����������� ������������. <br/> <br/> ���������� ��������������, ��� <span class="text_red">{html_path}</span> �������� �����, ������� �� ����������� ��� ����� ������. <br/> <br/> <b> ����������: </b> ������ ������������� ��� �� <b><a href="' . append_sid('admin_db_utilities.' . PHP_EXT . '?perform=backup') . '" class="genmed"> ��������� ����� ���� ���� ������ </a> </b>.',
 'File_checker_perform' => '��������� ��������',
 'Checker_saved' => '������ ����������� ��������� �����',
 'Checker_sp1' => '�������� ������� � ������������ �������...',
 'Checker_sp2' => '�������� ������� � ������������ �����������...',
 'Checker_sp3' => '�������� ���������������� ������...',
 'Filedls' => '����� ���������� ��������',
 'Addtional_field' => '�������������� ����',
 'File_not_found' => '����, ������� �� ����������, �� ����� ���� ������',
 'SS_not_found' => '��������, ������� �� ����������, �� ����� ���� ������',
// License
	'Alicense' => '��������: ��������',
 'Elicense' => '��������: ������������',
 'Dlicense' => '��������: �������',
 'Alicensetitle' => '��������� ��������',
 'Elicensetitle' => '�������� ��������������',
 'Dlicensetitle' => '������� ��������',
 'Licenseexplain' => '�� ������ ������������ ������ ���������� ���������, ����� ��������, �������������, � ������� ������������ ����������. �� ������ ������� �������� ��� ����� �� �����, ��������� ��� ����������� ��������. ���� � ����� ���� ������������ ����������, ������������ ������ ����� ����������� �� ���� ������, ��� ��������� ����.',
 'Lname' => '�������� ��������',
 'Ltext' => '����������� �����',
 'Licenseadded' => '����� ������������ ���������� ��� ������� ��������',
 'Licenseedited' => '������������ ����������, ������� �� �������, ��� ������� ��������������',
 'Lderror' => '�� �� �������� ��������, ����� �������',
 'Ldeleted' => '������������ ����������, ������� �� �������, ���� ������� �������',
// MX
	'License_title' => '��������',
// ENd
	'Click_return' => '�������� %sHere%s, ����� ������������ � ���������� ��������',
 'Click_return_upload' => '�������� %sHere%s, ����� ������������ � �������� ��������',
 'Click_edit_permissions' => '�������� %sHere%s, ����� ������������� ���������� ��� ���� ���������',

//Java script messages and php errors
	'Cat_name_missing' => '���������� ��������� ���� ����� ���������',
 'Cat_conflict' => '�� ������ \'t ����� ��������� ��� ����� � ���������, ��� doesn \'t ��������� �����',
 'Cat_id_missing' => '���������� �������� ���������',
 'Missing_field' => '���������� ��������� ��� ����������� ����',


//Fields Types

	'����' => '��������� ���� ��������� �����',
 'Textarea' => '������������� ��������� ����',
 '�����' => '������ � ��������� ��������� ������������� ������',
 '��������' => '���� ������������� ������',
 'Select_multiple' => '���� �������������� ������',
 '�������������' => '������������� �������������� ������',

// MX Addon
	'Validation_settings' => '�������� ������������ ��������',
 'Need_validate' => '��������� ������������ ��������?',
 'Validator' => 'Validator',
 'PM_notify' => '��������� ������������ validator (s) (n/a)',
 'Validator_admin_option' => '�������������',
 'Validator_mod_option' => '������������� � ��������� �����',

 'Allow_comments' => '��������� ������������ (n/a)',
 'Allow_comments_info' => '���������/��������� ������������ � ���� ���������.',
 'Allow_ratings' => '��������� ������� (n/a)',
 'Allow_ratings_info' => '���������/��������� ������� � ���� ���������.',

 'MCP_title' => '������ ���������� ����������',
 'MCP_title_explain' => '�������� � ��������� �������',

 'Fileadded_not_validated' => '����� ���� ��� ������� ��������, �� ��������� (�������������) ������ ��������� ������������ ����� ����� ����������.',
 )
);

?>