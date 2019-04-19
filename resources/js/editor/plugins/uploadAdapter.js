class UploadAdapter {
  constructor(loader) {
    this.loader = loader;
    this.client = window.axios;
  }

  upload() {
    let data = new FormData();
    data.append('uploaded-file', this.loader.file)
    
    this.__initCancelToken();
    console.log(this.token);
    return new Promise((resolve, reject) => {
      this.client.post('/editor/upload', data, {
        headers: {
          'Content-Type': 'image/form-data'
        },
        //cancelToken: this.token // fix
      })
      .then(res => res.data)
      .then((data) => {
        console.log(data);
        resolve({
          default: data.url
        });
      });
    });
  }

  abort() {
    if ( this.token ) {
      this.token.cancel('Cancelled by user.');
    }
  }
}

export default UploadAdapter;