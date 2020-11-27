
<!doctype html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>laravel 6 Ajax Form Submission Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link rel="stylesheet" href="{{ asset('public/ropzone-5.7.0/dist/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ropzone-5.7.0/dist/dropzone.css') }}">


    
    <style>
    .error{ color:red; } 
    </style>
  </head>

  <body>
    
    <div class="container">
        <h2 style="margin-top: 10px;">laravel 6 Ajax</h2>
        <br>
        <br>
        <form id="contact_us" method="post" action="javascript:void(0)">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Vui lòng nhập username" >
            <span class="text-danger">{{ $errors->first('username') }}</span>
          </div>

          <div class="form-group">
            <label for="email">Email Id</label>

            <input type="email" name="email" class="form-control" id="email" placeholder="Please enter email id">

            <span class="text-danger">{{ $errors->first('email') }}</span>
          </div>      

          <div class="form-group">
            <label for="mobile_number">Mật khẩu</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Vui lòng nhập mật khẩu" >
            <span class="text-danger">{{ $errors->first('password') }}</span>
          </div>

          <div class="form-group">
            <label >Nhap lai mật khẩu</label>
            <input type="password" name="prepassword" class="form-control" id="prepassword" placeholder="Vui lòng nhập lai mật khẩu" >
            <span class="text-danger">{{ $errors->first('prepassword') }}</span>
          </div>


          <div class="alert alert-success d-none" id="msg_div">
              <span id="res_message"></span>
          </div>

          <div class="form-group">
            <button type="submit" id="send_form" class="btn btn-success">Đăng ký</button>
          </div>
        </form>

        <form action="/file-upload" class="dropzone" enctype="multipart/form-data">
          <div class="fallback">
            <input name="file" type="file" multiple />
          </div>
        </form>

    </div>
    

    <script src="{{ asset('public/ropzone-5.7.0/dist/dropzone.js') }}"></script>
    <script src="{{ asset('public/ropzone-5.7.0/dist/dropzone.js.map') }}"></script>
    <script src="{{ asset('public/ropzone-5.7.0/dist/dropzone-amd-module.js') }}"></script>
    

    {{-- ///////////////////////////////// --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <script>
      if ($("#contact_us").length > 0) {
        $("#contact_us").validate({
          rules: {
            username: {
              required: true,
              maxlength: 50,
              remote: {
                url: "{{ route('check.username') }}",
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    username: function () {
                        return $("input[name='username']").val();
                    }
                },
                dataFilter: function (data) {
                    var json = JSON.parse(data);
                    if (json.msg == "true") {
                        return "\"" + "Username đã được sư dụng" + "\"";
                    } else {
                        return 'true';
                    }
                }
              }
            },

            password: {
              required: true,
              maxlength: 50
            },

            prepassword: {
              required: true,
              equalTo: '#password',
              maxlength: 50
            },
    
            email: {
              required: true,
              maxlength: 30,
              email: true,
              remote: {
                url: "{{ route('check.email') }}",
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                  email: function () {
                      return $("input[name='email']").val();
                  }
                },
                dataFilter: function (data) {
                    var json = JSON.parse(data);
                    if (json.msg == "true") {
                        return "\"" + "Email đã được sư dụng" + "\"";
                    } else {
                        return 'true';
                    }
                }
              }
            },    
          },
   
   
          messages: {
            username: {
              required: "Vui lòng nhập tên",
              maxlength: "Độ dài không quá 50 ký tự."
            },

            password: {
              required: "Vui lòng nhập mật khẩu",
              maxlength: "Độ dài không quá 50 ký tự."
            },

            prepassword: {
              required: "Vui lòng nhập mật khẩu",
              equalTo: "Vui lòng nhập lại mật khẩu",
              maxlength: "Độ dài không quá 50 ký tự."
            },

            email: {
              required: "Vui lòng nhập email",
              email: "Vui lòng nhập email hợp lệ",
              maxlength: "Tên email phải nhỏ hơn hoặc bằng 30 ký tự",
            },

          },
    
          submitHandler: function(form) {
      
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#send_form').html('Sending..');
            $.ajax({
              url: '{{ route('post.reg') }}' ,
              type: "POST",
              data: $('#contact_us').serialize(),
              success: function( response ) {
                  $('#send_form').html('Submit');
                  $('#res_message').show();
                  $('#res_message').html(response.msg);
                  $('#msg_div').removeClass('d-none');
                  document.getElementById("contact_us").reset(); 
                  setTimeout(function(){
                  $('#res_message').hide();
                  $('#msg_div').hide();
                  },10000);
      
              }
      
            });
      
          }
   
        })
   
      }
   
    </script>
   
  </body>
   
</html>