<?php
/**
* @package   havefnubb
* @subpackage hfnurates
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://forge.jelix.org/projects/havefnubb
* @licence   http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class rates {

    // get the Rate of a given source and ID
    function getTotalRatesBySource($id_source, $source) {
        $cnx = jDb::getConnection();        
	    $strQuery = 'SELECT COUNT(*) as total_rates, SUM(level) as total_level, AVG(level) as avg_level ' . 
	                ' FROM '.$cnx->prefixTable('rates'). 
	                " WHERE id_source = '".$id_source."' AND source='".addslashes($source). "' GROUP BY id_source";
        $rs = $cnx->query($strQuery);        
        $total = $rs->fetch();
        
        return $total;
    }
    
    // save the Rate to a given source and ID
    function saveRatesBySource($id_source, $source, $rate) {
        
        $dao = jDao::get('hfnurates~rates');
        $id_user =  jAuth::getUserSession ()->id == NULL ? 0 : jAuth::getUserSession ()->id;
        
        $rec = $dao->getByIdSourceSourceRate($id_user, $id_source, $source);
        
        if ($rec->id_source == null) {
            $record = jDao::createRecord('hfnurates~rates');
            $record->id_source  = $id_source;
            $record->id_user    = $id_user;
            $record->source     = $source;
            $record->level      = $rate;
            $record->ip 	    = $_SERVER['REMOTE_ADDR'];
            $dao->insert($record);
        } else {
            $rec->level = $rate;
            $dao->update($rec);
        }
        jZone::clear("hfnurates~rates");
        return true;

    }


}
