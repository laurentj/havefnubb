<div id="stats">
<h3><span>{@havefnubb~main.stats@}</span></h3>
<p>
{$posts} {@havefnubb~main.messages@} {jlocale 'havefnubb~main.in.threads', array($threads)} 
{jlocale 'havefnubb~main.posted.by.members' , array($members)}<br/>
{@havefnubb~main.last.post@} : <a href="{jurl 'posts:view',array('id_post'=>$lastPost->parent_id)}" title="{@havefnubb~main.goto.this.message@}">{$lastPost->subject|eschtml}</a><br/>
{@havefnubb~main.last.member@} : <a href="{jurl 'jcommunity~account:show',array('user'=>$lastMember->login)}" title="{$lastMember->login|eschtml}">{$lastMember->login|eschtml}</a>
</p>
</div>