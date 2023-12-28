@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>{{ __('Introduction') }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <section data-aos="fade-up" class="light-bg inner">
                <div data-aos="fade-up" class="about-inner">
                    <div class="content_image">
                        <img class="img-responsive" src="{{asset('assets/frontend/images/team.jpg')}}" alt="About" align="">
                        <p style="text-align: justify;">
                            {!! $officeDetail->description ?? '' !!}
                        </p>
                    </div>
                </div>
        </section>
    </div>
@endsection

