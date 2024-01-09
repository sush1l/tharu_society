@extends('layouts.master')
@section('content')
    <div id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div data-aos="fade-up" class="container">
                <h1>{{__('Photo Gallery')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="row my-4 mb-4">
                @foreach($photoAlbums as $photoAlbum)
                    <div class="col-md-4 mb-2">
                        <div  style="height:60%">
                            <img data-aos="fade-up"
                                 src="{{ asset('storage/'.$photoAlbum->photos->first()->images) }}"
                                 alt="Card image cap" width="100%" height="350">
                            <div  class="card-body">
                                <h6 data-aos="fade-up" class="card-text my-2">
                                    {{ $photoAlbum->title_en }}
                                </h6>
                                <a data-aos="fade-up" href="{{ route('photoGallery.details', [$photoAlbum, $photoAlbum->slugs]) }}" class="btn btn-outline-primary btn-xs">                                    {{__('View More')}}
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
