@section('description','hello')
@section('keywords','helsslo')
@section('title','Docushiled')
@extends('front/layout')
@section('content')


<section class="everthing-you pb-100 pt78">
        <div class="container">
            <h2 class="text-center pb-70">Blog</h2>
            <div class="row autoplay">
                @foreach($blog as $list)
                <a class="white_color" href="{{url('showPost')}}/{{$list->id}}/{{urlencode($list->header)}}">
                <div>
                    <div class="blog">
                        <img src="{{asset('images')}}/{{$list->image}}" />

                        <p>{{$list->header}}</p>
                    </div>
                </div>
</a>
                @endforeach
            </div>
        </div>
    </section>
@endsection