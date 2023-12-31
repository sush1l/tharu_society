@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>{{ __('Event Detail') }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <section data-aos="fade-up" class="light-bg inner">
            @foreach ($eventDetails as $eventDetail)
                <div data-aos="fade-up" class="about-inner">
                    <div class="content_image">
                        <img class="img-responsive" src="{{ $eventDetail->photo }}" alt="About" align="">
                        <p style="text-align: justify;">
                            {!! $eventDetail->desc !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
