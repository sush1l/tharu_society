@extends('layouts.master')
@section('content')
    <div id="body">
        <div class="about mt-4">
            <div class="container">
                <h1>{{__('Contact')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h5 class="section bg-intro text-center text-color px-3 mb-5">{{__('Get In Touch')}}</h5>
            </div>
            <div class="row g-3">
                <div class="row">
                    <div class="col-md-7">
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif

                        <div class="card shadow-none p-3 mb-5 bg-light rounded" >
                            <form class="row g-3 mx-4 my-4 " method="post" action="{{route('contact.store')}}">
                                @csrf
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="{{old('name')}}" name="name" class="form-control" id="name"
                                           placeholder="Name">
                                    @error('name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" value="{{old('email')}}" class="form-control" name="email" id="email"
                                           placeholder="Email">
                                    @error('email')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="phone" class="form-label">Phone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="{{old('phone')}}" class="form-control" id="phone" placeholder="Phone" name="phone">
                                    @error('phone')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="subject" class="form-label">Subject <span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="{{old('subject')}}" class="form-control" name="subject" id="subject"
                                           placeholder="Subject">
                                    @error('subject')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="message" class="form-label">Message <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Message"
                                              rows="5">{{old('message')}}</textarea>
                                    @error('message')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="card-02">
                            <h5 class="text-center fw-bold text-white">{{__('Address')}}</h5>
                        </div>
                        <div class="address">
                            <h6 class="fw-bold">{{request()->language=='en' ? $header->office_address_en : $header->office_address}}</h6>
                            <p><b>P.O. Box:-</b> 005 Bharatpur, Chitwan, Neapl</p>
                            <p><b>Telephone :- </b> {{$header->office_phone}}</p>
                            <p><b>Email :-</b> {{$header->office_email}}</p>
                            <h6><b>Website :-</b> https://readcc.com.np</h6>
                        </div>
                        <div class="card-02 mt-5">
                            <h5 class="text-center fw-bold text-white">{{__('Location')}}</h5>
                        </div>
                        <div class="map mt-3">
                            <iframe
                                src="{!! $header->map_iframe !!}"
                                width="500" height="210" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
