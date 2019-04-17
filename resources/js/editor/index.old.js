//import CKEditor from '@ckeditor/ckeditor5-build-classic';
import Editor from './editor';
import UploadAdapter from './uploadAdapter';

// Add upload manager separate to build
// Allows easy modifications if needed
function InitUploadAdapter(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
    return new UploadAdapter( loader );
  };
}

console.log(Editor);
Editor.create(document.querySelector('#editor'), {
  extraPlugins: [InitUploadAdapter]
})
  .then(editor => {
    console.log(editor);
    console.log('Editor loaded.');
  })
  .catch(err => {
    console.log(err);
  });
