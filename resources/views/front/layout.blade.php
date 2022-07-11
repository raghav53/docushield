<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/main.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/slick/slick-theme.css')}}" />
    <title>Docushiled </title>
</head>
<!-- Button trigger modal -->

<body class="fixed-nav bg-dark1">
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('front/images/logo.png')}}" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-md-auto gap-2">
                        <li class="nav-item rounded">
                            <a class="nav-link active" aria-current="page" href="#"><i
                                    class="bi bi-house-fill me-2"></i>Product</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#"><i class="bi bi-people-fill me-2"></i>Company</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="javascript:void(0)"><i class="bi bi-telephone-fill me-2"></i>Blog</a>
                        </li>
                        <li class="nav-item dropdown rounded">
                            <a class="Get-app" href="">Get the App</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="copyright">
                    © By Docushield
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-ul">
                                <ul>
                                    <li>
                                        <a href="">Runs of Flux</a>
                                    </li>
                                    <li>
                                        <a href="">Powered of kadena</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-right link">
                            <div class="socail-ul">
                                <ul>
                                    <li>
                                        <a href=""><img src="{{asset('front/images/twitter.png')}}">Twitter</a>
                                    </li>
                                    <li>
                                        <a href=""><img src="{{asset('front/images/Tellgram.png')}}">Telegram</a>
                                    </li>
                                    <li>
                                        <a href=""><img src="{{asset('front/images/youtube.png')}}"> Youtube</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>

    <!--Bootstrap Bundle with Popper -->
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('front//slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">


        var helpers = {
            addZeros: function (n) {
                return (n < 10) ? '' + n : '' + n;
            }
        };

        function sliderInit() {
            var $slider = $('.center');
            $slider.each(function () {
                var $sliderParent = $(this).parent();
                $(this).slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: true,
                    prevArrow: "<img class='a-left control-c prev slick-prev' src='{{asset('front/images/after.png')}}>",
                    nextArrow: "<img class='a-right control-c next slick-next' src='{{asset('front/images/before.png')}}>",
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                adaptiveHeight: true
                            }
                        }
                    ]
                });

                if ($(this).find('.item').length > 1) {
                    $(this).siblings('.slides-numbers').show();
                }

                $(this).on('afterChange', function (event, slick, currentSlide) {
                    $sliderParent.find('.slides-numbers .active').html(helpers.addZeros(currentSlide + 1));
                });

                var sliderItemsNum = $(this).find('.slick-slide').not('.slick-cloned').length;
                $sliderParent.find('.slides-numbers .total').html(helpers.addZeros(sliderItemsNum));

            });

            //   $('.slick-next').on('click', function () {
            //     console.log('test');
            //     $('.slider-holder').slick('slickGoTo', 5);
            // });
        };

        sliderInit();

        $(".autoplay").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow: "<img class='a-left control-c prev slick-prev' src='{{asset('front/images/after.png')}}>",
            nextArrow: "<img class='a-right control-c next slick-next' src='{{asset('front/images/before.png')}}>",
            arrows: true,
            autoplaySpeed: 2000,
            responsive: [
                {

                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    },

                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        adaptiveHeight: true
                    }

                }
            ]
        });

    </script>
    <script>
         $(".vpop").on('click', function (e) {
            e.preventDefault();
            $("#video-popup-overlay,#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();

            var srchref = '', autoplay = '', id = $(this).data('id');
            if ($(this).data('type') == 'vimeo') var srchref = "//player.vimeo.com/video/";
            else if ($(this).data('type') == 'youtube') var srchref = "https://www.youtube.com/embed/";

            if ($(this).data('autoplay') == true) autoplay = '?autoplay=1';

            $("#video-popup-iframe").attr('src', srchref + id + autoplay);

            $("#video-popup-iframe").on('load', function () {
                $("#video-popup-container").show();
            });
        });

        $("#video-popup-close, #video-popup-overlay").on('click', function (e) {
            $("#video-popup-iframe-container,#video-popup-container,#video-popup-close,#video-popup-overlay").hide();
            $("#video-popup-iframe").attr('src', '');
        });

       

        /*
        minified
        
        $(".vpop").on("click",function(o){o.preventDefault(),$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();var p="",e="",i=$(this).data("id");if("vimeo"==$(this).data("type"))var p="//player.vimeo.com/video/";else if("youtube"==$(this).data("type"))var p="https://www.youtube.com/embed/";1==$(this).data("autoplay")&&(e="?autoplay=1"),$("#video-popup-iframe").attr("src",p+i+e),$("#video-popup-iframe").on("load",function(){$("#video-popup-overlay, #video-popup-container").show()})}),$("#video-popup-close, #video-popup-overlay").on("click",function(o){$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").hide(),$("#video-popup-iframe").attr("src","")});
        */</script>
</body>

</html>