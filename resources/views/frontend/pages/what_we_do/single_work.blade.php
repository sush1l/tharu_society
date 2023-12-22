@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="body">
        <div data-aos="fade-up" class="about mt-2">
            <div class="container">
                <h1>What We Do?</h1>
            </div>
        </div>
    </div>
    <section id="services" class="services mt-3">
        <div class="container">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="mb-3 fw-bold">{{request()->language=='en' ? $work->title_en : $work->title}}</h5>
            </div>
            <div class="row mb-3">
                <div  data-aos="fade-up"class="col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 paragraph">
                            <p>
                                {!! request()->language=='en' ? $work->description_en : $work->description !!}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="services" class="services mt-3">
        <div  class="container">
            <div data-aos="fade-up" class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 data-aos="fade-up" class="section bg-intro text-center text-color px-3 mb-3">Strategic programmes</h5>
            </div>
            <div class="row">
                @foreach($workCategories as $data)
                <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div  data-aos="fade-up"class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">{{request()->language=='en' ? $data->title_en : $data->title}}</h5>
                            <p>{!! request()->language=='en' ? Str::words($data->description_en,20,'..') : Str::words($data->description,20,'..') !!}</p>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div data-aos="fade-up" class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                       {{$works->links()}}
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
