<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://forge.jelix.org/projects/havefnubb
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/
// class that manages the display of the information of the last comment !
class postlcZone extends jZone {
    protected $_tplname='postlc';

    protected function _prepareTpl(){
        
        $id_post = $this->param('id_post');
        $id_forum = $this->param('id_forum');        
        if (!$id_post and !$id_forum) return;
        
        $dao = jDao::get('posts');
        if ($id_post) {        
            $userPost = $dao->getUserLastCommentOnPosts($id_post);
        }
        
        if ($id_forum) {        
            $userPost = $dao->getUserLastCommentOnForums($id_forum);
        }

        $user = '';
        $noMsg = '';
        
        $dao = jDao::get('member');        
        if ($userPost)
            $user = $dao->getById($userPost->id_user);
        else
            $noMsg = jLocale::get('havefnubb~forum.postlc.no.msg');
            
        $this->_tpl->assign('user',$user);
        $this->_tpl->assign('post',$userPost);
        $this->_tpl->assign('msg',$noMsg);
    }
}