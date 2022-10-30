<!--

    https://colorhunt.co/palette/c5f0a435b0ab226b80f34573

-->

<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Sign In | WantJob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/frontend')}}/images/favicon.ico">
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/frontend')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- App Css-->
    <link href="{{asset('assets/frontend')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!--Custom Css-->
    <style>
        .log_btn {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            background-color: #dddddd;
        }

    </style>
</head>

<body>
    <!-- Begin page -->
    <div>
        <div class="main-content">
            <div class="page-content">
                <!-- START SIGN-IN -->
                <section class="bg-auth">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-5">
                                <div class="card auth-box">
                                    <div class="auth-content card-body p-5 h-100 text-white">
                                        <div class="w-100">
                                            <div class="text-center mb-4">
                                                <h5>Welcome Back !</h5>
                                                <p class="text-white-70">Sign in to continue to Jobcy.</p>
                                            </div>
                                            <form method="POST" action="{{ route('login') }}" class="auth-form">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="usernameInput"
                                                        class="form-label">{{ __('Email Address') }}</label>
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus placeholder="Enter your email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="passwordInput"
                                                        class="form-label">{{ __('Password') }}</label>
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password"
                                                        placeholder="Enter your password">

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
                                                    <button type="submit" class="log_btn btn btn-sm btn-white w-100">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="mt-4 text-center">
                                                <p class="mb-0">Don't have an account ? <a href="{{url('/register')}}"
                                                        class="fw-medium text-white text-decoration-underline">
                                                        Sign Up </a></p>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <a class="btn btn-sm log_btn my-2" style="background-color: #226B80;color:#fff"
                                                    href="{{ route('login.google') }}"><i
                                                        class="fab fa-google me-1"></i> Sign with Google</a>
                                                <a class="btn btn-sm log_btn my-2" style="background-color: #226B80;color:#fff"
                                                    href="{{ route('login.facebook') }}"><i
                                                        class="fab fa-facebook-f me-1"></i> Sign
                                                    with Facebook</a>
                                            </div>
                                        </div>

                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end auth-box-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </section>
                <!-- END SIGN-IN -->

            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/frontend')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>

    <!-- Switcher Js -->
    <script src="{{asset('assets/frontend')}}/js/pages/switcher.init.js"></script>

</body>

</html>
