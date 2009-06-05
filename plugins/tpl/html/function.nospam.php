<?php
/**
* @package     jelix
* @subpackage  jtpl_plugin
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://forge.jelix.org/projects/havefnubb
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

function jtpl_function_html_nospam($tpl, $email,$path)
{
	global $gJConfig;
	$imagePath = $gJConfig->urlengine['basePath'].'themes/'.$gJConfig->theme.'/'.$path;	
	list( $mail , $domain ) = split('@',$email);
	$string = $mail.'<img src="'.$imagePath.'at2.gif" alt="at"/>';
	$domNospam = preg_replace('/\./','<img src="'.$imagePath.'dot.gif" alt="dot"/>',$domain);
	$string .= $domNospam;
	echo $string;	
}