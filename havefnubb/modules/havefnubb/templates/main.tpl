{meta_html css $j_basepath.'themes/reset.css'}
{meta_html css $j_basepath.'themes/text.css'}
{meta_html css $j_basepath.'themes/grid.css'}
{meta_html css $j_basepath.'themes/nav.css'}
{meta_html css $j_basepath.'themes/ie.css'}

{meta_html js $j_jelixwww.'jquery/jquery.js'}
{meta_html js $j_themepath.'js/jquery-fluid16.js'}


{meta_html csstheme 'css/layout.css'}
{meta_html csstheme 'css/nav.css'}
{meta_html csstheme 'css/theme.css'}

{* meta_html js $j_themepath.'js/jquery-ui.js' *}
<div class="container_16">
    <div class="grid_16 heading">
        <div class="grid_11">
            <h1 id="branding"><a href="{jurl 'havefnubb~default:index'}" >{$TITLE}</a></h1>
        </div>
        <div class="grid_5">
            {zone 'jcommunity~status'}
        </div>
        {hook 'hfbMainInHeader'}
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="grid_16">
        {zone 'havefnubb~menu',array('selectedMenuItem'=>$selectedMenuItem)}
    </div>
    <div class="clear"></div>
    <div class="grid_16">
        <h2 id="page-heading">{$DESC}</h2>
    </div>
    <div class="clear"></div>

    <div class="grid_16">
    {$MAIN}
    </div>
    <div class="clear"></div>

    <div class="grid_16">
    <div class="box">
        {breadcrumb 8, ' > '}
    </div>
    </div>
    <div class="clear"></div>

    <div class="grid_16">
        <div class="box" id="footer">
            <p>{@havefnubb~main.poweredby@} <a href="http://www.havefnubb.org" title="HaveFnuBB!">HaveFnuBB!</a> - &copy; Copyright 2008 <a href="http://www.foxmask.info" title="FoxMaSk'Z H0m3">FoxMaSk</a>.</p>
        </div>
        {hook 'hfbMainInFooter'}
    </div>
    <div class="clear"></div>
</div>
