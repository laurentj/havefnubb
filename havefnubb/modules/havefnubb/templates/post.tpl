<div id="breadcrumbtop" class="headbox">
    <h3><a href="{jurl 'havefnubb~default:index'}" title="{@havefnubb~main.home@}">{@havefnubb~main.home@}</a> > <a href="{jurl 'havefnubb~category:view',array('id_cat'=>$category->id_cat)}" title="{$category->cat_name}">{$category->cat_name|eschtml}</a> > {$forum->forum_name|eschtml}</h3>
</div>
{if $previewtext !== null}
<h1>{@havefnubb~post.form.title.preview.page@}</h1>
{$previewsubject|eschtml}

{$previewtext|wiki:"wr3_to_xhtml"}
{/if}

<h1>{$heading}</h1>
{form $form, 'havefnubb~posts:save', array('id_post'=>$id_post)}

<fieldset>
<p>{ctrl_label 'subject'} </p>
<p>{ctrl_control 'subject'} </p>
<p>{ctrl_label 'message'} </p>
<p>{ctrl_control 'message'} </p>
</fieldset>
 
<div>{formsubmit 'validate'}</div>
{/form}