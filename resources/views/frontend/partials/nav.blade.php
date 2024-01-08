<nav class="navbar navbar-light navbar-expand-lg shadow py-1 sticky-top" style="background: #fff">
    <a href="{{ route('welcome') }}" class="navbar-brand px-3">
        <div class="d-flex flex-row">
            <div class="p-2">
                <img src="{{ asset('assets/frontend/images/logo.jpeg') }}" alt="Logo" height="80">
            </div>
            <div class="p-2">
                <h5 class="text-primary fw-bold my-3">THARU <span class="text-dark">SOCIETY<br><span class="text-primary fw-bold my-3">SYDNEY</span> AUSTRALIA</span> </h5>
            </div>
        </div>

    </a>
    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars text-primary"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page"
                    href="{{ route('welcome') }}">{{ __('Home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about-us') }}">{{ __('About Us') }}</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('MemberShip') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item"
                            href="{{ route('membershipIntro') }}">{{ __('Introduction') }}</a></li>
                    {{-- <li><a class="dropdown-item"
                            href="{{ route('member') }}">{{ __('Our Members') }}</a></li> --}}
                            <li><a class="dropdown-item"
                                href="{{ route('join') }}">{{ __('Membership Join Form') }}</a></li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('Events') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item"
                            href="{{ route('eventIntro') }}">{{ __('Event Details') }}</a></li>
                    <li><a class="dropdown-item"
                            href="{{ route('events') }}">{{ __('UpComing Events') }}</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs') }}">{{ __('Blogs') }}</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('Gallery') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item"
                            href="{{ route('photo') }}">{{ __('Photo Gallery') }}</a></li>
                    <li><a class="dropdown-item"
                            href="{{ route('video') }}">{{ __('Video Gallery') }}</a></li>
                </ul>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('addCity') }}">{{ __('Job Opportunities') }}</a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a>
            </li>
            </div>

        </div>
    </div>

</nav>



