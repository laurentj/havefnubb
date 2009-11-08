<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://havefnubb.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

/*
 * Menus class to build nav bar on public part
 * example of file 
<?xml version="1.0" encoding="utf-8"?>
<menus>
    <menu>
        <name lang="fr_FR">Télécharger</name>
        <name lang="en_EN">Download</name>
        <itemName>downloads</itemName>
        <url>/downloads</url>
        <order>1</order>
    </menu>
    <menu>
        <name lang="fr_FR">Aide</name>
        <name lang="en_EN">Help</name>
        <itemName>help</itemName>
        <url>http://mydomain.com/help.php</url>
        <order>39</order>
    </menu>    
</menus>
 */
class menus
{

    public function getMenus() {
        global $gJConfig;
        $menus = array();
        
        if (file_exists(dirname(__FILE__).'/menus.xml')) {
            $doc = DOMDocument::load(dirname(__FILE__).'/menus.xml');
            $xpath  = new DOMXPath($doc);
           
            
            $query = '/menus/menu';
             
            $entries = $xpath->query($query); 
     
            foreach ($entries as $idx => $menu) {
    
                $queryName = '//name[@lang="'.$gJConfig->locale.'"]';
                $items = $xpath->query($queryName);
                $name =  $items->item($idx)->nodeValue;
                            
                $queryItemName = '//menu/itemName';
                $items = $xpath->query($queryItemName);
                $itemName = $items->item($idx)->nodeValue;
    
                $queryUrl = '//menu/url';
                $items = $xpath->query($queryUrl);
                $url = $items->item($idx)->nodeValue;
    
                $queryOrder = '//menu/order';
                $items = $xpath->query($queryOrder);
                $order = $items->item($idx)->nodeValue;
                    
                $menus[] = array('itemName'=>$itemName,
                                 'name' =>$name,
                                 'url'  =>$url,
                                 'order'=>$order);
            }         
        }

        return $menus;
    }
}    