<ul class="breadcrumb">
    <li>{@havefnubb~main.common.you.are.here@}</li>
    <li><a href="{jurl 'havefnubb~default:index'}" title="{@havefnubb~main.home@}">{@havefnubb~main.home@}</a>  >> {@havefnubb~post.list.of.new.posts@}</li>
</ul>

<h3>{@havefnubb~post.list.of.new.posts@}</h3>
<div class="pager-posts">
{pagelinks 'havefnubb~posts:shownew', array(), $nbPosts, $page, $nbPostPerPage, "page", $properties}
</div>
<table class="zebra-striped">
    <caption>{@havefnubb~post.list.of.new.posts@} : {$nbPosts}</caption>
    <thead>
        <tr>
            <th>{@havefnubb~forum.forumlist.forumname@}</th>
            <th>{@havefnubb~forum.forumlist.title@}</th>
            <th>{@havefnubb~member.common.author@}</th>
            <th>{@havefnubb~forum.forumlist.responses@}</th>
            <th>{@havefnubb~forum.forumlist.views@}</th>
            <th>{@havefnubb~forum.forumlist.last.comments@}</th>
        </tr>
    </thead>
    <tbody>
{if $nbPosts > 0}
{foreach $posts as $post}
        <tr>
            <td> <a href="{jurl 'havefnubb~posts:lists', array('id_forum'=>$post->id_forum,'ftitle'=>$post->forum_name)}" title="{@havefnubb~forum.forumlist.forumname@}">{$post->forum_name|eschtml}</a></td>
            <td> <a href="{jurl 'havefnubb~posts:view', array('id_post'=>$post->id_last_msg,'thread_id'=>$post->thread_id,'id_forum'=>$post->id_forum,'ftitle'=>$post->forum_name,'ptitle'=>$post->subject)}#p{$post->id_last_msg}" title="{@havefnubb~forum.forumlist.view.this.subject@}">{$post->subject|eschtml}</a></td>
            <td>
                {if $post->login == null} {@havefnubb~member.guest@}{else} <a href="{jurl 'jcommunity~account:show',array('user'=>$post->login)}" title="{$post->nickname|eschtml}">{$post->nickname|eschtml}</a>{/if}
            </td>
            <td>
                {$post->nb_replies}
            </td>
            <td>
                {$post->nb_viewed}
            </td>
            <td>{zone 'havefnubb~postlc',array('thread_id'=>$post->thread_id)}
            </td>
        </tr>
{/foreach}
{else}
        <tr><td colspan="6" class="alert-message info">{@havefnubb~post.no.new.post@}</td></tr>
{/if}
    </tbody>
</table>
<div class="pager-posts">
{pagelinks 'havefnubb~posts:shownew', array(),$nbPosts , $page, $nbPostPerPage, "page", $properties}
</div>