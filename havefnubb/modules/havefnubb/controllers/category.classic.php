<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://forge.jelix.org/projects/havefnubb
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class categoryCtrl extends jController {
    /**
    *
    */
    public $pluginParams = array(
        '*'=>array('auth.required'=>false),
		'view' => array('history.add'=>true)
    );
    
    function view() {
        $id_cat = (int) $this->param('id_cat');
        if ($id_cat == 0 ) {
            $rep = $this->getResponse('redirect');
            $rep->action = 'default:index';
        }
        
        $dao = jDao::get('category');        
        $category = $dao->get($id_cat);
        
        $rep = $this->getResponse('html');
        $rep->title = $category->cat_name;
		
		$GLOBALS['gJCoord']->getPlugin('history')->change('label', ucfirst(htmlentities($category->cat_name)));
    
        $tpl = new jTpl();
	
        $tpl->assign('action','view');
        $tpl->assign('category',$category);        

        $rep->body->assign('MAIN', $tpl->fetch('category'));
        return $rep;
    }    
}

