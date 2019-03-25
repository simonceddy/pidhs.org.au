class UploadAdapter {
  constructor(loader) {
    this.loader = loader;
  }

  upload() {
    const client = window.axios;
    let data = new FormData();
    data.append('file', this.loader.file)

    return new Promise((resolve, reject) => {client.post('/editor/upload', data, {
      headers: {
        'Content-Type': 'image/form-data'
      }
    }).then(res => console.log(res));});
  }

  abort() {
    if ( this.xhr ) {
      this.xhr.abort();
    }
  }
}

export default UploadAdapter;