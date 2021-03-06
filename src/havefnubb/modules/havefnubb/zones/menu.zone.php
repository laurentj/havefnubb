<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @copyright 2008-2011 FoxMaSk
* @link      https://havefnubb.jelix.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/
/**
 * Class the displays the main nav bar
 */
class menuZone extends jZone {
    /**
     *@var string $_tplname the template name used by the zone
     */
    protected $_tplname='zone.menu';
    /**
     * function to manage data before assigning to the template of its zone
     */
    protected function _prepareTpl(){
        jClasses::inc('havefnubb~hfnuMenuItem');
        $admin = jAcl2::check('hfnu.admin.index');
        $menu = array();
        $items = jEvent::notify('hfnuGetMenuContent',array('admin'=>$admin))->getResponse();

        foreach ($items as $item) {
            if($item->parentId) {
                if(!isset($menu[$item->parentId])) {
                    $menu[$item->parentId] = new hfnuMenuItem($item->parentId, '', '');
                }
                $menu[$item->parentId]->childItems[] = $item;
            }
            else {
                if(isset($menu[$item->id])) {
                    $menu[$item->id]->copyFrom($item);
                }
                else {
                    $menu[$item->id] = $item;
                }
            }
        }
        usort($menu, "hfnuItemSort");
        foreach($menu as $topitem) {
            usort($topitem->childItems, "hfnuItemSort");
        }
        $this->_tpl->assign('menuitems', $menu);
        $this->_tpl->assign('selectedMenuItem', $this->param('selectedMenuItem',''));
    }
}
