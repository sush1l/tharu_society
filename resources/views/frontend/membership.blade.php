@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{ __('Membership') }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <section class="light-bg inner">
            @foreach ($memberships as $membership)
                <div class="about-inner">
                    <div class="content_image">
                        <img class="img-responsive" src="{{ $membership->photo }}" alt="About" align="">
                        <p style="text-align: justify;">
                            {!! $membership->desc !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
