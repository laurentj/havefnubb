{meta_html css $j_themepath .'css/hfnusearch.css'}
<div id="breadcrumbtop" class="headbox">
    <h3>{@hfnusearch~search.search.perform@}</h3>    
</div>
<div id="hfnusearch">
<div id="post-message">{jmessage}</div>
<form action="{formurl 'hfnusearch~default:query'}" method="post">  
    <fieldset>
    <div class="legend"><h3>{@hfnusearch~search.in.all.forums@}</h3></div>
    <div class="form_row">
        {formurlparam 'hfnusearch~default:query'}
        <input type="hidden" name="perform_search_in" value="words"/>
        <div class="form_property">{@hfnusearch~search.hfnu_q.search@}</div>
        
        <div class="form_value">
            <input type="text" name="hfnu_q" size="31" />    
        </div>
        <div class="clearer">&nbsp;</div>

    </div>
    <div class="form_row form_row_submit">    
        <div class="form_value">
            <input class="button" type="submit" name="validate" value="{@hfnusearch~forum.search.okBt@}" />
        </div>
        <div class="clearer">&nbsp;</div>
    </div>
  </fieldset> 
</form>
{zone 'hfnusearch~searchForum'}
{zone 'hfnusearch~searchAuthor'}
</div>