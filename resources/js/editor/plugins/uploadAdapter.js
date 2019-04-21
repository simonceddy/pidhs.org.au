class UploadAdapter {
  constructor(loader) {
    this.loader = loader;
    this.client = window.axios;
  }

  upload() {
    let data = new FormData();
    
    data.append('uploaded-file', this.loader.file);

    return this.client.post('/editor/upload', data, {
        headers: {
          'Content-Type': 'image/form-data'
        },
      })
      .then(res => {
        console.log(res.data);
        return Promise.resolve({
          default: res.data.url
        });
      })
      .catch(error => {
        console.log(error)
        return Promise.reject(error)
      });
  }

  abort() {
    if ( this.token ) {
      this.token.cancel('Cancelled by user.');
    }
  }
}

export default UploadAdapter;