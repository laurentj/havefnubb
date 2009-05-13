<?php
/**
* @package   havefnubb
* @subpackage hfnuadmin
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://forge.jelix.org/projects/havefnubb
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class hfnuadminmenuListener extends jEventListener{

   /**
   *
   */
	function onmasteradminGetMenuContent ($event) {
	  global $gJConfig;
	  $chemin = $gJConfig->urlengine['basePath'].'themes/'.$gJConfig->theme.'/';
      if ( jAcl2::check('hfnu.admin.index'))    {
		 $event->add(new masterAdminMenuItem('havefnubb','HaveFnu BB!', '', 20));
	  }
	  if ( jAcl2::check('hfnu.admin.config'))    {
		 $item = new masterAdminMenuItem('config',
											  jLocale::get('hfnuadmin~admin.config'),
											  jUrl::get('hfnuadmin~default:config'),
											  201,
											  'havefnubb');
         $item->icon = $chemin . 'images/admin/config.png';			
         $event->add($item);		 
	  }
	  if ( jAcl2::check('hfnu.admin.category'))    {
		 $item = new masterAdminMenuItem('category',
											  jLocale::get('hfnuadmin~admin.categories'),
											  jUrl::get('hfnuadmin~category:index'),
											  202,
											  'havefnubb');
		 $item->icon = $chemin . 'images/admin/category.png';			
		 $event->add($item);		  		  
	  }
	  if ( jAcl2::check('hfnu.admin.forum'))    {		  
		 $item = new masterAdminMenuItem('forum',
											  jLocale::get('hfnuadmin~admin.forum'),
											  jUrl::get('hfnuadmin~forum:index'),
											  203,
											  'havefnubb'
												);		  
         $item->icon = $chemin . 'images/admin/forum.png';			
         $event->add($item);		  
	  }
	  if ( jAcl2::check('hfnu.admin.post'))    {
		 $item = new masterAdminMenuItem('notifying',
											  jLocale::get('hfnuadmin~admin.notifying'),
											  jUrl::get('hfnuadmin~notify:index'),
											  205,
											  'havefnubb');
		 $event->add($item);
	  }
	  if ( jAcl2::check('hfnu.admin.member'))    {
		 $item = new masterAdminMenuItem('rank',
											  jLocale::get('hfnuadmin~admin.rank'),
											  jUrl::get('hfnuadmin~ranks:index'),
											  206,
											  'havefnubb');
         $item->icon = $chemin . 'images/admin/rank.png';			
         $event->add($item);		 
		 $item = new masterAdminMenuItem('ban',
											  jLocale::get('hfnuadmin~admin.ban'),
											  jUrl::get('hfnuadmin~ban:index'),
											  207,
											  'havefnubb');
         $item->icon = $chemin . 'images/admin/ban.png';			
         $event->add($item);		 
	  }
      if ( jAcl2::check('hfnu.admin.cache'))    {	  
		 $item = new masterAdminMenuItem('cache',
											  jLocale::get('hfnuadmin~admin.cache'),
											  jUrl::get('hfnuadmin~cache:index'),
											  208,
											  'havefnubb');
         $item->icon = $chemin . 'images/admin/clear_cache.png';			
         $event->add($item);		 
		}
	} 
}
?>