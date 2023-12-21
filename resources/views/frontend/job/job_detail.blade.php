@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>Job Details</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">job Details</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="jobdetail_card">
                    <img src="{{ $job->image }}" alt="" style="height: 350px; width:450px">
                </div>
            </div>
            <div class="col-md-8">
                <div class="jobDetail_section">
                    <h2 class="headerjob">{{ $job->title }}</h2>
                    <div class="jobDate">
                        <i class="fa fa-location-dot"></i> {{ $job->address }},{{ $job->addCity->title }}<br>
                        <i class="fa-solid fa-dollar-sign"></i> {{$job->salary}} per/Hrs <br>
                        <i class="fa fa-calendar"></i> LastDate: {{ $job->end_date }}
                    </div>
                </div>
                <div class="jobDetail_desc">
                    <p class="des">{{ strip_tags($job->description) }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">Related Jobs</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($addCities as $addCity)
                @foreach ($addCity->jobs as $job)
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="{{ route('jobDetail', $job) }}">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ $job->image }}" alt="" style="height: 200px; width:150px;">
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">{{ $job->title }}</a></h5>
                                {{ request()->language == 'en' ? Str::limit(strip_tags($job->description), 100, '..') : Str::limit(strip_tags($job->description), 100, '..') }}
                                <br>
                                <i class="fa-solid fa-dollar-sign"></i> {{$job->salary}} per/hrs<br>
                                    <i class="fa fa-location-dot"></i>{{ $job->address }}
                                <ul>
                                    <li><i class="fa fa-calendar"></i> StartDate: {{ $job->date }}</li>
                                    <li><i class="fa fa-calendar"></i> EndDate: {{ $job->end_date }}</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
