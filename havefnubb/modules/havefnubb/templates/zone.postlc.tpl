{if $msg == ''}
<a href="{jurl 'havefnubb~posts:view',
    array('id_post'=>$post->id_post,
        'parent_id'=>$post->parent_id,
        'id_forum'=>$post->id_forum,
        'ftitle'=>$post->forum_name,
        'ptitle'=>$post->subject)}"
   title="{@havefnubb~main.goto_this_message@}">{$post->date_created|jdatetime:'timestamp':'lang_datetime'}</a> {@havefnubb~main.by@} <a href="{jurl 'jcommunity~account:show',array('user'=>$user->login)}" title="{$user->login|eschtml}">{$user->login|eschtml}</a>
{else}
{$msg}
{/if}
