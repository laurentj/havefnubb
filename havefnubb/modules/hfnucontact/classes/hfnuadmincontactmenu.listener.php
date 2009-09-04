<?php
/**
* @package   havefnubb
* @subpackage hfnuadmin
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://havefnubb.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class hfnuadmincontactmenuListener extends jEventListener{

   /**
   *
   */
	function onmasteradminGetMenuContent ($event) {
	  global $gJConfig;
	  $chemin = $gJConfig->urlengine['basePath'].'themes/'.$gJConfig->theme.'/';
	  
      if ( jAcl2::check('hfnu.admin.contact'))    {
		 $event->add(new masterAdminMenuItem('hfnucontact','Contact', '', 100));

		 $item = new masterAdminMenuItem('contact',
											  jLocale::get('hfnucontact~contact.contact'),
											  jUrl::get('hfnucontact~admin:index'),
											  100,
											  'hfnucontact');
         $item->icon = $chemin . 'images/admin/contact.png';			
         $event->add($item);		 
	  }
	  
	} 
}
?>