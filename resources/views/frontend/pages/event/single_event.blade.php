@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>News/Events</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h1 class="mb-5"> {{__('News')}}</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="singlepost">
                        <div class="featured">
                            <img src="{{ $events->image }}" alt="" height="650">
                            <h1>{{request()->language=='en' ? $events->title_en : $event->title}}</h1>
                            <span>By Admin on {{$events->date}}</span>
                           <p>{!! request()->language=='en' ? $events->description : $events->description !!}</p>
                           <a href="{{ route('events') }}" class="more">Back To Event</a>
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
