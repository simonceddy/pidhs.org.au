import CKEditor from '@ckeditor/ckeditor5-build-classic';
import UploadAdapter from './uploadAdapter';

// Add upload manager separate to build
// Allows easy modifications if needed
function InitUploadAdapter(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
    return new UploadAdapter( loader );
  };
}

CKEditor.create(document.querySelector('#editor'), {
  /* toolbar: ['underline'] */
  extraPlugins: [InitUploadAdapter]
})
  .then(editor => {
    console.log(editor);
    console.log('Editor loaded.');
  })
  .catch(err => {
    console.log(err);
  });
