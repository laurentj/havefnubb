{assign $line = true}    
{foreach $forums as $forum}
    <tr class="{if $line}odd{else}even{/if}">
        <th>{$forum->forum_name|eschtml}</th>
        {ifacl2 'hfnu.admin.forum.delete'}
        <td><a href="{jurl 'hfnuadmin~forum:delete',array('id_forum'=>$forum->id_forum)}" title="{$forum->forum_name|eschtml}" onclick="return confirm('{jlocale 'hfnuadmin~forum.confirm.deletion',array($forum->forum_name)}')">{@hfnuadmin~forum.forum.delete@}</a></td>
        {/ifacl2}
        {ifacl2 'hfnu.admin.forum.edit'}
        <td><a href="{jurl 'hfnuadmin~forum:edit',array('id_forum'=>$forum->id_forum)}" title="{$forum->forum_name|eschtml}">{@hfnuadmin~forum.forum.edit@}</a></td>
        {/ifacl2}
        <td>position :{$forum->forum_order}</td>
    </tr>
    {zone 'hfnuadmin~forumchild',array('id_forum'=>$forum->id_forum,'lvl'=>$forum->child_level+1)}
{assign $line = !$line}    
{/foreach}