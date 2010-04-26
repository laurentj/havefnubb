<?php
/**
* @package   havefnubb
* @subpackage servinfo
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://havefnubb.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/
/**
 * Controller that displays some Server Informations
 */
class defaultCtrl extends jController {
	/**
	 * @var plugins to manage the behavior of the controller
	 */
	public $pluginParams = array(

		'*'	=> array('jacl2.right'=>'hfnu.admin.serverinfo'),

		'*'	=>	array('auth.required'=>true,
					'hfnu.check.installed'=>true,
					'banuser.check'=>true,
					),
	);
	/**
	 * call to phpinfo
	 */
	public function phpinfo() {
		$rep = $this->getResponse('html');
		$tpl = new jTpl();
		$rep->body->assign('MAIN',$tpl->fetch('servinfo~phpinfo'));
		return $rep;
	}
}
