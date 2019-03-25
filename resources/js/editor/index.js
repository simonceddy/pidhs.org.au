import CKEditor from '@ckeditor/ckeditor5-build-classic';
import UploadAdapter from './uploadAdapter';

//console.log(new UploadAdapter);

CKEditor.create(document.querySelector('#editor'), {
  /* toolbar: ['underline'] */
})
  .then(editor => {
    editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
      return new UploadAdapter( loader );
    };

    console.log(editor);
    console.log('Editor loaded.');
  })
  .catch(err => {
    console.log(err);
  });
