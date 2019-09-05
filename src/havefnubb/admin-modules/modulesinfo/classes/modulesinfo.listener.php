<?php
/**
* @package   havefnubb
* @subpackage modulesinfo
* @author    FoxMaSk
* @contributor Laurent Jouanneau
* @copyright 2008-2011 FoxMaSk, 2010 laurent jouanneau
* @link      https://havefnubb.jelix.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class modulesinfoListener extends jEventListener{

    function onmasteradminGetMenuContent ($event) {

        if ( jAcl2::check('modulesinfo.access')) {
            $item = new masterAdminMenuItem('modulesinfo',
                                            jLocale::get('modulesinfo~modulesinfo.masteradmin.menu.item'),
                                            jUrl::get('modulesinfo~default:index'),
                                            202,
                                            'system');
            $item->icon = jApp::urlBasePath().'hfnu/admin/images/modules_list.png';
            $event->add($item);
        }
    }
}
