<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Image Upload in Laravel using Dropzone</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
 </head>
 <body>
  <div class="container-fluid">
      <br />
    <h3 align="center">Image Upload in Laravel using Dropzone</h3>
    <br />
        
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Select Image</h3>
        </div>
        <div class="panel-body">
          <form id="dropzoneForm" class="dropzone" action="{{ route('dropzone.upload') }}" >
            {{ csrf_field() }}
            

          </form>
          <div align="center">
            <button type="button" class="btn btn-info" id="submit-all">Upload</button>
          </div>
        </div>
      </div>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Uploaded Image</h3>
        </div>
        <div class="panel-body" id="uploaded_image">
          
        </div>
      </div>
    </div>
 </body>
</html>

<table class="table table-bordered" id="dynamic_field">  
  <tr>  
      <td style="width: 50%">
          <select class="form-control" name="taisan[]">
                  <option value="123"> 13</option>
          </select>
      </td>
      <td style="width: 15%">
          <input type="text" name="soluong[]" placeholder="Số lượng" class="form-control name_list" required />
      </td>  
      <td style="width: 5%"><button type="button" name="add" id="add" class="btn btn_primary">Thêm tài sản</button></td>  
  </tr>  
</table>  



    <script type="text/javascript">

        Dropzone.options.dropzoneForm = {
            paramName : "file",
            autoProcessQueue : false, // tu dung chay
            acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
            maxFilesize: 256, // Set the maximum file size to 256 MB
            parallelUploads: 100,
            addRemoveLinks: true,
            uploadMultiple :true,





            init:function(){
            var submitButton = document.querySelector("#submit-all");
            myDropzone = this;

            submitButton.addEventListener('click', function(){
                myDropzone.processQueue();
            });

            this.on("complete", function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                {
                var _this = this;
                _this.removeAllFiles();
                }
                load_images();
            });

            }

        };

        load_images();

        function load_images()
        {
            $.ajax({
            url:"{{ route('dropzone.fetch') }}",
            success:function(data)
            {
                $('#uploaded_image').html(data);
            }
            })
        }

        $(document).on('click', '.remove_image', function(){
            var name = $(this).attr('id');
            $.ajax({
            url:"{{ route('dropzone.delete') }}",
            data:{name : name},
            success:function(data){
                load_images();
            }
            })
        });

    </script>
