@extends('layouts.master')
@section('content')
<div id="body">
    <div class="about mt-4">
        <div class="container">
            <h1>Professional Short Courses</h1>
        </div>
    </div>
</div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section bg-intro text-center text-color px-3 mb-5">Courses</h6>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="course-item bg-info">
                        <div class="position-relative overflow-hidden">
                            <img class="img" src="{{ asset('assets/frontend/images/login-officejpeg.jpg') }}"
                                alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rs 1499.00</h3>
                            <h5 class="mb-4">Web Design &amp; Development Course for Beginners</h5>
                            <p>Traning Date & Venue :- 2080-02-10 & Kathmandu</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user design me-2"></i>John
                                Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa-solid fa-clock-three"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user design me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="course-item bg-info">
                        <div class="position-relative overflow-hidden">
                            <img class="img" src="{{ asset('assets/frontend/images/login-officejpeg.jpg') }}"
                                alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rs 1499.00</h3>
                            <h5 class="mb-4">Web Design &amp; Development Course for Beginners</h5>
                            <p>Traning Date & Venue :- 2080-02-10 & Kathmandu</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user design me-2"></i>John
                                Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa-solid fa-clock-three"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user design me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="course-item bg-info">
                        <div class="position-relative overflow-hidden">
                            <img class="img" src="{{ asset('assets/frontend/images/login-officejpeg.jpg') }}"
                                alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rs 1499.00</h3>
                            <h5 class="mb-4">Web Design &amp; Development Course for Beginners</h5>
                            <p>Traning Date & Venue :- 2080-02-10 & Kathmandu</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user design me-2"></i>John
                                Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa-solid fa-clock-three"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user design me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
