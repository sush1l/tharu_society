@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>Blogs</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">Blogs</h5>
            </div>

            @foreach ($jobs as $job)
                @if ($job->city == $addCities)
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ $job->image }}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar"></i> {{ $job->date }}</li>
                                </ul>
                                <h5><a href="#">{{ $job->title }}</a></h5>
                                <p>{{ request()->language == 'en' ? Str::limit($job->title_en, 20, '..') : Str::limit($job->title, 10, '..') }}</p>
                                <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
