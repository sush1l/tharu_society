@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{__('Video Gallery')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-3">{{__('Videos')}}</h5>

            </div>
            <div class="row my-4 mb-4">
                @foreach($videoGalleries as $videoGallery)
                    <div class="col-md-4">
                        <iframe width="100%" height="200" src="{{$videoGallery->url}}"
                                title="Laravel Array Validation: Set Messages with Position/Index" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{$videoGalleries->links()}}
                </ul>
            </nav>
        </div>

    </div>
</div>

@endsection
