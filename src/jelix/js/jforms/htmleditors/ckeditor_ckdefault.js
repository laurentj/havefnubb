function jelix_ckeditor_ckdefault(textarea_id, form_id, skin, config){
    var conf = {
            toolbar:
            [
                ['Cut','Copy','Paste','PasteText','PasteFromWord'],
                ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
                ['Maximize', 'ShowBlocks'],
                '/',
                ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
                ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
                ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                ['Link','Unlink','Anchor'],
                ['Image','Table','HorizontalRule', 'SpecialChar'],
            ],
            scayt_autoStartup : false
    };

    var ckConfig = {
        toolbar: [ 'heading', '|',
            'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|',
            'undo', 'redo' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraphe', class: 'ck-heading_paragraph' },
                { model: 'heading2', view: 'h2', title: 'Titre 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Titre 3 ', class: 'ck-heading_heading3' }
            ]
        },
        language: config.locale.substr(0,2).toLowerCase()
    };

    ClassicEditor
        .create( document.querySelector( '#'+textarea_id ), ckConfig )
        .then( function(editor) {
            jQuery('#'+form_id).bind('jFormsUpdateFields', function(event){
                editor.updateSourceElement();
            });
        } )
        .catch( function(error) {
            console.error( error );
        });
}
