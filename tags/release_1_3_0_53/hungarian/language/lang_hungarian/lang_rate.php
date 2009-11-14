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
  'Already_Rated' => '�rt�kel�sed: <b>%d</b>',
  'Rate_Stats' => '<b>%.2f</b>',
  'Rate' => '�rt�kel�s',
  'Choose_Rating' => 'V�lassz �rt�ket',
  'Topic_Rated' => 'A t�m�t �rt�kelted.',
  'Anon_Rate_Disabled' => 'Anonymous felhaszn�l� nem �rt�kelhet',
  'Not_Authorized_To_Rate' => 'Nincs jogod ezt a t�m�t rt�kelni',
  'Change_Rating' => '�rt�k megv�ltoztatva',
  'View_Details' => '<a href="%s" title="R�szletek">R�szletes inform�ci� megn�z�se</a>',
  'View_Details_2' => '<a href="%s" title="R�szletek">R�szletes inform�ci� megn�z�se</a>',
  'Username_Gave_Rate_of_Max' => '<b>%s</b> <b>%d</b>-re �rt�kelte ezt a t�m�t a lehets�ges <b>%d</b>-b�l %s-�n.',
  'Detailed_Rating' => '�rt�kel�sek r�szletez�se',
  'Details_For_Topic' => '<b>%s</b>',
  'Or_Someone_From_IP' => '(logol�s IP-je)',
  'Disable_Rating_ON' => '�rt�kel�s letiltva ebben a t�m�ban',
  'Summary' => '�sszes�tett �rt�kel�s',
  'Topic_Rating_Details' => 'T�ma�rt�kel�s r�szletei',
  'Anonymous' => 'Anonymous',
  'All_Forums' => 'Minden f�rum',
  'Max_Rate' => 'Max �rt�k',
  'User_Rate' => '�rt�kel� felhaszn�l�',
  'Rate_Date' => '�rt�kel�s d�tuma',
  'Rate_Time' => '�rt�kel�s ideje',
  'Rate_Order' => '�rt�k sz�ma',
  'No_Topics_Rated' => 'Nincs �rt�kelt t�ma',
  'Top_Topics' => 'Top %d �rt�k� t�m�k',
  'Top_Topics_For_Forum' => 'Top %d �rt�k� t�m�k a %s f�rumban',
  'For_Forum' => 'Csak %s',
  'Last_Rated' => 'Utols� �rt�kel�s',
  'Number_of_Rates' => 'Number Of Rates',
  'Rating' => 'Rating',
  'Min' => 'Min',
  'Max' => 'Max',
  'Min_Rating' => 'Min �rt�kel�s',
  'By_Forum' => 'Lista a f�rumb�l',
  'Status' => 'Status',
  'Auth_Description' => 'Descriptions',
  'NONE' => 'Rating is totally disabled and no rating bar will display above topics',
  'ALL' => 'All users may rate and view the bar, which includes anonymous and registered',
  'REG' => 'Only registered users can rate, but everyone can view the bar',
  'PRIVATE' => 'Only registered users can rate and view the bar',
  'MOD' => 'Only forum moderators and admins can rate and everyone can view the bar',
  'ADMIN' => 'Only admins can rate and everyone can view the bar',
  'Allow_Poster_To_Disable_Rating' => 'Allow The Poster To Disable Rating Ability',
  'Allow_Detailed_Ratings_Page' => 'Allow Users To View Detailed Ratings Page',
  'Max_Rating' => 'Max Rating Allowed (1 to MAX)',
  'Allow_Users_To_ReRate' => 'Allow users to change their rating',
  'Check_Anon_IP' => 'Check Anonymous User\'s IP when voting to see if they\'ve already rated',
  'Anon_Rate_ID' => 'Next Anonymous User rating IP.<br />Don\'t change this unless you know what you are doing and really need to.<br />Setting it to a higher value than what is listed is a very bad idea',
  'Big_Page_Number' => 'Number of topics to display on the separate ratings page (if you choose to use it)',
  'Main_Page_Number' => 'Number of topics to display on the main page display (if you choose to use it)',
  'Header_Page_Number' => 'Number of topics to display on the header page display (if you choose to use it)',
  'Mass_Update' => 'Mass Update',
  'Purge_Old_Ratings' => 'Purge Old Ratings',
  'Min_Rates' => 'Minimum Number of Raters a Topic Must Have Before Displaying on Top Rated Lists',
  'Purge' => 'Purge',
  'Purged' => 'Purged',
  'Purge_Desc' => 'Purges ratings from deleted topics that could have somehow been not originally deleted with the topic.',
  'Clear' => 'Clear',
  'Clear_Desc' => 'Clear <b>ALL</b> your rating details.  Only do this if you are having unusual troubles or want to <b>erase all</b> your voting data.  Click the box and also type YES in the box beside it.',
  'Complete' => 'Complete',
  'Authorization' => 'Authorization',
  'rate_average' => 'Average Rate',
  'rate_minimum' => 'Minimum Rate',
  'rate_maximum' => 'Maximum Rate',
  'Rank2' => '#',
  'Database_Error' => 'Adatb�zis hiba',
  'Error_Dbase_Config' => 'Hiba a konfigur�ci�s adat megszerz�se vagy friss�t�se k�zben.',
  'Error_Dbase_Ratings' => 'Hiba az �rt�kel�s adatainak megszerz�se vagy friss�t�se k�zben.',
  'Error_Dbase_Auth' => 'Hiba az �rt�kel�shez val� jog adatainak megszerz�se vagy friss�t�se k�zben.',
  'No_Topic_ID' => 'Nincs meg az a t�ma, amely meg lett adva.',
))
?>