<div class="headings">
    <h3><span>{@havefnubb~main.last.messages@}</span></h3>
</div>
<div id="lastposts" >
<table width="100%">
{foreach $lastPost as $post}
<tr>
    <td><a href="{jurl 'havefnubb~posts:view',array('id_post'=>$post->id_post,'parent_id'=>$post->parent_id,'id_forum'=>$post->id_forum,'ptitle'=>$post->subject,'ftitle'=>$post->forum_name)}" title="{@havefnubb~forum.forumlist.view.this.subject@}">{$post->subject|eschtml}</a>    </a></td>
    <td id="lastposts-date">{$post->date_modified|jdatetime:'timestamp':'lang_datetime'}</td>
</tr>
{/foreach}
</table>
</div>