<footer class="footer">
    <div class="overlay">
        <div class="container">
            <div class="row footer_row">
                <div class="col">
                    <div class="footer_content">
                        <div class="row">
                            <div class="col-lg-4 footer_col">
                                <div class="footer_section footer_about">
                                    <div class="footer_logo_container">
                                        <a href="#">
                                            <div class="footer_logo_text mt-4">
                                                {{ request()->language == 'en' ? $header->office_name_en : $header->office_name }}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="footer_about_text">
                                        <p>{{ $header->office_name }}</p>
                                    </div>
                                    <div class="footer_social">
                                        <ul>
                                            <li><a href="{{ $header->facebook_iframe }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-google-plus"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 footer_col">
                                <div class="footer_section footer_contact">
                                    <div class="footer_title mt-3 text-center">{{ __('Contact') }}</div>
                                    <div class="footer_links_container text-white">
                                        <ul>
                                            <li class="fw-bold">{{ __('Email') }}:<a href="mailto:{{ $header->office_email }}"> {{ $header->office_email }}</a></li>
                                            <li class="fw-bold">{{ __('Phone') }}:<a href="tel:{{$header->office_phone}}"> {{ $header->office_phone }}</a></li>
                                            {{-- <li>{{ request()->language == 'en' ? $header->office_address_en : $header->office_address }} --}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 footer_col">
                                <div class="footer_section footer_links">
                                    <div class="footer_title mt-4">{{ __('Quick Links') }}</div>
                                    <div class="footer_link_container">
                                        <ul>
                                            <li><a href="{{ route('welcome') }}">{{ __('Home') }}</a></li>
                                            <li><a href="{{ route('about-us') }}">{{ __('About Us') }}</a></li>
                                            <li><a href="{{route('photo')}}">{{ __('Gallery') }}</a></li>
                                            <li><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyright_row mt-2">
                <div class="col">
                    <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                        <div class="col-md-6 fw-bold">
                            Copyright ©
                            {{ date('Y') }} All rights reserved by <a href="https://tharusociety.techworkcompany.com" class="text-white">TSSA</a>
                        </div>
                        <div class="col-md-6 fw-bold">
                            <ul>
                                <li>Design & Developed By :<a href="https://ninjainfosys.com.np" target="_blank"
                                        class="text-white"> Techwork Company Pvt. Ltd.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
