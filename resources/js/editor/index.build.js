import CKEditor from '@ckeditor/ckeditor5-build-classic';
/* import Underline from '@ckeditor/ckeditor5-basic-styles/src/underline';
import Subscript from '@ckeditor/ckeditor5-basic-styles/src/subscript';
import Superscript from '@ckeditor/ckeditor5-basic-styles/src/superscript';
import Alignment from '@ckeditor/ckeditor5-alignment/src/alignment';
import Font from '@ckeditor/ckeditor5-font/src/font';
import Highlight from '@ckeditor/ckeditor5-highlight/src/highlight'; */

import UploadAdapter from './plugins/uploadAdapter';

// Add upload manager separate to build
// Allows easy modifications if needed
function InitUploadAdapter(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
    return new UploadAdapter( loader );
  };
}

CKEditor.create(document.querySelector('#editor'), {
  toolbar: {
    items: [
      'undo',
      'redo',
      '|',
      'bold',
      'italic',
      'underline',
      '|',
      'subscript',
      'superscript',
      'blockQuote',
      '|',
      'alignment:left',
      'alignment:center',
      'alignment:right',
      'alignment:justify',
      '|',
      'imageUpload',
      'mediaEmbed',
      'link',
      '|',
      'fontFamily',
      'fontSize',
      'fontColor',
      'highlight',
      '|',
      'heading'
    ]
  },
  extraPlugins: [
    //Alignment,
    //Font,
    InitUploadAdapter,
    //Underline,
    // Subscript,
    // Superscript,
    // Highlight
  ]
})
  .then(editor => {
    console.log(editor);
    console.log('Editor loaded.');
  })
  .catch(err => {
    console.log(err);
  });
