<h2>{@title@}</h2>
<div class="block">
<ul class="checkresults">
  {foreach $messages as $msg}
  <li class="{$msg[0]} {cycle array('odd','even')}">{$msg[1]}</li>
  {/foreach}
</ul>

{if $installok}
<p class="ok">{@installation.ok@}</p>
{else}
<p class="error">{@installation.cancelled@}</p>
{/if}
</div>