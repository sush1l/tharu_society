@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">Get In Touch</h5>
            </div>
            <div class="row g-3">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="card shadow-none p-3 mb-5 bg-light rounded">
                            <form class="row g-3 mx-4 my-4 ">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">First & Middle Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name"
                                        placeholder="First & Middle Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                                </div>
                                <div class="col-6">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="col-6">
                                    <label for="phone_number" class="form-label">Telephone No <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone_number" placeholder="+977">
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" placeholder="Address">
                                </div>

                                <div class="col-md-6">
                                    <label for="subject" class="form-label">Subject <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-md-12">
                                    <label for="subject" class="form-label">Message <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="subject" rows="5"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="card-02">
                            <h5 class="text-center fw-bold text-white">Address</h5>
                        </div>
                        <div class="address">
                            <h6 class="fw-bold">Basantachwok, Gondrang, Bharatpur-9, chitwan</h6>
                            <p><b>P.O. Box :-</b> 005 Bharatpur, Chitwan, Nepal</p>
                            <p><b>Telephone :- </b>+977 56 420266/9845806910</p>
                            <p><b>Email :-</b> readcc.nepal@gmail.com<br>
                                readcc.secretary@gmail.com</p>
                            <h6><b>Website :-</b> http//.readcc.com.np</h6>
                        </div>
                        <div class="card-02 mt-5">
                            <h5 class="text-center fw-bold text-white">Location</h5>
                        </div>
                        <div class="map mt-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3521.2489939304382!2d81.6115302745648!3d28.047421010412023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399867a9e458155b%3A0xb3a9de606a21f9a0!2sNinja%20Infosys%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1681816599743!5m2!1sen!2snp"
                                width="430" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
