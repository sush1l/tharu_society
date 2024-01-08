@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>{{__('Video Gallery')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="row my-4 mb-4">
                @foreach($videoGalleries as $videoGallery)
                    <div data-aos="fade-up" class="col-md-4">
                        <iframe width="100%" height="200" src="{{$videoGallery->url}}"
                                title="Laravel Array Validation: Set Messages with Position/Index" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
            <div data-aos="fade-up" class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{$videoGalleries->links()}}
                </ul>
            </nav>
        </div>

    </div>
</div>

@endsection
