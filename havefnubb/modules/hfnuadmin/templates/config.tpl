{form $form, 'hfnuadmin~default:config'}
<fieldset>
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

<p>{ctrl_label 'posts_per_page'} </p>
<p>{ctrl_control 'posts_per_page'} </p>
<p>{@hfnuadmin~config.posts_per_page.description@}</p>

<p>{ctrl_label 'replies_per_page'} </p>
<p>{ctrl_control 'replies_per_page'} </p>
<p>{@hfnuadmin~config.replies_per_page.description@}</p>

<p>{ctrl_label 'members_per_page'} </p>
<p>{ctrl_control 'members_per_page'} </p>
<p>{@hfnuadmin~config.members_per_page.description@}</p>

<p>{ctrl_label 'stats_nb_of_lastpost'} </p>
<p>{ctrl_control 'stats_nb_of_lastpost'} </p>
<p>{@hfnuadmin~config.stats_nb_of_lastpost.description@}</p>
</fieldset>
 
<div>{formsubmit 'validate'} {formreset 'cancel'}</div>
{/form}