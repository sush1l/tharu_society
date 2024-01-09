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
                                    <h6>{{ Str::limit(strip_tags($event->description), 200, '..') }}</h6>
                                    </p>
                                        <a href="{{ route('events.eventDetail',$event) }}"
                                        class="btn btn-outline-primary btn-xs">
                                        {{ __('View More') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <p><b>For More Information You Can Visit Here :-</b><br>
                    <a href="https://www.facebook.com/events/335368759451962/?acontext=%7B%22ref%22%3A%2252%22%2C%22action_history%22%3A%22[%7B%5C%22surface%5C%22%3A%5C%22share_link%5C%22%2C%5C%22mechanism%5C%22%3A%5C%22share_link%5C%22%2C%5C%22extra_data%5C%22%3A%7B%5C%22invite_link_id%5C%22%3A321415197538105%7D%7D]%22%7D">TSSA Facebook Page</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
