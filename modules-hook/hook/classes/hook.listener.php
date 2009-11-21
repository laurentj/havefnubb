<?php
/**
* @package   havefnubb
* @subpackage hook
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://havefnubb.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class hookListener extends jEventListener{
   /* Dummy listener to show what are the events that can be managed */
   function onhfbSampleBannerAnnouncement ($event) {
        $event->add( jZone::get('hook~samplebanner_accouncement') );
   }
   
   function onhfbBeforeCategoryList ($event) {
      
   }
   function onhfbCategoryList ($event) {
      
   }
   function onhfbAfterCategoryList ($event) {
      
   }
   function onhfbBeforeForumIndex ($event) {
      
   }
   function onhfbForumIndex ($event) {
      
   }
   function onhfbAfterForumIndex ($event) {
      
   }
   function onhfbBeforeStats ($event) {
      
   }
   function onhfbStats ($event) {
      
   }
   function onhfbAfterStats ($event) {
      
   }
   function onhfbBeforeOnline ($event) {
      
   }
   function onhfbOnline ($event) {
      
   }
   function onhfbAfterOnline ($event) {
      
   }
   function onhfbBeforeOnlineToday ($event) {
      
   }
   function onhfbOnlineToday ($event) {
      
   }
   function onhfbAfterOnlineToday ($event) {
      
   }
   function onhfbBeforePostsList($event) {
      
   }
   function onhfbPostsList($event) {
      
   }
   function onhfbAfterPostsList ($event) {
      
   }
   function onhfbBeforePostsReplies($event) {
      
   }
   function onhfbPostsReplies($event) {
      
   }
   function onhfbAfterPostsReplies ($event) {
      
   }   
   function onhfbBeforePostsEdit($event) {
      
   }
   function onhfbPostsEdit($event) {
      
   }
   function onhfbAfterPostsEdit ($event) {
      
   }
   function onhfbBeforeFlood($event) {
      
   }
   function onhfbFlood($event) {
      
   }
   function onhfbAfterFlood($event) {
      
   }
   function onhfbBeforeMembersList($event) {
      
   }
   function onhfbMembersList($event) {
      
   }
   function onhfbAfterMembersList($event) {
      
   }
   function onhfbBeforeMemberProfile($event) {
      
   }
   function onhfbMemberProfile($event) {
      
   }
   function onhfbAfterMemberProfile($event) {
      
   }
   function onhfbBeforeSearch($event) {
      
   }
   function onhfbSearch($event) {
      $author =  jZone::get('hfnusearch~searchAuthor');
      $forum  =  jZone::get('hfnusearch~searchForum');
      $zone = $author . $forum;
      $event->add( $zone );      
   }
   function onhfbAfterSearch($event) {
      
   }      
   function onhfbBeforeBan($event) {
      
   }
   function onhfbBan($event) {
      
   }
   function onhfbAfterBan($event) {
      
   }
   function onhfbJcommunityStatusConnected($event) {
      
   }
   function onhfbMainInHeader($event) {
      
   }
   function onhfbMainInFooter($event) {
      
   }         
}