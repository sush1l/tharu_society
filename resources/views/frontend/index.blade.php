@extends('layouts.master')
@section('content')
    <!-- Modal popup notice -->
    @if ($popups->count() > 0)
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Upcoming Events</h5>
                        <button type="button" id="closeModalButton" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($popups as $key => $popup)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                                        class="{{ $key == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($popups as $key => $popup)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img class="d-block w-100" src="{{ $popup->image }}" alt=""
                                            style=" width: 100%;">
                                        {{-- <div class="carousel-caption d-none d-md-block">
                                            <h5><b >{{ $popup->title }}</b></h5>
                                            <p class="text-center bg-success">{{ $popup->date }}</p>
                                        </div> --}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


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
                    <img src="{{ $slider->photo }}" class="d-block w-100">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        @if (request()->language == 'en')
                            <p>{{ $slider->title_en }}</p>
                        @else
                            <p>{{ $slider->title }}</p>
                        @endif
                    </div> --}}
                </div>
            @endforeach
        </div>
        <button data-aos="fade-up" class="carousel-control-prev" type="button" data-bs-target="#slider"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button data-aos="fade-up" class="carousel-control-next" type="button" data-bs-target="#slider"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section data-aos="fade-up" id="services" class="services mt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="col-sm-12 col-lg-12 mt-3">
                    <h5 class="section bg-intro text-center text-color px-3 mb-4">About Us</h5>
                    <h1 class="mb-3"></h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="h-100">
                                <p class="text-withlink">
                                    @if (request()->language == 'en')
                                        {!! Str::words(strip_tags($officeDetail->description_en ?? ''), 200, '...') !!}
                                    @else
                                        {!! Str::words(strip_tags($officeDetail->description ?? ''), 200, '...') !!}
                                    @endif
                                    {{-- <a class="intro-title" href="{{ route('officeDetail', [$officeDetail->slug ?? '']) }}">
                                        {{ __('View More......') }}
                                    </a> --}}
                                </p>
                                <a href="{{ route('officeDetail', [$officeDetail->slug ?? ''])}}"
                                    class="btn btn-outline-primary btn-xs text-end ">
                                    {{ __('View More') }}
                                </a>
                            </div>

                        </div>
                        <div data-aos="zoom-in" class="col-md-6">
                            <img src="{{ asset('assets/frontend/images/team.jpg') }}" </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section data-aos="fade-up" id="services" class="services mt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="col-sm-12 col-lg-12 mt-3">
                    <h5 class="section bg-intro text-center text-color px-3 mb-4">Events Detail</h5>
                    <h1 class="mb-3"></h1>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="h-100">
                                <p class="text-withlink">
                                    <b>Tharu Events in Australia :</b><br>
                                    &emsp;&emsp;&emsp;&emsp;TSSA is organizing an event for celebrating Tharu Maghi festival
                                    in Sydney,Australia on
                                    January 15, 2024. The festival will be held at Gough Whitlam Park, located at Bayview
                                    Avenue, Earlwood, 2206.
                                    Tharu Maghi festival is an important cultural event for the Tharu community. It marks
                                    the beginning of the Magh month in the Nepali calendar and is observed with great
                                    enthusiasm and joy. This festival is an occasion for Tharu people to come together,
                                    honor their cultural heritage, and showcase their traditional customs and
                                    practices.During the celebration, you can expect to witness various cultural
                                    performances, including Tharu music and dance. The event will also feature traditional
                                    Tharu food stalls, where you can indulge in authentic Tharu cuisine. Attending this
                                    Tharu Maghi festival in Sydney,Australia offers a unique opportunity to experience the
                                    vibrant culture and hospitality of the Tharu community. It allows you to immerse
                                    yourself in their rich traditions and learn more about their cultural significance. For
                                    any specific details or updates regarding the event, reaching out to the Tharu Society
                                    Sydney Australia, as they will have the most accurate information closer to the date
                                    of the festival.
                                </p>
                            </div>
                        </div>
                        <div data-aos="zoom-in" class="col-md-5">
                            <img src="{{ asset('assets/frontend/images/eventdetail.jpg') }}" height="220" width="100%">
                            &nbsp;
                            <img src="{{ asset('assets/frontend/images/eventdetail2.jpg') }}" height="220"
                                width="100%">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <section data-aos="fade-up" id="services" class="services mt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="col-sm-12 col-lg-12 mt-3">
                    <h5 class="section bg-intro text-center text-color px-3 mb-4">Join Tharu Society</h5>
                    <h1 class="mb-3"></h1>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="h-100">
                                <p class="text-withlink">
                                    <b>Join Tharu Society:</b><br>
                                    &emsp;&emsp;&emsp;&emsp;
                                    Joining the Tharu Society Sydney offers individuals an opportunity to become part of a
                                    community that celebrates and promotes Tharu culture and traditions. By becoming a
                                    member of the Tharu Society Sydney Australia, you gain access to various benefits.
                                    Firstly, you can actively participate in the events and festivals organized by the
                                    society, including the Tharu Maghi festival and other cultural gatherings. These events
                                    provide a platform to showcase Tharu heritage, connect with fellow Tharu community
                                    members, and foster a sense of belonging.Membership also grants you the chance to
                                    contribute to the preservation and promotion of Tharu culture. Through your involvement,
                                    you can help organize cultural events, support community initiatives, and play a role in
                                    raising awareness about Tharu traditions, rituals, and art forms.
                                    Being a member of the Tharu Society Sydney Australia allows you to engage with
                                    like-minded individuals who share a passion for Tharu culture. You can build meaningful
                                    connections, exchange knowledge, and create a sense of unity within the Tharu
                                    community.Furthermore, your membership can have a positive impact on the wider
                                    community. By joining the society, you contribute to the collective efforts of
                                    preserving and promoting Tharu culture in Australia. Your involvement can help raise
                                    awareness about the Tharu community, foster cultural diversity, and promote
                                    intercultural understanding.
                                </p>
                            </div>
                        </div>
                        <div data-aos="zoom-in" class="col-md-5">
                            <img src="{{ asset('assets/frontend/images/img.jpg') }}" height="220" width="100%">
                            &nbsp;
                            <img src="{{ asset('assets/frontend/images/image.jpg') }}" height="220" width="100%">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <div data-aos="fade-up" class="container-xxl py-5 category">
        <div class="container mt-3">
            <div data-aos="fade-up" class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-4">Events</h5>
            </div>
            <div class="row g-3">
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-md-3">
                            <div class="single__news">
                                <div class="thumb">
                                    <a href="{{ route('events.eventDetail', $event) }}">
                                        <img src="{{ $event->image }}" alt="">
                                    </a>
                                </div>
                                <div class="news_info mt-2">

                                    <h5 class="mb-1" style="color: black">
                                        {{ $event->title }}
                                    </h5>

                                    <div class="d-flex justify-content-between">
                                        <p class="d-flex align-items-center"><span style="color: black"><i
                                                    class="fa fa-calendar"></i>
                                                {{ $event->date }}</span>
                                        </p>
                                        <a href="{{ route('events.eventDetail', $event) }}"
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
            <div data-aos="fade-up"class="text-center"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-4">Gallery</h5>

            </div>
            <div class="row g-3">
                <div data-aos="fade-up" class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div data-aos="fade-up" class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                            <a class="position-relative d-block overflow-hidden" href="#">
                                @if ($galleries->isNotEmpty() && $galleries->first()->photos->isNotEmpty())
                                    @foreach ($galleries->first()->photos as $photo)
                                        <img class="img" src="{{ asset('storage/' . $photo->images) }}"
                                            alt="">
                                    @break
                                @endforeach
                            @else
                                <img class="img" src="{{ asset('placeholder-image.jpg') }}"
                                    alt="Placeholder Image">
                            @endif
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">
                                    {{ $galleries->first()?->title_en }}
                                </h5>
                            </div>
                        </a>
                    </div>


                    @foreach ($galleries as $key => $data)
                        @if ($key == 1 || $key == 2)
                            <div data-aos="fade-up" class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    @if ($data->photos->isNotEmpty())
                                        @foreach ($data->photos as $photo)
                                            <img class="img" src="{{ asset('storage/' . $photo->images) }}"
                                                alt="">
                                        @break
                                    @endforeach
                                @else
                                    <img class="img" src="{{ asset('placeholder-image.jpg') }}"
                                        alt="Placeholder Image">
                                @endif
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">
                                        {{ request()->language == 'en' ? $data->title_en : $data->title }}
                                    </h5>
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
        <h5 class="section bg-intro text-center text-color px-3 mb-4">Members</h5>
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

<div class="container mt-4">
<div class="text-center">
    <h5 class="section bg-intro text-center text-color px-3 mb-4">WOrd From Our Team</h5>
    {{-- <h1 class="mb-3">What We Say</h1> --}}
</div>
</div>
<section class="testimonial text-center">
<div class="container-fluid">
    <div id="testimonial4"
        class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
        data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="testimonial4_slide">
                    <img src="{{ asset('assets/frontend/images/dip.jpeg') }}"
                        class="img-circle img-responsive" />
                    <p class="mt-2">As the President of Tharu Society Sydney Australia, I am honored to lead an
                        organization
                        that unites and empowers the Nepalese Tharu community in Australia. Our society
                        strives
                        to preserve and promote our rich Tharu culture, traditions, and values, while also
                        providing a platform for social, educational, and economic development within our
                        community.</p>
                    <p> I am proud to witness the positive impact we have made in the lives of our members,
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
                    <h4 class="my-5">President<br>
                        Dip Narayan Chaudhary </h4>
                </div>
            </div>
            <div class="carousel-item">
                <div class="testimonial4_slide">
                    <img src="{{ asset('assets/frontend/images/arun.jpeg') }}"
                        class="img-circle img-responsive" />
                    <p class="mt-2">As the Public Relations Officer of Tharu Society Sydney Australia, I am proud
                        to be a
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
                    <h4 class="my-5">Public Relation officer<br>Arun Aaryan Chaudhary</h4>
                </div>
            </div>
            <div class="carousel-item">
                <div class="testimonial4_slide">
                    <div class="d-flex">
                        <img src="{{ asset('assets/frontend/images/pooja.jpg') }}"
                            class="img-circle img-responsive" />
                        <img src="{{ asset('assets/frontend/images/umesh.jpeg') }}"
                            class="img-circle img-responsive" />
                    </div>
                    <p class="mt-3">
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
                    <h4 class="my-5">Cultural secretary and IT co-ordinator<br>
                        Pooja Chaudhary & Umesh Chaudhary</h4>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#testimonial4" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
</section>


<div class="container-fluid my-5 position-relative">
<!-- Content -->
<div class="text-center" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <h5 class="section bg-intro text-center text-color px-3 mb-5">Contact</h5>
    {{-- <h1 class="mb-3">{{ __('') }}</h1> --}}
</div>

<div class="row">
    <div class="parallax"></div>
    <div style="font-size: 36px">
        <div class="contact text-center">
            <h2 class="text-white   fw-bold">Tharu Society Sydney Australia</h2>
            <a href="{{ route('contact') }}">
                <button class="btn text-black">Connect with us</button>
            </a>
        </div>
    </div>
</div>
</div>



{{-- <div class="container-fluid my-5">
        <div data-aos="fade-up" class="text-center"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h5 class="section bg-intro text-center text-color px-3 mb-5">Map</h5>
        </div>
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.539536673913!2d151.09382087508942!3d-33.87575591941801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bad8d4c50f79%3A0xb370a391d5e78b91!2sUnit%209%2F11%20Russell%20St%2C%20Strathfield%20NSW%202135%2C%20Australia!5e0!3m2!1sen!2snp!4v1703665166180!5m2!1sen!2snp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div> --}}



@endsection
