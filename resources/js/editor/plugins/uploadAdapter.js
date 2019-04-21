class UploadAdapter {
  constructor(loader) {
    this.loader = loader;
    this.client = window.axios;
  }

  upload() {
    return this.loader.file
      .then(uploadedFile => {
        return new Promise( ( resolve, reject ) => {
          let data = new FormData();
          data.append('uploaded-file', uploadedFile);

          this.client.post('/editor/upload', data, {
            headers: {
              'Content-Type': 'image/form-data'
            },
          })
          .then( response => {

            console.log(response);
            if ( response.data.uploaded === true ) {
                resolve( {
                    default: response.data.url
                } );
            } else {
              console.log('rejected');
                reject( response.data.error );
            }
        })
        .catch( response => {
            reject( 'Upload failed' );
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