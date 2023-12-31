@extends('layouts.master')
@section('content')
    <div id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>Blogs</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">Blogs</h5>
                {{-- <h1 class="mb-5">Recent Blogs</h1> --}}
            </div>
            @foreach ($blogs as $blog )
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div data-aos="fade-up" class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ $blog->image}}"
                            alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar"></i> {{$blog->date}}</li>
                        </ul>
                        <h5><a href="#">{{$blog->title}}</a></h5>
                        <h6>{{ Str::limit(strip_tags($blog->description), 200, '..')}} </h6>
                        <a href="{{ route('blog.blogDetail',$blog)}}" class="blog__btn">vIEW MORE <span class="arrow_right"></span></a>
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



