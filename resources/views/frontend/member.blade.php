@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-1">
            <div class="container">
                <h1>{{ __('Members') }}</h1>
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
