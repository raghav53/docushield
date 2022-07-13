<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from dore-jquery.coloredstrategies.com/Dashboard.Content.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 13:06:18 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Docushield Admin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- <link rel="icon" type="image/x-icon" href="{{asset('questor/images/questor-coin.png')}}"> -->
    <link rel="stylesheet" href="{{asset('admin/font/iconsmind-s/css/iconsminds.css')}}">
    <link rel="stylesheet" href="{{asset('admin/font/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap.rtl.only.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/datatables.responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/glide.core.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap-stars.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/component-custom-switch.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('admin/css/dore.light.blue.min.css')}}"> -->

    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap-float-label.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor/bootstrap-tagsinput.css')}}">
    <link href="{{asset('plugins/snackbar/js-snackbar.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/parsley/parsley.css')}}" rel="stylesheet" />
    <!-- {{-- CKEditor CDN --}} -->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <style>
        .card.auth-card {
            padding: 52px 32px;
        }

        .circular_image {
            text-align: center;
        }

        .circular_image img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            background-color: #0A0F33;
            vertical-align: middle;
            text-align: center;
            margin: 0 auto;

        }

        .circular_image_profile {
            border-radius: 50% 50% 50% 50%;
            width: 100px;
            height: 100px;
            margin: 20px;
            /* margin: -28px; */
        }

        .bannerSize {
            width: 424px;
            height: 136px !important;
        }

        .profile_pic {
            vertical-align: middle;
            border-radius: 50%;
            width: 90px;
            height: 90px;
        }
    </style>
</head>
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left"><a href="#" class="menu-button d-none d-md-block"><svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg> <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg> </a><a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg></a>

            <!-- <a class="btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block"
                href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a> -->

        </div><a class="navbar-logo" href="{{url('/adminDashboard')}}"><span class="logo d-none d-xs-block"></span> <span class="logo-mobile d-block d-xs-none"></span></a>
        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">

                <!-- <div class="position-relative d-none d-sm-inline-block"><button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="simple-icon-grid"></i></button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="iconMenuDropdown"><a href="{{url('/showUsersList/creators')}}" class="icon-menu-item"><i class="iconsminds-equalizer d-block"></i>
                            <span>Creators</span> </a><a href="{{url('/showUsersList/questors')}}" class="icon-menu-item"><i class="iconsminds-male-female d-block"></i> <span>Questors</span> </a><a href="javascript:void(0)" class="icon-menu-item"><i class="iconsminds-puzzle d-block"></i> <span>Library</span>
                        </a><a href="javascript:void(0)" class="icon-menu-item"><i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Feedback</span> </a><a href="javascript:void(0)" class="icon-menu-item"><i class="iconsminds-file d-block"></i> <span>Session</span> </a>
                    </div>
                </div> -->
                <div class="position-relative d-inline-block"><button class="header-icon btn btn-empty" type="button" id="notificationButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="simple-icon-bell"></i> <span class="count">3</span></button>
                    <!-- <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom"><a href="#"><img src="img/profile-pic-l-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle"></a>
                                <div class="pl-3"><a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a></div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom"><a href="#"><img src="img/notification-thumb.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle"></a>
                                <div class="pl-3"><a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a></div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom"><a href="#"><img src="img/notification-thumb-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle"></a>
                                <div class="pl-3"><a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a></div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3"><a href="#"><img src="img/notification-thumb-3.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle"></a>
                                <div class="pl-3"><a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- </div><button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton"><i class="simple-icon-size-fullscreen"></i> <i class="simple-icon-size-actual"></i></button>
            </div> -->
                    <div class="user d-inline-block"><button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="name">{{Auth::User()->name}}</span>
                   @if(Auth::User()->image!='')  
                   <span><img alt="Profile Picture" src="{{asset('images')}}/{{Auth::User()->image}}"></span>
                   @else
                   <span><img alt="Profile Picture" src="{{asset('admin/img/user.jpg')}}"></span>
                   @endif
                    </button>
                        <div class="dropdown-menu dropdown-menu-right mt-3">
                            <a class="dropdown-item" href="{{url('adminAccount')}}">Account</a>
                            <a class="dropdown-item" href="{{url('adminlogout')}}">Sign out</a>
                        </div>
                    </div>
                </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class=" {{ request()->is('adminDashboard') ? 'active' : ''}}"><a href="{{url('/adminDashboard')}}"><i class="iconsminds-big-data"></i>
                            <span>Dashboard</span></a></li>


                    <!-- <li class=" {{ request()->is('showLibraryList') ? 'active' : ''}}"><a href="{{url('showLibraryList')}}"><i class="iconsminds-folder-edit"></i> Library</a></li> -->

                    <li class=" {{ request()->is('mainBanner') ? 'active' : ''}}  {{ request()->is('everythingYouNeed') ? 'active' : ''}} {{ request()->is('whatTheySay') ? 'active' : ''}} {{ request()->is('blog') ? 'active' : ''}} {{ request()->is('recentMedia') ? 'active' : ''}}"><a href="#layouts"><i class="iconsminds-folder-edit"></i> Home Page</a></li>
                    <!-- <li class=" {{ request()->is('sessionFeedback') ? 'active' : ''}}"><a href="{{url('sessionFeedback')}}"><i class="iconsminds-mail-favorite"></i> Feedback</a></li>

                    <li class=" {{ request()->is('sessionHistory') ? 'active' : ''}}"><a href="{{url('sessionHistory')}}"><i class="iconsminds-stopwatch"></i> Session History</a></li>-->

                    <li class=" {{ request()->is('adminAccount') ? 'active' : ''}}"><a href="{{url('adminAccount')}}"><i class="iconsminds-bucket"></i> Account</a></li>

                    <!--<li class=" {{ request()->is('coinsMaster') ? 'active' : ''}}  {{ request()->is('showUserCoins') ? 'active' : ''}}"><a href="#coins"><i class="iconsminds-bucket"></i> Coins Master</a></li>
                    <li><a href="https://dore-jquery-docs.coloredstrategies.com/" target="_blank"><i class="iconsminds-library"></i> Docs</a></li> -->
                </ul>
            </div>
        </div>
        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li><a href="{{url('/adminDashboard')}}"><i class="simple-icon-rocket"></i> <span class="d-inline-block">Dashboard</span></a></li>
                    <!-- <li><a href="Dashboard.Analytics.html"><i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span></a></li> -->
                </ul>
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li><a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true" aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50"><i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Users</span></a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li><a href="{{url('mainBanner')}}"><i class="simple-icon-pie-chart "></i> <span class="d-inline-block">Main Banner</span></a></li>
                                <li><a href="{{url('secMainBanner')}}"><i class="simple-icon-pie-chart "></i> <span class="d-inline-block">Sec Main Banner</span></a></li>
                                <li><a href="{{url('everythingYouNeed')}}"><i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Need To know Section</span></a></li>
                                <li><a href="{{url('whatTheySay')}}"><i class="simple-icon-pie-chart"></i> <span class="d-inline-block">What they say Section</span></a></li>
                                <li><a href="{{url('blog')}}"><i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Blog Section</span></a></li>
                                <li><a href="{{url('recentMedia')}}"><i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Recent Media Section</span></a></li>

                            </ul>
                        </div>
                    </li>

                </ul>
                <!-- <ul class="list-unstyled" data-link="applications">
                    <li><a href=""><i class="simple-icon-picture"></i> <span class="d-inline-block">Library List</span></a></li>
                  
                </ul>
                <ul class="list-unstyled" data-link="ui">
                    <li><a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true" aria-controls="collapseForms" class="rotate-arrow-icon opacity-50"><i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Feedback</span></a>
                        <div id="collapseForms" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li><a href="javascript:void(0)"><i class="simple-icon-event"></i> <span class="d-inline-block">Feedback</span></a></li>
                         
                            </ul>
                        </div>
                    </li>
                   
                </ul>
                <ul class="list-unstyled" data-link="menu" id="menuTypes">
                    <li><a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true" aria-controls="collapseMenuTypes" class="rotate-arrow-icon"><i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Session History</span></a>
                        <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li><a href="javascript:void(0)"><i class="simple-icon-control-pause"></i> <span class="d-inline-block">Show session History</span></a></li>
                             
                        </div>
                    </li>
                    
                    
                </ul>
                <ul class="list-unstyled" data-link="collapseAccount" id="menuTypes">
                    <li><a href="#" data-toggle="collapse" data-target="#collapseMenuaccount" aria-expanded="true" aria-controls="collapseMenuaccount" class="rotate-arrow-icon"><i class="simple-icon-arrow-down"></i> <span class="d-inline-block">My Account</span></a>
                        <div id="collapseMenuaccount" class="collapse show" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li><a href="{{url('adminAccount')}}"><i class="simple-icon-control-pause"></i> <span class="d-inline-block">Account</span></a></li>
                             
                        </div>
                    </li>
                    
                    
                </ul>
                <ul class="list-unstyled" data-link="coins" id="coins">
                    <li><a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true" aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50"><i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Coins Master</span></a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li><a href="{{url('coinsMaster')}}"><i class="simple-icon-user-following"></i> <span class="d-inline-block">Coins Package</span></a></li>
                                <li><a href="{{url('showUserCoins')}}"><i class="simple-icon-user-follow"></i> <span class="d-inline-block">Purhased Coins</span></a></li>
                               
                            </ul>
                        </div>
                    </li>
                   
                </ul> -->
            </div>
        </div>
    </div>
    @yield('content')

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0"><a href="#" class="btn-link">Review</a></li>
                            <li class="breadcrumb-item mb-0"><a href="#" class="btn-link">Purchase</a></li>
                            <li class="breadcrumb-item mb-0"><a href="#" class="btn-link">Docs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('admin/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{asset('admin/js/vendor/moment.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/glide.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/progressbar.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/select2.full.js')}}"></script>
    <script src="{{asset('admin/js/vendor/nouislider.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('admin/js/vendor/Sortable.js')}}"></script>
    <script src="{{asset('admin/js/vendor/mousetrap.min.js')}}"></script>
    <script src="{{asset('admin/js/dore.script.js')}}"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <script src="{{asset('plugins/parsley/parsley.js')}}"></script>

    <script src="{{asset('admin/js/vendor/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/dropzone.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/typeahead.bundle.js')}}"></script>
    <script src="{{asset('plugins/snackbar/js-snackbar.js')}}"></script>

</body>
<!-- Mirrored from dore-jquery.coloredstrategies.com/Dashboard.Content.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 13:06:19 GMT -->
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
        position: "br",
        timeout: 10000,
        dismissible: true
    });
    @endif
</script>

<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output');
            output.src = reader.result;
            jQuery('#output').addClass('circular_image_profile');
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
<script>
    function addNew(id = '', header = '', text = '', image = '', link = '', isImage = '', name = '', position = '', data_type = '', keywords = '', description = '',short_desc='') {
        
        // alert(name);
        if ($('#descriptionData_' + id).length) {
            var desc = jQuery('#descriptionData_' + id).val();
            var short_descdata = jQuery('#short_descriptionData_' + id).val();
            var fb_link = jQuery('#facebookData_' + id).val();
            var twitter_link = jQuery('#twitterData_' + id).val();
            var youtube_link = jQuery('#youtubeData_' + id).val();
            jQuery('#fb_link').val(fb_link);
            jQuery('#twitter_link').val(twitter_link);
            jQuery('#youtube_link').val(youtube_link);
            jQuery('#name').val(name);
                jQuery('#position').val(position);
        $('.ck-reset').text('');
        if (desc != '') {
            ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
            jQuery('#description').val(desc);
            // $("textarea#description").val(desc)
        } else {
            ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
            jQuery('#description').val('');
        }
        } else {
              $('.ck-reset').text('');
              ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
               jQuery('#description').val('');
        }
        
        var html = '';

        if (id > 0) {
            var img = "{{URL::asset('images/')}}/" + image + "";
            var title = 'Edit Home Page Banner';
            jQuery('#header').val(header);
            jQuery('#home_page').val(id);
            jQuery('#text').val(text);
            // jQuery('#data_type').val(data_type);
            // jQuery('#image').val(image);
            jQuery('#link').val(link);
            jQuery('#keywords').val(keywords);
            jQuery('#short_desc').val(short_descdata);
            var dataType = '  <div><label>Video Platform</label> <select class="form-control" name="data_type"><option value="youtube">Youtube</option>  <option value="vimeo">vimeo</option> </select> </div>';
            jQuery('#platform_type').html(dataType);
            if (isImage == 1) {
                jQuery('#name').val(name);
                jQuery('#position').val(position);
            } else {
                html += '<label for="upload_image" class="upload-label"><span class="" aria-hidden="true" id="hide_img"><img id="output" class="circular_image_profile" src="' + img + '" /></span><input type="file" id="upload_image" accept="image/png, image/gif, image/jpeg" onchange="loadFile(event)" name="image" /></label>';
                jQuery('#upload_images').html(html);
            }

        } else {
            var img = "{{URL::asset('admin/img/cam.png')}}";
            var title = 'Add new Home Page Banner';
            jQuery('#header').val(header);
            jQuery('#home_page').val(id);
            jQuery('#text').val(text);
            jQuery('#keywords').val(keywords);
            jQuery('#short_desc').val(short_descdata);
            // jQuery('#image').val(image);
            jQuery('#link').val(link);
            var dataType = '  <div class="form-control"><label>Video Platform</label> <select class="form-control" name="data_type"required><option value="youtube">Youtube</option>  <option value="vimeo">vimeo</option> </select> </div>';
            jQuery('#platform_type').html(dataType);
            if (isImage == 1) {
                jQuery('#name').val(name);
                jQuery('#position').val(position);
            } else {
                html += '<label for="upload_image" class="upload-label"><span class="" aria-hidden="true" id="hide_img"><img id="output" class="circular_image_profile" src="' + img + '" /></span><input type="file" id="upload_image" accept="image/png, image/gif, image/jpeg" onchange="loadFile(event)" name="image" /></label>';
                jQuery('#upload_images').html(html);
            }

            jQuery('#check_html').html('Active');
        }
    }

    function myFunction() {
        var checkBox = document.getElementById("customCheck1");
        if (checkBox.checked == true) {
            jQuery('#check_html').html('Inactive');

        } else {
            jQuery('#check_html').html('Active');

        }
    }

    function DeleteMainPageData(id) {
        let text = "are you sure want to delete";
        if (confirm(text) == true) {
            window.location.href = "{{url('DeleteMainPageData')}}/" + id + "";

        } else {
            return;
        }
    }
</script>

</html>