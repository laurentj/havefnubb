<div id="body">
{jmessage}
{if $step == 'home'}    
<h2>{@hfnuinstall~install.home.welcome@}</h2>
<p>{@hfnuinstall~install.home.process.description@}</p>
<p><a href="{jurl 'hfnuinstall~default:index', array('step'=>'check')}">{@hfnuinstall~install.home.process.start@}</a></p>
{/if}
{if $step == 'check'}
    {if $continue}
<p><a href="{jurl 'hfnuinstall~default:index', array('step'=>'config')}">{@hfnuinstall~install.next@}</a></p>
    {else}
<p>{@hfnuinstall~install.check.the.prerequisites.are.not.satisfying@}</p>
    {/if}
{/if}
{if $step == 'config'}
{form $form, 'hfnuinstall~default:index'}
<div id="config">
<fieldset>
    <legend>{@hfnuinstall~install.config.general@}</legend>
    <p>{ctrl_label 'title'} </p>
    <p>{ctrl_control 'title'} </p>
    
    <p>{ctrl_label 'description'} </p>
    <p>{ctrl_control 'description'} </p>
    
    <p>{ctrl_label 'theme'} </p>
    <p>{ctrl_control 'theme'} </p>
    
    <p>{ctrl_label 'rules'} </p>
    <p>{ctrl_control 'rules'} </p>
    
    <p>{ctrl_label 'webmaster_email'} </p>
    <p>{ctrl_control 'webmaster_email'} </p>
    
    <p>{ctrl_label 'admin_email'} </p>
    <p>{ctrl_control 'admin_email'} </p>
</fieldset>
</div>
<div>{formsubmit 'validate'} {formreset 'cancel'}</div>
{/form}
<p><a href="{jurl 'hfnuinstall~default:index', array('step'=>'db')}">{@hfnuinstall~install.next@}</a></p>
{/if}
{if $step == 'dbconfig'}
{form $form, 'hfnuinstall~default:index'}
<div id="dbconfig">
<fieldset>
    <legend>{@hfnuinstall~install.dbconfig.general@}</legend>
    {formcontrols}
    <p>{ctrl_label}<br/> {ctrl_control} </p>
    {/formcontrols}    
</fieldset>
<div>{formsubmit 'validate'} {formreset 'cancel'}</div>
</div>
{/form}
{/if}
{if $step =='installdb'}
{form $form, 'hfnuinstall~default:index'}
<div id="installdb">
<fieldset>
    <legend>{@hfnuinstall~install.installdb.general@}</legend>
    {formcontrols}
    <p>{ctrl_label}<br/> {ctrl_control} </p>
    {/formcontrols}
<div>{formsubmit 'validate'} {formreset 'cancel'}</div>    
</fieldset>
</div>
{/form}
{/if}
{if $step =='end'}
Fin
{/if}
</div>