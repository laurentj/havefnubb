<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://havefnubb.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/
/**
 * Class the displays the a form to quiclky reply to a post
 */
class quickreplyZone extends jZone {
	/**
	 *@var string $_tplname the template name used by the zone
	 */
	protected $_tplname='zone.quickreply';
	/**
	 * function to manage data before assigning to the template of its zone
	 */
	protected function _prepareTpl(){
		$id_post = $this->param('id_post');
		$id_forum = $this->param('id_forum');
		if (!$id_post) return;

		$daoUser = jDao::get('havefnubb~member');
		$user = $daoUser->getByLogin( jAuth::getUserSession ()->login);

		$form = jForms::create('havefnubb~posts',$id_post);
		$form->setData('id_forum',$id_forum);
		$form->setData('id_user',$user->id);
		$form->setData('id_post',0);
		$form->setData('parent_id',$id_post);
		$form->setData('subject',jClasses::getService('havefnubb~hfnuposts')->getPost($id_post)->subject);

		$this->_tpl->assign('form',$form);
		$this->_tpl->assign('id_post',$id_post);
	}
}
