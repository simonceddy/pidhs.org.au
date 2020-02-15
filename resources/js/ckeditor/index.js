import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
// import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
/* import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
import Underline from '@ckeditor/ckeditor5-basic-styles/src/underline';
import Subscript from '@ckeditor/ckeditor5-basic-styles/src/subscript';
import Superscript from '@ckeditor/ckeditor5-basic-styles/src/superscript';
import PasteFromOffice from '@ckeditor/ckeditor5-paste-from-office/src/pastefromoffice';
import Alignment from '@ckeditor/ckeditor5-alignment/src/alignment';
import Font from '@ckeditor/ckeditor5-font/src/font';
import Heading from '@ckeditor/ckeditor5-heading/src/heading';
import BlockQuote from '@ckeditor/ckeditor5-block-quote/src/blockquote';
import Link from '@ckeditor/ckeditor5-link/src/link';
import MediaEmbed from '@ckeditor/ckeditor5-media-embed/src/mediaembed';
import Highlight from '@ckeditor/ckeditor5-highlight/src/highlight';
import Image from '@ckeditor/ckeditor5-image/src/image';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';
import ImageUpload from '@ckeditor/ckeditor5-image/src/imageupload';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import Table from '@ckeditor/ckeditor5-table/src/table'; */
/* import FileRepository from '@ckeditor/ckeditor5-upload/src/filerepository';
import ImgUploadAdapter from './plugins/uploadAdapter';

function InitUploadAdapter(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
    return new ImgUploadAdapter( loader );
  };
} */

ClassicEditor.create(document.querySelector('#editor'), {
  plugins: [
    /* Essentials,
    Paragraph,
    Bold,
    Italic,
    Underline,
    Subscript,
    Superscript,
    Alignment,
    Font,
    PasteFromOffice,
    Heading,
    Link,
    BlockQuote,
    MediaEmbed,
    FileRepository,
    Image,
    ImageStyle,
    ImageCaption,
    ImageUpload,
    ImageToolbar,
    Table,
    Highlight,
    UploadAdapter */
  ],
  // extraPlugins: [InitUploadAdapter],
  toolbar: {
    items: [
      /* 'undo',
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
      'heading' */
    ]
  },
  // image: {
	// 	toolbar: [
	// 		'imageStyle:full',
	// 		'imageStyle:side',
	// 		'|',
	// 		'imageTextAlternative'
	// 	]
	// },
	// table: {
	// 	contentToolbar: [
	// 		'tableColumn',
	// 		'tableRow',
	// 		'mergeTableCells'
	// 	]
	// },
  language: 'en'
})
.then((editor) => {
  console.log(editor);
})
.catch(err => {
  console.log(err);
  //console.log(Object.getOwnPropertyNames(err));
});
