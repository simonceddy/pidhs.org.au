
import PidhsEditor from './build';

import UploadAdapter from './plugins/uploadAdapter';

function InitUploadAdapter(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
    return new UploadAdapter( loader );
  };
}

new PidhsEditor(document.querySelector('#editor'), {
  extraPlugins: [InitUploadAdapter]
})
.then((editor) => {
  console.log(editor);
})
.catch(err => {
  console.log(err);
});