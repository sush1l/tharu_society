@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>Jobs</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5  class="section bg-intro text-center text-color px-3 mb-5">Jobs</h5>
            </div>
            <div data-aos="fade-up" class="py-3" style="display: flex; justify-content: flex-end;">
                @include('frontend.search.search')
            </div>
            
            <div class="row">
                @foreach ($addCity->jobs as $key => $job)
                    <div data-aos="fade-up" class="col-lg-3 col-md-3 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ $job->image }}" alt="" style="height: 200px; width:150px;">
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">{{ $job->title }}</a></h5>
                                <p> {{ request()->language == 'en' ? Str::limit(strip_tags($job->description), 100, '..') : Str::limit(strip_tags($job->description), 100, '..') }}
                                </p>
                                <i class="fa-light fa-location-crosshairs"></i> {{ $job->address }}
                                <ul>
                                    <li><i class="fa fa-calendar"></i> StartDate: {{ $job->date }}</li>
                                    <li><i class="fa fa-calendar"></i> EndDate: {{ $job->end_date }}</li>
                                </ul>
                                <a href="{{ route('jobDetail', $job) }}" class="blog__btn">VIEW MORE <span
                                        class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
