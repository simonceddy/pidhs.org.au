class UploadAdapter {
  constructor(loader) {
    this.loader = loader;
  }

  upload() {
    const client = window.axios;
    return client.post('/editor/upload', {file: this.loader.file}, {
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      }
    }).then(res => console.log(res));
  }

  abort() {
    if ( this.xhr ) {
      this.xhr.abort();
    }
  }
}

export default UploadAdapter;