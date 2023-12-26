@extends('layouts.master')
@section('content')
    <div data-aos="fade-up" id="slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($sliders as $sliderButton)
                <button type="button" data-bs-target="#slider" data-bs-slide-to="{{ $loop->index }}"
                    class="{{ $loop->first ? 'active' : '' }}" @if ($loop->first) aria-current="true" @endif
                    aria-label="Slide {{ $loop->iteration }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $slider->photo }}" class="d-block w-100 height-455" alt="{{ $slider->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        @if (request()->language == 'en')
                            <p>{{ $slider->title_en }}</p>
                        @else
                            <p>{{ $slider->title }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <button data-aos="fade-up" class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button data-aos="fade-up" class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section data-aos="fade-up" id="services" class="services mt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="col-sm-6 col-lg-12 mt-3">
                    <h5 class="section bg-intro text-center text-color px-3 mb-0">About Us</h5>
                    <h1 class="mb-3"></h1>
                    <div class="card-01 h-100">

                        <p class="text-withlink">
                            @if (request()->language == 'en')
                                {!! Str::words(strip_tags($officeDetail->description_en ?? ''), 50, '...') !!}
                            @else
                                {!! Str::words(strip_tags($officeDetail->description ?? ''), 50, '...') !!}
                            @endif
                            <a class="intro-title"
                                href="{{ route('officeDetail', [$officeDetail->slug ?? '', 'language' => $language]) }}">
                                {{ __('View More') }}
                            </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div data-aos="fade-up" class="container-xxl py-5 category">
        <div class="container mt-3">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-0">Events/Blogs</h5>
                <h1 class="mb-5">{{ __('Recent Blogs') }}</h1>
            </div>
            <div class="row g-3">
                <div class="row">
                    <div class="d-flex justify-content-end mb-4">
                        <a href="{{ route('blogs', ['language' => $language]) }}" class="btn btn-outline-primary btn-xs">
                            {{ __('View More') }}
                        </a>
                    </div>
                    @foreach ($blogs as $blog)
                        <div class="col-md-3">
                            <div class="single__news">
                                <div class="thumb">
                                    <a href="{{ route('blog.blogDetail', [$blog, 'language' => $language]) }}">
                                        <img src="{{ $blog->image }}" alt="">
                                    </a>
                                </div>
                                <div class="news_info mt-2">
                                    <a href="{{ route('single_blog') }}">
                                        <h5 class="mb-1" style="color: black">
                                            {{ request()->language == 'en' ? $blog->title_en : $blog->title }}
                                        </h5>
                                    </a>
                                    <div class="d-flex justify-content-between">
                                        <p class="d-flex align-items-center"><span style="color: black"><i
                                                    class="fa fa-calendar"></i>
                                                {{ $blog->date }}</span>
                                        </p>
                                        <a href="{{ route('blog.blogDetail', [$blog, 'language' => $language]) }}"
                                            class="btn btn-outline-primary btn-xs">
                                            {{ __('View More') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5 category  wow fadeInUp" data-wow-delay="0.1s"">
        <div data-aos="fade-up" class="container">
            <div  data-aos="fade-up"class="text-center" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-0">Gallery</h5>
                <h1 class="mb-3">{{ __('Photos') }}</h1>
            </div>
            <div  class="row g-3">
                <div data-aos="fade-up" class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div data-aos="fade-up" class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                            <a class="position-relative d-block overflow-hidden" href="#">
                                <img class="img"
                                    src="{{ asset('storage/' . $galleries->first()?->photos->random()?->images ?? '') }}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">
                                        {{ request()->language == 'en' ? $galleries->first()?->title_en ?? '' : $galleries->first()?->title ?? '' }}
                                    </h5>
                                </div>
                            </a>
                        </div>
                        @foreach ($galleries as $key => $data)
                            @if ($key == 1 || $key == 2)
                                <div data-aos="fade-up" class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s"
                                    style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img" src="{{ asset('storage/' . $data->photos->random()->images) }}"
                                            alt="">
                                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                            style="margin: 1px;">
                                            <h5 class="m-0">
                                                {{ request()->language == 'en' ? $data->title_en : $data->title }}</h5>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @foreach ($galleries as $key => $data)
                    @if ($key == 3)
                        <div data-aos="fade-up" class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s"
                            style="min-height: 350px; visibility: visible; animation-delay: 0.7s; animation-name: zoomIn;">
                            <a class="position-relative d-block h-100 overflow-hidden" href="">
                                <img class="img position-absolute w-100 h-100"
                                    src="{{ asset('storage/' . $data->photos->random()->images) }}" alt=""
                                    style="object-fit: cover;">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin:  1px;">
                                    <h5 class="m-0">{{ request()->language == 'en' ? $data->title_en : $data->title }}
                                    </h5>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div data-aos="fade-up" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s"">
        <div class="container">
            <div class="text-center" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-3">Members</h5>
                {{-- <h1 class="mb-3">{{ __('Photos') }}</h1> --}}
            </div>
            <div data-aos="fade-up" class="Container">
                <h3 class="Head">Member<span class="Arrows"></span></h3>
                <!-- Carousel Container -->

                <div class="SlickCarousel">
                    <!-- Item -->
                    @foreach ($members as $member)
                        <div class="ProductBlock">
                            <div class="Content">
                                <div class="img-fill">
                                    <img src="{{ $member->photo }}">
                                </div>
                                <h3>{{ $member->title }}</h3>
                            </div>
                        </div>
                    @endforeach
                    <!-- Item -->
                </div>
                <!-- Carousel Container -->
            </div>
        </div>
    </div>

    <div data-aos="fade-up" class="container mt-4">
        <div class="text-center" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h5 class="section bg-intro text-center text-color px-3 mb-0">Testominal</h5>
            <h1 class="mb-3">What We Say</h1>
        </div>
    </div>



    <section  class="testimonial showcase text-center">
        <div class="overlay">
            <div class="container-fluid">
                <div id="testimonial4"
                    class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                    data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="testimonial4_slide">
                                <img src="{{ asset('assets/frontend/images/dip.jpeg') }}"
                                    class="img-circle img-responsive" />
                                <p>"As the President of Tharu Society Sydney Australia, I am honored to lead an
                                    organization
                                    that unites and empowers the Nepalese Tharu community in Australia. Our society
                                    strives
                                    to preserve and promote our rich Tharu culture, traditions, and values, while also
                                    providing a platform for social, educational, and economic development within our
                                    community.<br>
                                    I am proud to witness the positive impact we have made in the lives of our members,
                                    fostering a sense of belonging and solidarity. Through various events, programs, and
                                    initiatives, we have strengthened the bonds among Tharu individuals and families,
                                    creating a strong support network that extends beyond geographical borders.
                                    Together, we celebrate our heritage and work towards addressing the challenges faced
                                    by
                                    our community. Tharu Society Sydney Australia stands as a beacon of unity, fostering
                                    inclusivity and embracing diversity. It is truly inspiring to witness the
                                    resilience,
                                    talent, and determination of our Tharu community members as they contribute to the
                                    multicultural fabric of Australia.<br>
                                    I encourage all Tharu individuals in Australia to join our society and be part of
                                    this
                                    incredible journey. Together, we can continue to make a difference and build a
                                    brighter
                                    future for the Nepalese Tharu community in Australia. </p>
                                <h4>President<br>
                                    Dip Narayan Chaudhary </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <img src="{{ asset('assets/frontend/images/arun.jpeg') }}"
                                    class="img-circle img-responsive" />
                                <p>As the Public Relations Officer of Tharu Society Sydney Australia, I am proud to be a
                                    part of an organization that brings together the Nepalese Tharu community in
                                    Australia.
                                    Our society plays a vital role in fostering unity, promoting cultural awareness, and
                                    creating opportunities for growth and development among Tharu individuals.</p>

                                <p>I am dedicated to ensuring that the voice and achievements of Tharu Society Sydney
                                    Australia are effectively communicated to the wider public. By sharing our stories,
                                    experiences, and aspirations, we aim to break down stereotypes, promote inclusivity,
                                    and
                                    build bridges of understanding between different cultures.I am grateful to be a part
                                    of
                                    an organization that is committed to empowering the Tharu community and creating a
                                    brighter future for all Nepalese Tharu people in Australia. Together, we can
                                    continue to
                                    strengthen our community bonds, celebrate our rich heritage, and make a positive
                                    impact
                                    on society. </p>
                                <h4>Public Relation officer<br>Arun Aaryan Chaudhary</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <div class="d-flex">
                                    <img src="{{ asset('assets/frontend/images/pooja.jpeg') }}"
                                        class="img-circle img-responsive" />
                                    <img src="{{ asset('assets/frontend/images/umesh.jpeg') }}"
                                        class="img-circle img-responsive" />
                                </div>
                                <p>
                                    We are privileged to be a part of Tharu Society Sydney Australia, an organization
                                    that
                                    unites all Nepalese Tharu people in Australia. The sense of unity and belonging
                                    within
                                    the community is truly remarkable. We have witnessed the organization's dedication
                                    to
                                    preserving and promoting our Tharu culture. Through various cultural events and
                                    activities, we are able to showcase our rich heritage to the wider Australian
                                    community.
                                    Tharu Society Sydney Australia has leveraged technology to effectively communicate
                                    and
                                    engage with our members. Together, we are proud to contribute to the growth and
                                    success
                                    of Tharu Society Sydney Australia. It is an honor to serve our community and witness
                                    the
                                    positive impact of our collective efforts. Tharu Society Sydney Australia truly
                                    embodies
                                    the spirit of unity, culture, and progress. We are grateful to be a part of this
                                    incredible organization. </p>
                                <h4>Cultural secretary and IT co-ordinator</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="container-fluid my-5">
        <div data-aos="fade-up" class="text-center" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h5 class="section bg-intro text-center text-color px-3 mb-3">Contact</h5>
            {{-- <h1 class="mb-3">{{ __('') }}</h1> --}}
        </div>
        <div class="row">
            <div class="parallax"></div>
            <div style="background-color:rgb(252, 250, 250);font-size:36px">
                <div data-aos="fade-up" class="contact text-center">
                    <h2 class="text-white fw-bold">Tharu Society Australia</h2>
                    <a href="{{ route('contact') }}">
                        <button class="btn text-black ">Connect with us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-5">
        <div data-aos="fade-up" class="text-center" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h5 class="section bg-intro text-center text-color px-3 mb-0">Map</h5>
            <h1 class="mb-3">Our Location</h1>
        </div>
        <div data-aos="fade-up" class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13247.484232735826!2d151.23997049929355!3d-33.89297450975691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12adf16a020b77%3A0x5017d681632ad90!2sBondi%20Junction%20NSW%202022%2C%20Australia!5e0!3m2!1sen!2snp!4v1702547342089!5m2!1sen!2snp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
