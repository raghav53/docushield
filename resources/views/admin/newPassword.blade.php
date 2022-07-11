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
                            <h6 class="mb-4" id="login_title">Enter New Password</h6>
                            <form id="login_admin" action="{{url('saveNewPassword')}}" method="POST">
                                @csrf
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="email" name="email" id="email" value="{{$email}}">
                                    <span>E-mail</span></label> <label class="form-group has-float-label mb-4">

                                    <input class="form-control" type="password" name="password" id="password" oninput="validation('password')" placeholder="" required><a href="javascript:void(0 )"  onclick="show_password('password')">view</a>
                                    <span id="pwdLabel">Password</span></label>
                                <input class="form-control" type="password" name="password1" id="password1" oninput="validation('password1')" placeholder="Enter Password again" required><a href="javascript:void(0 )" onclick="show_password('password1')">view</a>
                               

                                <div id="pwdErr" style="color: black;"></div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <button class="btn btn-primary btn-lg btn-shadow" id="submitbtn" type="submit">Submit</button>
                                  
                                </div>
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
        function validation(reg) {
            str = jQuery('#' + reg).val();

            if (reg == 'password1' || reg == 'password') {
                var pwd1 = jQuery('#password').val();
                var pwd2 = jQuery('#password1').val();
                if (pwd2 == '') {
                    return;
                }
                if (pwd1 != pwd2) {
                    jQuery('#pwdErr').html('password not match');
                    $('#submitbtn').removeAttr("type").attr("type", "button");
                } else {
                    $('#submitbtn').removeAttr("type").attr("type", "submit");
                    jQuery('#pwdErr').html(' ');
                }
            } else if (str == "" || str.replace(/\s+/g, '').length == 0) {
                // alert("Enter your name");
                jQuery('#' + reg).val('');
                jQuery('#' + reg).focus();

                return false;
            }
        }

        function show_password(password) {
        var x = document.getElementById(password);
        if (x.type === "password") {
            x.type = "text";
            // var html = "<img src='{{asset("questor/images/show_eye.png")}}' /></a>";
            if(password == 'password1'){
                jQuery('#pwdImage1').html(html);

            }else{
                jQuery('#pwdImage').html(html);

            }
        } else {
            x.type = "password";
            // var html = "<img src='{{asset("questor/images/Show-hide.png")}}' /></a>";
            if(password == 'password1'){
                jQuery('#pwdImage1').html(html);

            }else{
                jQuery('#pwdImage').html(html);

            }
        }
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