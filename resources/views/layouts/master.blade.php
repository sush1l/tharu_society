<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo.jpeg') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @stack('style')
    {!! $header->meta !!}

</head>

<body>
    <button onclick="topFunction()" id="backToTop" title="Go to top">
        <div class="back-to-top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </div>
    </button>


    <div class="sub-header-card d-none d-sm-block">
        <div class="row">
            <div class="col-md-6">
                <div class="sub-header-dt-card">
                    <i class="fa fa-envelope"> <a class="text-white"
                            href="mailto:{{ $header->office_email }}">{{ $header->office_email }}</a></i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                    <div class="sub-header-dt-card">
                        <i class="fa fa-phone fw-bold"><a class="text-white" href="tel:{{ $header->office_phone }}">
                                {{ $header->office_phone }}</a></i>
                    </div>
                    {{-- <div class="header-navbar-language">
                            <ul>
                                <li>
                                    <a href="{{ route('login') }}" target="_blank">
                                        <p class="active">LOGIN</p>
                                    </a>
                                </li>

                            </ul>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials.nav')

    @yield('content')

    @include('frontend.partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/light.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owlcarsouel.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' type='text/javascript'></script>
    <script src='https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/slick.js' type='text/javascript'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <script>
        AOS.init();
    </script>
    <script @stack('script') <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.innerWidth > 992) {
                document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem) {
                    everyitem.addEventListener('mouseover', function(e) {
                        let el_link = this.querySelector('a[data-bs-toggle]');
                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.add('show');
                            nextEl.classList.add('show');
                        }
                    });
                    everyitem.addEventListener('mouseleave', function(e) {
                        let el_link = this.querySelector('a[data-bs-toggle]');
                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.remove('show');
                            nextEl.classList.remove('show');
                        }
                    })
                });
            }
        });
    </script>
    <script>
        //Get the button
        const backToTop = document.getElementById("backToTop");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTop.style.display = "block";
            } else {
                backToTop.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>




    <script>
        $(document).ready(function() {
            $('#exampleModal').modal('show');
            $('#carouselExampleIndicators').on('slid.bs.carousel', function() {
                var activeIndex = $('#carouselExampleIndicators .carousel-item.active').index();
                var popupCount = $('#carouselExampleIndicators').data('popup-count');
                var nextIndex = (activeIndex + 1) % popupCount;
                var title = $('#carouselExampleIndicators .carousel-item').eq(nextIndex).find('img').attr(
                    'data-title');
                $('#modalTitle').text(title);
                // Check if $popups is defined and not empty
                @if (isset($popups) && $popups->count() > 0)
                    var nextIndex = (activeIndex + 1) % {{ $popups->count() }};
                    var title = $('#carouselExampleIndicators .carousel-item').eq(nextIndex).find('img')
                        .attr('data-title');
                    $('#modalTitle').text(title);
                @endif
            });
            // Close the modal when the "Close" button is clicked
            $('#closeModalButton').on('click', function() {
                $('#exampleModal').modal('hide');
            });
        });
    </script>





</body>

</html>
