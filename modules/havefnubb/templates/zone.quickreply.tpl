<div class="headings">
    <h3><span>{@havefnubb~post.quickreply.quickreply@}</span></h3>
</div>
<div id="quickreply">
    {form $form, 'havefnubb~posts:savereply', array('id_post'=>$id_post)}
    
    <p>{ctrl_label 'subject'} </p>
    <p>{ctrl_control 'subject'} </p>
    <p>{ctrl_label 'message'} </p>
    <p>{ctrl_control 'message'} </p>
     
    <div>{formsubmit 'validate'} {formreset 'cancel'}</div>
    {/form}
</div>
