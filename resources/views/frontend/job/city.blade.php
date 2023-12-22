@extends('layouts.master')
@section('content')
    <div id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>{{ __('Jobs') }}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div data-aos="fade-up"  class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-3">{{ __('Cities') }}</h5>

            </div>
            
            <div class="row my-4 mb-4">
                @foreach ($addCities as $addCity)
                    <div class="col-md-1 mb-2">
                        <div data-aos="fade-up" class="city">
                            <a  href="{{ route('city', $addCity) }}" class="blog__btn">{{ $addCity->title }} <span
                                    class="arrow_right"></span></a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                       {{$photoAlbums->links()}}
                    </ul>
                </nav>
            </div> --}}

        </div>
    </div>
@endsection
