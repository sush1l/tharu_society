@extends('layouts.master')
@section('content')
    <div id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div data-aos="fade-up" class="container">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h2 class="fw-bold mb-5" style="color: #181d38">{{ $blog->title }}</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div data-aos="fade-up" class="singlepost">
                            <div class="featured">
                                <img src="{{ $blog->image }}" alt="" height="450">
                                <h1 class="my-2">{{ $blog->title }}</h1>
                                <span class="mx-4">By {{ $blog->publish }} on {{ $blog->date }}</span>
                                <p>{!! request()->language == 'en' ? $blog->description : $blog->description !!}</p>
                                <hr>
                               <div class="col-md-4">
                                    @if (Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                            {{ Session::get('message') }}
                                        </p>
                                    @endif
                                </div>

                                    <form action="{{ route('comment') }}" method="POST">
                                        @csrf
                                        <label class="mt-2 mb-2" for="comment">Write your thoughts</label>
                                        <div class="form-group col-md-8 d-flex">
                                            <textarea type="text" placeholder="Write here....." name="comment" class="comment" rows="5"></textarea>
                                            <button type="submit" class="comment-button ">submit</button>
                                        </div>
                                    </form>
                               
                                <a href="{{ route('blogs') }}" class="more mt-3">Back To Blog</a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-4">
                        <div class="sidebar">
                            <h1 class="fw-bold">Related Post</h1>
                            <img src="{{ $blog->image }}" alt="">
                            <h2>{{request()->language=='en' ? $blog->title_en : $blog->title}}</h2>
                            <span>By Admin on November 28, 2023</span>
                            <p>{!! request()->language=='en' ? $blog->description_en : $blog->description !!}</p>
                            <a href="{{ route('blog.blogDetail', [$blog,'language'=>$language])}}" class="more">Read More</a>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>
    </div>
@endsection
