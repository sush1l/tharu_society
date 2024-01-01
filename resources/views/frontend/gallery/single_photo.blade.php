@extends('layouts.master')
@section('content')
    <div id="body">
        <div  data-aos="fade-up" class="about mt-2">
            <div data-aos="fade-up" class="container">
                <h1>{{__('Photo Gallery')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-3">{{__('Photos')}}</h5>

            </div>
            <div data-aos="fade-up" class="row my-4 mb-4">
                @foreach($photoGallery->photos as $photo)
                    <div class="col-md-6">
                        <div data-aos="fade-up" class="mt-4" style="height:50%">
                            <a href="{{ asset('storage/'.$photo->images) }}">
                                <img
                                     src="{{ asset('storage/'.$photo->images) }}"
                                     alt="Card image cap" width="600" height="600">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
