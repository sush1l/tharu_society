@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>Jobs</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">Results</h5>
            </div>
            <div style="display: flex; justify-content: flex-end;">
                @include('frontend.search.search')
            </div>
        </div>
    </div>



    <div class="text-center py-3">{{ $jobs->count() }} Matching results for {{ $keyword }}</div>
    <div class="container">
        <div class="row">
            @if ($jobs->isEmpty())
                <p class="text-center" style="font-size: 18px;">No results found for "<span class="text-danger">{{ $keyword }}</span>".</p>
            @else
                @foreach ($jobs as $job)
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="{{ route('jobDetail', $job) }}">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ $job->image }}" alt="" style="height: 200px; width:150px;">
                                </div>
                                <div class="blog__item__text">
                                    <h5><a href="#">{{ $job->title }}</a></h5>
                                    <i class="fa-solid fa-dollar-sign"></i> {{ $job->salary }}per/hrs<br>
                                    <i class="fa fa-location-dot"></i>{{ $job->address }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{ $jobs->links() }}
            @endif
        </div>
    </div>
@endsection
