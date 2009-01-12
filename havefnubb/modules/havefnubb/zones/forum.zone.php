<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://forge.jelix.org/projects/havefnubb
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class forumZone extends jZone {
    protected $_tplname='forumindex';

    protected function _prepareTpl(){
        $id_cat = $this->param('id_cat');
        
        $dao = jDao::get('forum');
        
        if ($id_cat > 0) {
            $forums = $dao->findByCatId($id_cat);
            $this->_tpl->assign('tableclass','forumList');                
        }
        
        $this->_tpl->assign('forums',$forums);
    }
}