@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>{{__('Tik Tok')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-3">{{__('Tik Tok')}}</h5>

            </div>
            <div data-aos="fade-up" class="row my-4 mb-4">
                @foreach($tiktoks as $tiktok)
                    <div class="col-md-4">
                        <video width="400" controls>
                        <source src="{{$tiktok->video_url}}" type="video/mp4">
                        </video>
                    </div>
                @endforeach
            </div>
            <div data-aos="fade-up" class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{$tiktoks->links()}}
                    </ul>
                </nav>
            </div>

        </div>
    </div>

@endsection
