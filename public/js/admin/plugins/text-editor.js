var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],
    ['blockquote', 'code-block'],
    [{'header': 1}, {'header': 2}],
    [{'list': 'ordered'}, {'list': 'bullet'}],
    [{'script': 'sub'}, {'script': 'super'}],
    [{'indent': '-1'}, {'indent': '+1'}],
    [{'direction': 'rtl'}],
    [{'size': ['small', false, 'large', 'huge']}],
    [{'header': [1, 2, 3, 4, 5, 6, false]}],
    [{'color': []}, {'background': []}],
    [{'font': []}],
    [{'align': []}],
    ['clean'],
    ['link', 'image', 'video']
];

var formats = [
    'background',
    'bold',
    'color',
    'font',
    'code',
    'italic',
    'link',
    'size',
    'strike',
    'script',
    'underline',
    'blockquote',
    'header',
    'indent',
    'list',
    'align',
    'direction',
    'code-block',
    'formula',
    'image',
    'video'
];
let styleImages = [];
$('.editor_quill').each(function(){
     let editorId = $(this).attr('id');
     if(editorId == "editor" || editorId == "editor-promotion"){
         let editor = new Quill('#'+editorId,
             {
                 modules: {toolbar: toolbarOptions},
                 placeholder: 'Nhập Thông Tin',
                 theme: 'snow',
                 formats: formats
             });
         editor.on('editor-change', function(eventName, ...args) {
             $thisHtml = $('#'+editorId);
             $inputHidden = $('#'+editorId).parent().find('input.editor');
             let images = $thisHtml.find('img');
             let editorCurrent = $(this);
             if(images.length > 0){
                 for (var i=0; i< images.length; i++) {
                     let src =  images[i].getAttribute('src');
                     if(src.startsWith('data:image')){
                         let elementImage = images[i];
                         $.ajax({
                             type:'POST',
                             url:'/admin/upload-image-quill-editor',
                             data: {
                                 src_image: src
                             },
                             headers: {
                                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                             },
                             success:function(data){
                                 if(data.status == 'success'){
                                     elementImage.src = data.src_image;
                                     $inputHidden.val(editor.root.innerHTML);
                                 }
                             }
                         });
                     }
                     let styleCopy = styleImages[src];
                     if(styleCopy != null && styleCopy!= undefined){
                         images[i].className = 'image-w40';
                         images[i].style = styleCopy;
                     }
                 }
             }

             $inputHidden.val(editor.root.innerHTML);
         });
         editor.clipboard.addMatcher('*', (node, delta) => {
             let images = node.getElementsByTagName('img');
             if(images.length > 0){
                 styleImages = [];
                 for (let i=0; i< images.length; i++) {
                     let src = images[i].getAttribute('src');
                     let style = images[i].getAttribute('style');
                     styleImages[src] = style;
                 }
             }
             return delta;
         })
     }
});

