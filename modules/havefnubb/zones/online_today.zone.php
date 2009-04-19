<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://forge.jelix.org/projects/havefnubb
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class online_todayZone extends jZone {
    protected $_tplname='zone.online_today';

    protected function _prepareTpl(){
        
        $dao = jDao::get('havefnubb~member');        
        $today  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));        
        $members = $dao->findOnlineToday($today);
        $this->_tpl->assign('members',$members);

    }
}