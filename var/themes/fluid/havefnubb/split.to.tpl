<div class="box">
    <h2>{@havefnubb~main.split.this.thread.from.this.message@} : "{$title|eschtml}"</h2>
    <div class="block">
{if $step == 1}
    {form $form, 'havefnubb~posts:splitTo'}    
        <fieldset>
            <legend>{@havefnubb~main.split.this.thread.from.this.message@} : "{$title|eschtml}"</legend>
            {ctrl_label 'choice'} {ctrl_control 'choice'} {formsubmit 'validate'} {formreset 'cancel'}
        </fieldset>
    {/form}
    </div>
</div>
{elseif $step == 2}
ok
{/if}
