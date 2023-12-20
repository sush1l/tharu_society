@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>Blogs</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">Blogs</h5>
                {{-- <h1 class="mb-5">Recent Blogs</h1> --}}
            </div>
            @foreach ($blogs as $blog )
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ $blog->image}}"
                            alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar"></i> {{$blog->date}}</li>
                        </ul>
                        <h5><a href="#">{{$blog->title}}</a></h5>
                        <p>{{request()->language=='en' ? Str::limit($blog->title_en,20,'..') : Str::limit($blog->title,10,'..')}} </p>
                        <a href="{{ route('blog.blogDetail', [$blog,'language'=>$language])}}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                        {{-- <a href="{{ route('blog.blogDetail',[$blog,'language'=>$language]) }}"
                            class="btn btn-outline-primary btn-xs">
                             {{__('View More')}}
                         </a> --}}
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="d-flex justify-content-end mt-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                       {{$blog->links()}}
                    </ul>
                </nav>
            </div> --}}
        </div>
    </div>
@endsection



