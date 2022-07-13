@section('description'){{$blog->short_desc}}@endsection
@section('keywords'){{$blog->keywords}}@endsection
@section('title'){{$blog->header}}@endsection
@section('fb_url'){{url('showPost')}}/{{$blog->id}}/{{urlencode($blog->header)}}@endsection
@section('fb_image'){{asset('images')}}/{{$blog->image}}@endsection
@extends('front/layout')
@section('content')

<section class="breadcumb">
    <div class="container">
        <div class="d-flex align-items-center">
            <a href="{{url('/')}}"><h3>home</h3></a>
            <span>/</span>
            <a href="{{url('viewAllPost')}}"> <h3> blog</h3></a>
            <span>/</span>
            <h3>{{$blog->header}}</h3>
        </div>
    </div>
</section>
<section class="blog-banner">
    <div class="container">
        <img style="width:1200px;height: 600px;" src="{{asset('images')}}/{{$blog->image}}" class="img-fluid">
    </div>
</section>
<section class="blog-sec">
    <div class="container">
        <div class="row main-row gx-3 gx-md-5">
            <div class="col-lg-7 col-xl-8">
                <div class="wapper-head">
                    <h2 class="mt-3 pt-3">{{$blog->header}}</h2>
                    <p class="mt-3 pt-2 date">{{$blog->created_at}}</p>
                    <div class="name-sec d-flex align-items-center">
                        <div class="blog-img">
                            <img src="{{asset('front/images/blog/profile.png')}}" class="img-fluid">
                        </div>
                        <div class="name-img">
                            <h3>{{$blog->name}}</h3>
                            <p>{{$blog->position}}</p>
                        </div>
                    </div>
                    <div class="cotnet-main">
                        <!-- <h4 class="mb-3 pb-3">Docushield: Security at its securest</h4> -->
                        <p>{!!$blog->description!!}</p>
                    </div>

                </div>
                <div class="bottom-blog">
                    <div class="row">
                        @if(isset($blogs[0]->id))
                        <div class="col-md-6">
                            <div class="left-blog">
                                <a href="{{url('showPost')}}/{{$blogs[0]->id}}/{{urlencode($blogs[0]->header)}}">previous post

                                    <div class="d-flex align-items-center">
                                        <div class="img">
                                            <img style="width: 72px; height:72px" src="{{asset('images')}}/{{$blogs[0]->image}}">
                                        </div>
                                        <div class="blog-content border-sec">
                                            <h3>{{$blogs[0]->header}} </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @if(isset($blogs[1]->id))
                        <div class="col-md-6">
                            <div class="right-blog">
                                <a href="{{url('showPost')}}/{{$blogs[1]->id}}/{{urlencode($blogs[1]->header)}}"> next post
                                    <div class="d-flex align-items-center">
                                        <div class="img">
                                            <img style="width: 72px; height:72px" src="{{asset('images')}}/{{$blogs[1]->image}}">
                                        </div>
                                        <div class="blog-content">
                                            <h3>{{$blogs[1]->header}} </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="right-box">
                    <h2>new posts</h2>
                    @foreach($blogs as $list)
                    @if($list->id != $blog->id)
                    <a href="{{url('showPost')}}/{{$list->id}}/{{urlencode($list->header)}}">
                        <div class="d-flex align-items-center box-detail">
                            <div class="img">
                                <img style="width: 72px; height:72px" src="{{asset('images')}}/{{$list->image}}">
                            </div>
                            <div class="blog-content">
                                <h3>{{$list->header}} </h3>
                            </div>
                        </div>
                    </a>
                    @endif
                    @endforeach

                </div>
                <!-- <div class="box2">
                    <h3>become a
                        contributor</h3>
                    <a href="#">submit an article</a>
                </div> -->
                <div class="box3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>Share</h3>
                        <a href="{{$blog->twitter_link}}??javascript:void(0)">
                            <div class="socail-share">
                                <img src="{{asset('front/images/twitter.png')}}">
                            </div>
                        </a>
                        <a href="{{$blog->youtube_link}}??javascript:void(0)">
                            <div class="socail-share">
                                <img src="{{asset('front/images/youtube.png')}}">
                            </div>
                        </a>
                        <a href="{{$blog->fb_link}}??javascript:void(0)">
                            <div class="socail-share">
                                <img src="{{asset('front/images/blog/facebook.png')}}">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection