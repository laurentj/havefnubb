<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://havefnubb.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class errorCtrl extends jController {

    public $pluginParams = array(
        '*'		=> array('auth.required'=>false),
    );
    /**
    * 404 error page
    */
    public function notfound() {
        $rep = $this->getResponse('html');
        $tpl = new jTpl();
        $rep->body->assign('MAIN', $tpl->fetch('havefnubb~404.html'));
        $rep->setHttpStatus('404', 'Not Found');

        return $rep;
    }

    /**
    * 403 error page
    * @since 1.0.1
    */
    public function badright() {
        $rep = $this->getResponse('html');
		$tpl = new jTpl();	
        $rep->body->assign('MAIN', $tpl->fetch('havefnubb~403.html'));
        $rep->setHttpStatus('403', 'Forbidden');        
        return $rep;
    }
}