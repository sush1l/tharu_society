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

    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">Our Members</h5>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            @if (!empty($members))
            <div class="row">
                <div data-aos="fade-up" class="col-md-12">
                    <div data-aos="fade-up" id="team_card" class="card-container">
                        <img class="rounded" src="{{$members->first()->photo ?? ''}}" height="150" weight="150"
                             alt="{{$members->first()->name ?? ''}}">

                        <p class="text-center">{{$members->first()->title ?? ''}}</p>
                        <p class="text-center">{{$members->first()->membershipCategory->title ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($members->skip(1) as $member)
                <div data-aos="fade-up" class="col-md-3">
                    <div class="card-container">
                        <img class="rounded" src="{{$member->photo}}" height="150" width="150"
                             alt="{{$member->name ?? ''}}">
                            <p class="text-center">{{$member->title ?? '' }}</p>
                            <p class="text-center">{{$member->membershipCategory->title ?? '' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
@endsection

