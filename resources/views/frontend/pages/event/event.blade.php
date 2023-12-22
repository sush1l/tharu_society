@extends('layouts.master')
@section('content')
    <div id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>Events</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-0">Events</h5>
                <h1 class="mb-5">Recent Events</h1>
            </div>
            <div class="row g-3">
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div data-aos="fade-up" class="blog__item__pic">
                                    @if (!empty($event->image))
                                        <img src="{{ $event->image }}" alt="">
                                    @else
                                        <iframe width="100%" height="200" src="{{ $event->videoGalleries->url }}" title="Online Video"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    @endif
                                </div>
                                <div data-aos="fade-up" class="blog__item__text">
                                    <ul>
                                        @if (!empty($event->date))
                                            <li><i class="fa fa-calendar"></i> {{ $event->date }}</li>
                                        @endif
                                    </ul>
                                    <h5>{{ $event->title }}</h5>
                                    <p>{{  Str::limit($event->description, 100, '..') }}
                                    </p>
                                    <a data-aos="fade-up" href="{{ route('events.eventDetail', [$event, 'language' => $language]) }}"
                                        class="blog__btn">View More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
