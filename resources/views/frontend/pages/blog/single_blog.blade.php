@extends('layouts.master')
@section('content')
    <div id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div data-aos="fade-up" class="container">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-2">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1 class="fw-bold mb-1">{{request()->language=='en' ? $blog->title_en : $blog->title}}</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-up" class="singlepost">
                        <div class="featured">
                            <img src="{{ $blog->image }}" alt="" height="650">
                            <h1>{{request()->language=='en' ? $blog->title_en : $blog->title}}</h1>
                            <span>By Admin on {{$blog->date}}</span>
                           <p>{!! request()->language=='en' ? $blog->description_en : $blog->description !!}</p>
                           <a href="{{ route('blogs') }}" class="more">Back To Blog</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="sidebar">
                        <h1 class="fw-bold">Related Post</h1>
                        <img src="{{ $blog->image }}" alt="">
                        <h2>{{request()->language=='en' ? $blog->title_en : $blog->title}}</h2>
                        <span>By Admin on November 28, 2023</span>
                        <p>{!! request()->language=='en' ? $blog->description_en : $blog->description !!}</p>
                        <a href="{{ route('blog.blogDetail', [$blog,'language'=>$language])}}" class="more">Read More</a>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
@endsection
