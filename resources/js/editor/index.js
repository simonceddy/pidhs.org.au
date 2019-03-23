import CKEditor from '@ckeditor/ckeditor5-build-classic';

CKEditor.create(document.querySelector('#editor'), {
  /* toolbar: ['underline'] */
})
  .then(editor => {
    console.log(Array.from(editor.ui.componentFactory.names()));
    console.log('Editor loaded.');
  })
  .catch(err => {
    console.log(err);
  });
