{@havefnubb~main.subscribe.hello@}

{@havefnubb~post.new.comment.received.on.the.post@}

{jfullurl 'havefnubb~posts:view',
array('id_post'=>$post->id_post,
        'thread_id'=>$post->thread_id,
        'id_forum'=>$post->id_forum,
        'ftitle'=>$post->forum_name,
        'ptitle'=>$post->subject)}#p{$post->id_post}

{@havefnubb~member.your.subscriptions@} :
{jfullurl 'jcommunity~account:prepareedit', array('user'=>$login)}

{@havefnubb~post.new.comment.received.unsubscribe@} :
{jfullurl 'havefnubb~posts:unsubscribe',array('id_post'=>$post->thread_id)}
