@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{__('Photo Gallery')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-3">{{__('Photos')}}</h5>

            </div>
            <div class="row my-4 mb-4">
                @foreach($photoAlbums as $photoAlbum)
                    <div class="col-md-4 mb-2">
                        <div class="card" style="height:60%">
                            <img class="card-img-top"
                                 src="{{ asset('storage/'.$photoAlbum->photos->random()->images) }}"
                                 alt="Card image cap" width="100%" height="250">
                            <div class="card-body">
                                <h6 class="card-text my-2">
                                    {{request()->language=='en' ? $photoAlbum->title_en : $photoAlbum->title}}
                                </h6>
                                <a href="{{ route('photoGallery.details',[$photoAlbum->slug,'language'=>$language]) }}"
                                   class="btn btn-outline-primary btn-xs">
                                    {{__('View More')}}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                       {{$photoAlbums->links()}}
                    </ul>
                </nav>
            </div>

        </div>
    </div>
@endsection
