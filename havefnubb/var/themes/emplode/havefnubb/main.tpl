{meta_html csstheme 'css/havefnuboard.css'}
{meta_html csstheme 'css/havefnuboard_posts.css'}
{meta_html csstheme 'css/havefnuboard_users.css'}
<div id="hfnuhead">
    <div class="center_wrapper">
        <div id="toplinks">
            <div id="toplinks_inner">
            {zone 'jcommunity~status'}
            </div>
        </div>
        <div class="clearer">&nbsp;</div>
        <div id="site_title">
            <h1><a href="{jurl 'havefnubb~default:index'}" >{$TITLE}</a></h1><p>{$DESC}</p>
        </div>
        {hook 'hfbMainInHeader'}
    </div>
</div>
<div id="navigation">
    <div class="center_wrapper">
        {ifacl2 'hfnu.admin.index'}
        {zone 'havefnubb~menu',array('selectedMenuItem'=>$selectedMenuItem,'admin'=>true)}
        {else}
        {zone 'havefnubb~menu',array('selectedMenuItem'=>$selectedMenuItem,'admin'=>false)}
        {/ifacl2}
        <div class="clearer">&nbsp;</div>
    </div>
</div>
<div id="main_wrapper_outer">
    <div id="main_wrapper_inner">
        <div class="center_wrapper">
            <div id="main_content">
{ifuserconnected}
                {include 'havefnubb~zone.mark_forum'}
{else}
                <div id="login-status">
                    <ul>
                        <li>{@havefnubb~member.status.welcome.and.thanks.to@} <a href="{jurl 'jcommunity~login:index'}">{@havefnubb~member.status.connect@}</a></li>
                        <li>{@havefnubb~member.status.or.to@} <a href="{jurl 'jcommunity~registration:index'}">{@havefnubb~member.status.register@}</a></li>
                        <li>{@havefnubb~member.status.or.maybe@} <a href="{jurl 'jcommunity~password:index'}">{@havefnubb~member.status.forgotten.password@} ?</a></li>
                    </ul>
                </div>
{/ifuserconnected}
            {$MAIN}
            </div>
            <div class="clearer">&nbsp;</div>
        </div>
    </div>
</div>
<div class="breadcrumb">
{breadcrumb 8, ' > '}
</div>
<div id="dashboard">
    <div id="dashboard_content">
        <div class="center_wrapper">

            <div class="col3 left">
                <div class="col3_content">
                {ifacl2 'hfnu.admin.post'}
                {zone 'havefnubb~lastposts',array('admin'=>true)}
                {else}
                {zone 'havefnubb~lastposts',array('admin'=>false)}
                {/ifacl2}
                </div>
            </div>

            <div class="col3mid left">
                <div class="col3_content">
                    {zone 'activeusers~onlineusers'}
                    {zone 'activeusers~online_today'}
                </div>
            </div>

            <div class="col3 right">
                <div class="col3_content">
                    {zone 'havefnubb~stats'}
                    {zone "jtags~tagscloud",array('destination'=>'havefnubb~default:cloud', 'maxcount'=>30)}
                </div>
            </div>

            <div class="clearer">&nbsp;</div>

        </div>
    </div>
</div>
<div id="footer">
    <div class="center_wrapper">
        <div class="left">
            <p><span>{@havefnubb~main.poweredby@} <a href="http://www.havefnubb.org" title="HaveFnuBB!">HaveFnuBB!</a> - &copy; Copyright 2008 - 2010 <a href="http://www.foxmask.info" title="FoxMaSk'z h0m3">FoxMaSk</a></span></p>
        </div>
        <div class="right">
            <a href="http://templates.arcsin.se/">Website template</a> by <a href="http://arcsin.se/">Arcsin</a>
        </div>
        {hook 'hfbMainInFooter'}
        <div class="clearer">&nbsp;</div>
    </div>
</div>
