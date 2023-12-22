@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>{{ __('About Us') }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div  class="row">
            <div class="intro">
                <h2 data-aos="fade-up" class="text-center">{{ __('Introduction') }}</h2>
                <div data-aos="fade-up" class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="col-sm-6 col-lg-12 mt-3">
                            <h1 class="mb-3"></h1>
                            <div data-aos="fade-up" class="card-01 h-100">
                                <h4 class="fw-bold">{{ $officeDetail->title ?? '' }}</h4>
                                <p class="text-withlink">
                                <p>{{ strip_tags($officeDetail->description ?? '') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
