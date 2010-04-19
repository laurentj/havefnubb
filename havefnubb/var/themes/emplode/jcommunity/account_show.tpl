{meta_html js $j_jelixwww.'jquery/jquery.js'}
{meta_html js $j_jelixwww.'jquery/ui/ui.core.min.js'}
{meta_html js $j_jelixwww.'jquery/ui/ui.tabs.min.js'}
{literal}
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	$("#container > ul").tabs();
});
//]]>
</script>
{/literal}
<div id="breadcrumbtop" class="headbox box_title">
    <h5>{jlocale 'havefnubb~member.memberlist.profile.of', array($user->login)}
{if $himself}
> <a id="user" class="user-image" href="{jurl 'jcommunity~account:prepareedit', array('user'=>$user->login)}">{@havefnubb~member.account.show.edit.your.profile@}</a>
{ifacl2 'auth.users.change.password'}
> <a class="user-edit-password user-image" href="{jurl 'havefnubb~members:changepwd', array('user'=>$username)}">{@havefnubb~member.pwd.change.of.password@}</a>
{/ifacl2}
{else}
> <a href="{jurl 'hfnucontact~default:index',array('to'=>$user->login)}" title="{jlocale 'havefnubb~member.common.send.an.email.to',array($user->login)}">{@havefnubb~member.common.contact.the.member.by.email@}</a>
{/if}
	</h5>
</div>
{hook 'hfbAccountShowBefore',array($user->login)}
<div id="post-message">{jmessage}</div>
<div id="profile">
	<div id="user-profile-avatar">
		{if $user->member_gravatar == 1}
			{gravatar $user->email,array('username'=>$user->login)}
		{else}
			{if file_exists('hfnu/images/avatars/'. $user->id.'.png') }
			{image 'hfnu/images/avatars/'. $user->id.'.png', array('alt'=>$user->login)}
			{elseif file_exists('hfnu/images/avatars/'. $user->id.'.jpg')}
			{image 'hfnu/images/avatars/'. $user->id.'.jpg', array('alt'=>$user->login)}
			{elseif file_exists('hfnu/images/avatars/'. $user->id.'.jpeg')}
			{image 'hfnu/images/avatars/'. $user->id.'.jpeg', array('alt'=>$user->login)}
			{elseif file_exists('hfnu/images/avatars/'. $user->id.'.gif')}
			{image 'hfnu/images/avatars/'. $user->id.'.gif', array('alt'=>$user->login)}
			{/if}
		{/if}
	</div>
	<div id="container">
		<ul>
			<li><a href="#user-profile-general"><span class="user-general user-image">{@havefnubb~member.general@}</span></a></li>
			<li><a href="#user-profile-pref"><span class="user-pref user-image">{@havefnubb~member.pref@}</span></a></li>
			{hook 'hfbAccountShowTab',array($user->login)}
		</ul>
		<div id="user-profile-general">
			<fieldset>
				<div class="legend"><span class="user-general user-image">{@havefnubb~member.general@}</span></div>
	{if $user->member_show_email == 'Y'}
	{assign $class="three-cols"}
	{else}
	{assign $class="two-cols"}
	{/if}
				<div class="{$class} form_row">
					<div class="form_property">
						<label class="user-name user-image"><strong>{@havefnubb~member.nickname@}</strong></label>
					</div>
					<div class="form_value">
						{$user->nickname|eschtml}
					</div>

	{if $user->member_show_email == 'Y'}
					<div class="form_property">
						<label class="user-email user-image"><strong>{@havefnubb~member.email@}</strong></label>
					</div>
					<div class="form_value">
						{mailto array('address'=>$user->email,'encode'=>'hex','text'=>@havefnubb~member.common.email@)}
					</div>
	{/if}
					<div class="form_property">
						<label class="user-birthday user-image"><strong>{@havefnubb~member.common.age@}</strong></label>
					</div>
					<div class="form_value">
						{age $user->member_birth}
					</div>
					<div class="clearer">&nbsp;</div>
				</div>
			</fieldset>
			<fieldset>
				<div class="legend"><span class="user-location user-image">{@havefnubb~member.common.location@}</span></div>
				<div class="form_row">
					<div class="form_property">
						<label class="user-town user-image"><strong>{@havefnubb~member.common.town@}</strong></label>
					</div>
					<div class="form_value">
						{$user->member_town|eschtml}
					</div>
					<div class="form_property">
						<label><strong>{@havefnubb~member.common.country@}</strong></label>
					</div>
					<div class="form_value">
						{if $user->member_country != ''}
						{image 'hfnu/images/flags/'.strtolower($user->member_country).'.gif', array('alt'=>$user->member_country)} {country $user->member_country}
						{/if}
					</div>
					<div class="form_property">
						<label class="user-website user-image"><strong>{@havefnubb~member.common.website@}</strong></label>
					</div>
					<div class="fom_value">
						{if $user->member_website != ''}
						<a href="{$user->member_website|eschtml}" title="{@havefnubb~member.common.website@}">{$user->member_website|eschtml}</a>
						{/if}
					</div>
					<div class="clearer">&nbsp;</div>
				</div>

			</fieldset>
			<fieldset>
				<div class="legend"><span class="user-stats user-image">{@havefnubb~member.common.stats@}</span></div>
				<div class="form_row">
					<div class="form_property">
						<label><strong>{@havefnubb~member.common.rank@}</strong></label>
					</div>
					<div class="form_value">
						{zone 'havefnubb~what_is_my_rank',array('nbMsg'=>$user->nb_msg)}
					</div>
					<div class="form_property">
						<label><strong>{@havefnubb~member.memberlist.nb.posted.msg@}</strong></label>
					</div>
					<div class="form_value">
						{$user->nb_msg}
					</div>
					<div class="clearer">
						&nbsp;
					</div>

					<div class="form_property">
						<label><strong>{@havefnubb~member.common.registered.since@}</strong></label>
					</div>
					<div class="form_value">
						{$user->member_created|jdatetime}
					</div>
					<div class="form_property">
						<label><strong>{@havefnubb~member.common.last.connection@}</strong></label>
					</div>
					<div class="form_value">
						{$user->member_last_connect|jdatetime:'timestamp'}
					</div>
					<div class="clearer">
						&nbsp;
					</div>
				</div>
			</fieldset>
		</div>

		<div id="user-profile-pref">
			<fieldset>
				<div class="legend"><span class="user-pref user-image">{@havefnubb~member.pref@}</span></div>
				<div class="form_row">
					<div class="form_property">
						<label><strong>{@havefnubb~member.common.language@}</strong></label>
					</div>
					<div class="form_value">
						{$user->member_language}
					</div>
					<div class="clearer">&nbsp;</div>
				</div>
				<div class="form_row">
					<div class="form_property">
						<label><strong>{@havefnubb~member.common.account.signature@}</strong></label>
					</div>
					<div class="form_value">
						{$user->member_comment|wiki:'hfb_rule'|stripslashes}
					</div>
					<div class="clearer">&nbsp;</div>
				</div>
			</fieldset>
		</div>

		{hook 'hfbAccountShowDiv',array('user'=>$user->login)}
	</div>
</div>
{hook 'hfbAccountShowBefore',array($user->login)}
