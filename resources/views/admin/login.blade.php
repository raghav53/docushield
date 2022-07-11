<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from dore-jquery.coloredstrategies.com/Pages.Auth.Login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 13:06:19 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="{{asset('admin/font/iconsmind-s/css/iconsminds.css')}}">
    <link rel="stylesheet" href="{{asset('admin/font/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap.rtl.only.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap-float-label.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">

    <link rel="stylesheet" href="{{asset('admin/css/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/component-custom-switch.min.css')}}">

       <link href="{{asset('plugins/snackbar/js-snackbar.css')}}" rel="stylesheet" />
      <link href="{{asset('plugins/parsley/parsley.css')}}" rel="stylesheet" />
</head>

<body class="background show-spinner no-footer">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    @if($errors->any())
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Dismissing</h5>
                            <div class="alert alert-warning alert-dismissible fade show rounded mb-0" role="alert">
                                <strong>Error!</strong> {{$errors->first()}}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="card auth-card">
                        <div class="position-relative image-side">
                            <p class="text-white h2">MAGIC IS IN THE DETAILS</p>
                            <p class="white mb-0">Please use your credentials to login.<br>If you are not a member,
                                please <a href="#" class="white">register</a>.</p>
                        </div>
                        <div class="form-side"><a href="Dashboard.Default.html"><span class="logo-single"></span></a>
                            <h6 class="mb-4" id="login_title">Login</h6>
                            <form id="login_admin" action="{{url('post_admin')}}" method="POST" data-parsley-validate>
                                @csrf
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="email" name="email" id="email" required>
                                    <span>E-mail</span></label> <label class="form-group has-float-label mb-4">
                                        
                                        <input class="form-control" type="password" name="password" id="password" placeholder="" required>
                                    <span id="pwdLabel">Password</span></label>
                                 
                             
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="javascript:void(0)"  id="forgot_pwd" onclick="forgot_password()">Forget
                                        password?</a>  
                                        <div id="forgot_btn">
                                        <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button></div>
                                        </div>  
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="{{asset('admin/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/dore.script.js')}}"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>

    <script src="{{asset('admin/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/mousetrap.min.js')}}"></script>
    <script src="{{asset('admin/js/dore.script.js')}}"></script>

     <script src="{{asset('plugins/snackbar/js-snackbar.js')}}"></script>
    <script>
        // $(document).ready(function() {
        //     var err = jQuery('#err').val();
        //     alert(err);
        //     if(isset(err) && err==0){
        //         document.getElementById("right_err").click();
        //     }
        // });
    </script>
    <script>
        function login_admin() {
            jQuery('.field_error').html('');
            jQuery('#thank_you_msg').html('Please Wait...');
            var url = "{{ url('post_admin') }}";
            jQuery.ajax({
                url: url,
                data: jQuery('#login_admin').serialize(),
                type: 'post',
                success: function(result) {


                    if (result.status == "success") {
                        jQuery('#login_user')[0].reset();
                        jQuery('#thank_you_msg').html(result.msg);
                        swal("Successfully Login", result.msg, "success");
                        window.location.href = '/index';
                    } else {
                        swal("oops!", 'invalid details', "error");
                    }
                }
            });
            console.log(result);
        }
    </script>
    <script>
          function forgot_password()
            {
                jQuery('#password').hide();
                jQuery('#pwdLabel').hide();
                jQuery('#forgot_pwd').hide();
                var html  = '<button type="button" onclick="send_password()"  class="btn btn-primary btn-lg btn-shadow">Send reset password link</button>'
              jQuery('#forgot_btn').html(html);
                jQuery('#email').focus();
            }

             function send_password()
            {
              
                var email =  jQuery('#email').val();
                if(email == ''){
                    alert('Enter Email');
                    return;
                }
                var img = "{{URL::asset('questor/images/loader.gif')}}";
                var html  = '<button type="button"  class="btn btn-primary submit-btn">Please Wait.....</button>'
                 jQuery('#forgot_btn').html(html);
                var url = "{{url('sendResetPasswordLinkAdmin')}}";
            $.ajax({
                type: "POST",
                url: url,
                headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
              },
                data: {
                    'email': email,
                },
                success: function(data) {
                    if(data.status == 200){
                        var message = data.msg;
                        var status = 'success';
                    }else{
                        var message = data.msg;
                        var status = 'error';
                    }
                    new SnackBar({
                     message: message,
                     status: status,
                     position: "tc",
                     timeout: 8000,
                     dismissible: true
                         });

                         var html  = '<button type="button" onclick="send_password()"  class="btn btn-primary submit-btn">Send reset password link</button>'
                      jQuery('#forgot_btn').html(html);

                      },

                });
            }

    </script>
    
</body>
<!-- Mirrored from dore-jquery.coloredstrategies.com/Pages.Auth.Login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 13:06:19 GMT -->
<script>
        @if(session() -> has('msg'))

        new SnackBar({
            message: "<?= session()->get('msg')  ?>",
            status: "<?= session()->get('status')  ?>",
            position: "br",
            timeout: 10000,
            dismissible: true
        });
        @endif
    </script>
    <script>
        @if($errors -> any())

        new SnackBar({
            message: "<?= implode('', $errors->all(':message'))  ?>",
            status: "error",
            position: "bc",
            timeout: 10000,
            dismissible: true
        });
        @endif
    </script>
</html>