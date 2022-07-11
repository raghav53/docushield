@extends('front/layout')
@section('content')
  <!--Slider Section -->
  <section class="slder">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt100">
                    <div class="heading">
                        <h1>{{$mainBanner[0]->header}}</h1>
                        <p>{{$mainBanner[0]->text}},</p>
                        <a class="Get-app" href="">Get the App</a>
                        <a class="watch-video  vpop" data-type="{{$mainBanner[0]->data_type}}" data-id="{{$mainBanner[0]->link}}"  data-autoplay='true'>
                            <img src="{{asset('front/images/play.png')}}" />Watch Video</a>
                    </div>

                    <!-- copy this stuff and down -->
                    <div id="video-popup-overlay"></div>

                    <div id="video-popup-container">
                        <div id="video-popup-close" class="fade">&#10006;</div>
                        <div id="video-popup-iframe-container">
                        <iframe id="video-popup-iframe" src="" width="100%" height="100%" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mobile">
                        <img src="{{asset('images')}}/{{$mainBanner[0]->image}}" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Slider Section -->

    <section class="iner-trusted">
        <div class="container ">
            <div class="trusted">
                <ul>
                    <p>Trusted By</p>
                    <li>
                        <a class="ico"><img src="{{asset('front/images/client1.png')}}" /></a>
                    </li>
                    <li>
                        <a class="ico"><img src="{{asset('front/images/client2.png')}}" /></a>
                    </li>
                    <li>
                        <a class="ico"><img src="{{asset('front/images/client3.png')}}" /></a>
                    </li>
                    <li>
                        <a class="ico"><img src="{{asset('front/images/client4.png')}}" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="everthing-you pb-148">
        <div class="container every">
            <h2 class="text-center pb-70">Everthing you Need</h2>
            <div class="container">
                <div class="row">
                    @foreach($everythingYouNeed as $list)
                    <div class="col-lg-4">
                        <div class="sercure">
                            <img src="{{asset('images')}}/{{$list->image}}" />
                            <h3>{{$list->header}}</h3>
                            <p>{{$list->text}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="container  pb-100">
        <div class="what-say">
            <p class="text-center what-the-say">What They Say</p>

            <section class="center slider text-center very">
@foreach($whatTheySay as $list)
                <div>
                    <p>"{{$list->header}}"</p>
                    <p class="name">{{$list->name}}</p>
                    <span class="designation">{{$list->position}} </span>
                </div>
             @endforeach

            </section>
            <div class="slides-numbers" style="display: block;">
                <span class="active">1</span> / <span class="total"></span>
            </div>
        </div>

    </div>

    <div class="container pb-100">
        <div class="Get-strated">
            <div class="row">
                <div class="col-lg-6">
                    <div class="get-strated-doc">
                        <h4>{{$secMainBanner[0]->header}}</h4>
                        <p>{{$secMainBanner[0]->text}}
                        </p>
                        <a href=""><img src="{{asset('front/images/apple-stroe.png')}}" /></a>
                        <a href=""><img src="{{asset('front/images/google-play1.png')}}" /></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dummy">
                    <img src="{{asset('images')}}/{{$secMainBanner[0]->image}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="everthing-you pb-100 pt78">
        <div class="container">
            <h2 class="text-center pb-70">Blog</h2>
            <div class="row autoplay">
                @foreach($blog as $list)
                <div>
                    <div class="blog">
                        <img src="{{asset('images')}}/{{$list->image}}" />

                        <p>{{$list->header}}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="everthing-you pb-70 pt78">
        <div class="container">
            <h2 class="text-center pb-40">Recent Media</h2>
            <div class="row ">
                <div class="autoplay">
                    
                    @foreach($recentMedia as $list)
                    <div>
                        <div class="recent">
                            <a href="" class="vpop" data-type="{{$list->data_type}}" data-id="{{$list->link}}" data-autoplay='true'>
                                <img src="{{asset('images')}}/{{$list->image}}" /></a>

                            <p>{{$list->header}}</p>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection