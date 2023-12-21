@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-1">
            <div class="container">
                <h1>{{ __('Members') }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            @if (!empty($members))
            <div class="row">
                <div class="col-md-12">
                    <div id="team_card" class="card-container">
                        <img class="rounded" src="{{$members->first()->photo ?? ''}}" height="150" weight="150"
                             alt="{{$members->first()->name ?? ''}}">

                        <p>{{$members->first()->title ?? ''}}</p>
                        <p>{{$members->first()->membershipCategory->title ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($members->skip(1) as $member)
                <div class="col-md-3">
                    <div class="card-container">
                        <img class="rounded" src="{{$member->photo}}" height="150" width="150"
                             alt="{{$member->name ?? ''}}">
                            <p>{{$member->title ?? '' }}</p>
                            <p>{{$member->membershipCategory->title ?? '' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
@endsection
