<?php
/**
* @package     havefnubb
* @author      Laurent Jouanneau
* @contributor
* @copyright   2010-2019 Laurent Jouanneau
 * @link      https://havefnubb.jelix.org
 * @license  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/


use Jelix\Installer\Module\API\InstallHelpers;

class hfnuadminModuleInstaller extends \Jelix\Installer\Module\Installer {

    public function postInstall(InstallHelpers $helpers)
    {
        $helpers->database()->execSQLScript('sql/postinstall');
    }
}