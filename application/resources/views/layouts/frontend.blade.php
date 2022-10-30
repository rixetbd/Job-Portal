<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('meta_data')

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/frontend')}}/images/favicon.ico">

    <!-- Choise Css -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/frontend')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/frontend')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!--Custom Css-->
</head>

<body>
    <!--start page Loader -->
    {{-- <div id="preloader">
        <div id="status">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div> --}}
    <!--end page Loader -->

    <!-- Begin page -->
    <div>
        <!-- START TOP-BAR -->
        <div class="top-bar">
            <div class="container-fluid custom-container">
                <div class="row g-0 align-items-center">
                    <div class="col-md-7">
                        <ul class="list-inline mb-0 text-center text-md-start">
                            <li class="list-inline-item">
                                <p class="fs-13 mb-0"> <i class="mdi mdi-map-marker"></i> Your Location: <a
                                        href="javascript:void(0)" class="text-dark" id="user_location_fetch">User
                                        Location</a></p>
                            </li>
                            {{-- <li class="list-inline-item">
                                    <ul class="topbar-social-menu list-inline mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                    class="uil uil-whatsapp"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                    class="uil uil-facebook-messenger-alt"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                    class="uil uil-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                    class="uil uil-envelope"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                    class="uil uil-twitter-alt"></i></a></li>
                                    </ul>
                                </li> --}}
                        </ul>
                    </div>
                    @if (empty(Auth::guard('CandidateAuth')->user()) && empty(Auth::guard('CompanyAuth')->user()))
                    <div class="col-md-5">
                        <ul class="list-inline mb-0 text-center text-md-end">
                            <li class="list-inline-item py-2 me-2 align-middle">
                                <a href="#signupModal" class="text-dark fw-medium fs-13" data-bs-toggle="modal"><i class="uil uil-user"></i> Sign in</a>
                            </li>
                            <li class="list-inline-item py-2 me-2 align-middle">
                                <a href="{{route('register')}}" class="text-dark fw-medium fs-13"><i class="uil uil-lock"></i> Sign up</a>
                            </li>

                            <li class="list-inline-item py-2 me-2 align-middle">
                                <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                                    <i class="uil uil-brightness mode-dark mx-auto"></i>
                                    <i class="uil uil-moon mode-light"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!-- END TOP-BAR -->

        <!--Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
            <div class="container-fluid custom-container">
                <a class="navbar-brand text-dark fw-bold me-auto" href="index.html">
                    <img src="{{asset('assets/frontend')}}/images/logo-dark.png" height="22" alt="" class="logo-dark" />
                    <img src="{{asset('assets/frontend')}}/images/logo-light.png" height="22" alt=""
                        class="logo-light" />
                </a>
                <div>
                    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center">
                        <li class="nav-item">
                            <a href="{{route('frontend.index')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="jobsdropdown" role="button"
                                data-bs-toggle="dropdown">
                                Company <div class="arrow-down"></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="jobsdropdown">
                                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                <li><a class="dropdown-item" href="services.html">Services</a></li>
                                <li><a class="dropdown-item" href="team.html">Team</a></li>
                                <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                <a class="dropdown-item" href="privacy-policy.html">Priacy & Policy</a>
                                <li><a class="dropdown-item" href="faqs.html">Faqs</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="pagesdoropdown" role="button"
                                data-bs-toggle="dropdown">
                                Pages
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center"
                                aria-labelledby="pagesdoropdown">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span class="dropdown-header">Jobs</span>
                                        <div>
                                            <a class="dropdown-item" href="job-list.html">Job List</a>
                                            <a class="dropdown-item" href="job-list-2.html">Job List-2</a>
                                            <a class="dropdown-item" href="job-grid.html">Job Grid</a>
                                            <a class="dropdown-item" href="job-grid-2.html">Job Grid-2</a>
                                            <a class="dropdown-item" href="job-details.html">Job Details</a>
                                            <a class="dropdown-item" href="job-categories.html">Jobs Categories</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="dropdown-header">Candidates / Companys</span>
                                        <div>
                                            <a class="dropdown-item" href="candidate-list.html">Candidate List</a>
                                            <a class="dropdown-item" href="candidate-grid.html">Candidate Grid</a>
                                            <a class="dropdown-item" href="candidate-details.html">Candidate Details</a>
                                            <a class="dropdown-item" href="company-list.html">Company List</a>
                                            <a class="dropdown-item" href="company-details.html">Company Details</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="dropdown-header">Extra Pages</span>
                                        <div>
                                            <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                                            <a class="dropdown-item" href="sign-in.html">Sign In</a>
                                            <a class="dropdown-item" href="sign-out.html">Sign Out</a>
                                            <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            <a class="dropdown-item" href="404-error.html">404 Error</a>
                                            <a class="dropdown-item" href="components.html">Components</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="productdropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                                <div class="arrow-down"></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="productdropdown">
                                <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                <li><a class="dropdown-item" href="blog-modern.html">Blog Modern</a></li>
                                <li><a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a class="dropdown-item" href="blog-details.html">Blog details</a></li>
                                <li><a class="dropdown-item" href="blog-author.html">Blog Author</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('frontend.contact')}}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>

                @auth('CandidateAuth')
                <ul class="header-menu list-inline d-flex align-items-center mb-0">
                    <li class="list-inline-item dropdown me-4">
                        <a href="javascript:void(0)" class="header-item noti-icon position-relative" id="notification"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-bell fs-22"></i>
                            <div class="count position-absolute">3</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end p-0"
                            aria-labelledby="notification">
                            <div class="notification-header border-bottom bg-light">
                                <h6 class="mb-1"> Notification </h6>
                                <p class="text-muted fs-13 mb-0">You have 4 unread Notification</p>
                            </div>
                            <div class="notification-wrapper dropdown-scroll">
                                <a href="javascript:void(0)" class="text-dark notification-item d-block active">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs bg-primary text-white rounded-circle text-center">
                                                <i class="uil uil-user-check"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">22 verified registrations</h6>
                                            <p class="mb-0 fs-12 text-muted"><i class="mdi mdi-clock-outline"></i>
                                                <span>3 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{asset('assets/frontend')}}/images/user/img-02.jpg"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">James Lemire</h6>
                                            <p class="text-muted fs-12 mb-0"><i class="mdi mdi-clock-outline"></i>
                                                <span>15 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{asset('assets/frontend')}}/images/featured-job/img-04.png"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">Applications has been approved</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>45 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{asset('assets/frontend')}}/images/user/img-01.jpg"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">Kevin Stewart</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>1 hour
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{asset('assets/frontend')}}/images/featured-job/img-01.png"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-15">Creative Agency</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>2 hour
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="notification-footer border-top text-center">
                                <a class="primary-link fs-13" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="list-inline-item dropdown">
                        <a href="javascript:void(0)" class="header-item" id="userdropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if (!empty(Auth::guard('CandidateAuth')->user()->avater))
                                <img src="{{Auth::guard('CandidateAuth')->user()->avater}}" alt="mdo" width="35" height="35"
                                class="rounded-circle me-1">
                            @endif

                                <span class="d-none d-md-inline-block fw-medium">Hi,
                                {{Auth::guard('CandidateAuth')->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                            <li><a class="dropdown-item" href="manage-jobs.html">Manage Jobs</a></li>
                            <li><a class="dropdown-item" href="bookmark-jobs.html">Bookmarks Jobs</a></li>
                            <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
                @endauth

                @auth('CompanyAuth')
                <ul class="header-menu list-inline d-flex align-items-center mb-0">
                    <li class="list-inline-item dropdown me-4">
                        <a href="javascript:void(0)" class="header-item noti-icon position-relative" id="notification"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-bell fs-22"></i>
                            <div class="count position-absolute">3</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end p-0"
                            aria-labelledby="notification">
                            <div class="notification-header border-bottom bg-light">
                                <h6 class="mb-1"> Notification </h6>
                                <p class="text-muted fs-13 mb-0">You have 4 unread Notification</p>
                            </div>
                            <div class="notification-wrapper dropdown-scroll">
                                <a href="javascript:void(0)" class="text-dark notification-item d-block active">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs bg-primary text-white rounded-circle text-center">
                                                <i class="uil uil-user-check"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">22 verified registrations</h6>
                                            <p class="mb-0 fs-12 text-muted"><i class="mdi mdi-clock-outline"></i>
                                                <span>3 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{asset('assets/frontend')}}/images/user/img-02.jpg"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">James Lemire</h6>
                                            <p class="text-muted fs-12 mb-0"><i class="mdi mdi-clock-outline"></i>
                                                <span>15 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{asset('assets/frontend')}}/images/featured-job/img-04.png"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">Applications has been approved</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>45 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{asset('assets/frontend')}}/images/user/img-01.jpg"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">Kevin Stewart</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>1 hour
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{asset('assets/frontend')}}/images/featured-job/img-01.png"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-15">Creative Agency</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>2 hour
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="notification-footer border-top text-center">
                                <a class="primary-link fs-13" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="list-inline-item dropdown">
                        <a href="javascript:void(0)" class="header-item" id="userdropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{Auth::guard('CompanyAuth')->user()->avater}}" alt="mdo" width="35" height="35"
                                class="rounded-circle me-1"> <span class="d-none d-md-inline-block fw-medium">Hi,
                                {{Auth::guard('CompanyAuth')->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                            <li><a class="dropdown-item" href="manage-jobs.html">Manage Jobs</a></li>
                            <li><a class="dropdown-item" href="bookmark-jobs.html">Bookmarks Jobs</a></li>
                            <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
                @endauth
            </div>
        </nav>


        <!-- START SIGN-UP MODAL -->
        <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div class="position-absolute end-0 top-0 p-3">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="auth-content">
                            <div class="w-100">
                                <div class="text-center mb-4">
                                    <h5>Sign In</h5>
                                    <p class="text-muted">Sign In and get access to all the features of
                                        {{env('APP_NAME')}}</p>
                                </div>
                                <form method="POST" action="{{ route('custom.login') }}" class="auth-form">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="usernameInput"
                                            class="form-label">{{ __('Email Address') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus
                                            placeholder="Enter your email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="passwordInput"
                                            class="form-label">{{ __('Password') }}</label>
                                        <input id="password" type="text"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required placeholder="Enter your password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-check"><input class="form-check-input"
                                                type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            @if (Route::has('password.request'))
                                            <a class="float-end text-white"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                            <label class="form-check-label"
                                                for="remember">{{ __('Remember Me') }}</label>
                                        </div>

                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                    </div>
                                </form>
                                <div class="row my-3 justify-content-center">
                                    <div class="col-12 text-center">
                                        <a class="btn btn-sm btn-light text-dark log_btn" href="{{ route('login.google') }}"><i class="fab fa-google me-1"></i> Sign with Google</a>
                                        <a class="btn btn-sm btn-light text-dark log_btn" href="{{ route('login.facebook') }}"><i class="fab fa-facebook-f me-1"></i> Sign with Facebook</a>
                                    </div>
                                </div>
                                <div class="mt-3 text-center">
                                    <p class="mb-0">Don't have an account ? <a href="{{route('register')}}" class="form-text text-primary text-decoration-underline"> Sign Up </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal-body-->
                </div>
                <!--end modal-content-->
            </div>
            <!--end modal-dialog-->
        </div>
        <!-- END SIGN-UP MODAL -->

        <div class="main-content">

            <div class="page-content">

                @yield('content')

            </div>
            <!-- End Page-content -->

            @include('layouts.frontend_footer')
            <!--start back-to-top-->
            <button onclick="topFunction()" id="back-to-top">
                <i class="mdi mdi-arrow-up"></i>
            </button>
            <!--end back-to-top-->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/frontend')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Choice Js -->
    <script src="{{asset('assets/frontend')}}/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Swiper Js -->
    <script src="{{asset('assets/frontend')}}/libs/swiper/swiper-bundle.min.js"></script>
    <!-- Job-list Init Js -->
    <script src="{{asset('assets/frontend')}}/js/pages/job-list.init.js"></script>
    <!-- Switcher Js -->
    <script src="{{asset('assets/frontend')}}/js/pages/switcher.init.js"></script>
    <script src="{{asset('assets/frontend')}}/js/pages/index.init.js"></script>
    <script src="{{asset('assets/frontend')}}/js/app.js"></script>
    <script>
        async function fetchLocation() {
            let url = 'https://ipinfo.io/json?token=f163521694d66d';
            let response = await fetch(url);
            let data = await response.json();
            $('#user_location_fetch').html(data.city);
        }
        fetchLocation();

    </script>

</body>

</html>
