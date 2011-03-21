
<div class="box">
    <h2>{@activeusers~activeusers.member.currently.online@}</h2>
    <div class="block">
    {hook 'ActiveUsersOnlineUsers'}
    <ul class="user-currently-online">
{foreach $members as $member}
    <li><a href="{jurl 'jcommunity~account:show',array('user'=>$member->login)}"
        title="{$member->name|eschtml}">{$member->name|eschtml}</a>,</li>
{/foreach}
{if $nbAnonymous == 1}<li>{jlocale 'activeusers~activeusers.one.anonymous'}</li>
{elseif $nbAnonymous > 1}<li>{jlocale 'activeusers~activeusers.anonymous.number', $nbAnonymous}</li>{/if}
    </ul>
    </div>
</div>
