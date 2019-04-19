import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';

import toolbar from './config/toolbar';
import plugins from './plugins';

import UploadAdapter from './plugins/uploadAdapter';

function InitUploadAdapter(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
    return new UploadAdapter( loader );
  };
}

ClassicEditor.create(document.querySelector('#editor'), {
  plugins: plugins,
  extraPlugins: [InitUploadAdapter],
  toolbar: toolbar,
})
.then((editor) => {
  console.log(editor);
})
.catch(err => {
  console.log(err);
});