{if $nbMembers > 0 }
<div class="headings">
    <h3><span>{@havefnubb~main.member.online.today@}</span></h3>
</div>
<div id="online-today">
<ul class="user-online-today">
{foreach $members as $member}
    <li><a href="{jurl 'jcommunity~account:show',array('user'=>$member->login)}" title="{$member->login|eschtml}">{$member->login|eschtml}</a>,</li>
{/foreach}
</ul>
</div>
{/if}