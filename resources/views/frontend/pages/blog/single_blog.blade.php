@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-2">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1 class="fw-bold mb-1">{{request()->language=='en' ? $blog->title_en : $blog->title}}</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="singlepost">
                        <div class="featured">
                            <img src="{{ $blog->image }}" alt="" height="500">
                            <h1>{{request()->language=='en' ? $blog->title_en : $blog->title}}</h1>
                            <span>By Admin on {{$blog->date}}</span>
                           <p>{!! request()->language=='en' ? $blog->description_en : $blog->description !!}</p>
                           <a href="{{ route('blogs') }}" class="more">Back To Blog</a>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-4">--}}
{{--                    <div class="sidebar">--}}
{{--                        <h1 class="fw-bold">Recent Posts</h1>--}}
{{--                        <img src="{{ asset('assets/frontend/images/login-officejpeg.jpg') }}" alt="">--}}
{{--                        <h2>ON THE DIET</h2>--}}
{{--                        <span>By Admin on November 28, 2023</span>--}}
{{--                        <p>This is just a place holder, so you can see what the site would look like.</p>--}}
{{--                        <a href="singlepost.html" class="more">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
@endsection
