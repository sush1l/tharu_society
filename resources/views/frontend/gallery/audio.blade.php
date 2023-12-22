@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>{{__('Audio Gallery')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-3">{{__('Audio Gallery')}}</h5>

            </div>
            <div data-aos="fade-up" class="row my-4 mb-4">
                @foreach($audios as $audio)
                    <div class="col-md-4">
                        <audio controls class="audio" >
                            <source src="{{ asset('assets/frontend/images/video-20230420-131231-edit-1-59844.mp3') }}" type="audio/ogg">
                        </audio>
                        <h5>{{request()->language=='en' ? $audio->title_en : $audio->title}}</h5>
                    </div>
                @endforeach
            </div>
            <div data-aos="fade-up" class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{$audios->links()}}
                    </ul>
                </nav>
            </div>

        </div>
    </div>
@endsection
