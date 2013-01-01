<?php
/* comments & extra-whitespaces have been removed by jBuildTools*/
/**
* @package     jelix
* @subpackage  core_response
* @author      Laurent Jouanneau
* @copyright   2006-2010 Laurent Jouanneau
* @link        http://www.jelix.org
* @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/
include JELIX_LIB_UTILS_PATH.'jZipCreator.class.php';
class jResponseZip extends jResponse{
	protected $_type='zip';
	public $content=null;
	public $zipFilename='';
	function __construct(){
		$this->content=new jZipCreator();
		parent::__construct();
	}
	public function output(){
		if($this->_outputOnlyHeaders){
			$this->sendHttpHeaders();
			return true;
		}
		$zipContent=$this->content->getContent();
		$this->_httpHeaders['Content-Type']='application/zip';
		$this->_httpHeaders['Content-Disposition']='attachment; filename="'.$this->zipFilename.'"';
		$this->addHttpHeader('Content-Description','File Transfert',false);
		$this->addHttpHeader('Content-Transfer-Encoding','binary',false);
		$this->addHttpHeader('Pragma','no-cache',false);
		$this->addHttpHeader('Cache-Control','no-store, no-cache, must-revalidate, post-check=0, pre-check=0',false);
		$this->addHttpHeader('Expires','0',false);
		$this->_httpHeaders['Content-length']=strlen($zipContent);
		$this->sendHttpHeaders();
		echo $zipContent;
		flush();
		return true;
	}
}
