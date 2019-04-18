import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';

import toolbar from './config/toolbar';
import plugins from './plugins';
//export default class Editor extends ClassicEditor {}

ClassicEditor.create(document.querySelector('#editor'), {
  plugins: plugins,
  toolbar: toolbar,
})
.then((editor) => {
  console.log(editor);
})
.catch(err => {
  console.log(err);
});