import CKEditor from '@ckeditor/ckeditor5-build-classic';

CKEditor.create(document.querySelector('#editor'))
    .then(editor => {
        console.log('Editor loaded.');
    })
    .catch(err => {
        console.log(err);
    });
