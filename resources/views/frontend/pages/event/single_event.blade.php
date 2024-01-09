@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>Events</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1 class="mb-3">{{ $events->title}}</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post">
                        <div class="featured">
                            @if (!empty($events->image))
                                <img src="{{ $events->image }}" alt="" height="700" class="center">
                            @else
                                <iframe width="100%" height="700" src="{{ $events->videoGalleries->url }}"
                                    title="Online Video" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            @endif
                            <h3>{{ request()->language == 'en' ? $events->title_en : $events->title }}</h3>
                            <span class="my-4"><b>By Admin on</b> {{ $events->date }}</span>
                            @if (!empty($events->description))
                                <h6 class="mt-3">{!! request()->language == 'en' ? $events->description : $events->description !!}</h6>
                            @endif
                            <a href="{{ route('events') }}" class="more mt-5">Back To Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
