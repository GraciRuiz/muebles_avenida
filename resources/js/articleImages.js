window.Dropzone = require('dropzone');
Dropzone.autoDiscover = false;

(function() {
    
  if(document.getElementById("drophere")){
       
  let csrfToken = document.querySelector("meta[name='csrf-token']")
  .getAttribute('content')
  let uniqueSecret = document.querySelector("input[name='uniqueSecret']")
  .getAttribute('value')
  
   let myDropzone = new Dropzone.default('#drophere', {
                url: '/article/images/upload',
                headers: {
                  'X-CSRF-TOKEN': csrfToken,
                  uniqueSecret: uniqueSecret
                }
            });
     }
  })();