import UploadAdapter from './uploadAdapter';

export default function InitUploadAdapter(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
    return new UploadAdapter( loader );
  };
}