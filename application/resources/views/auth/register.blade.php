<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Sign Up | {{ config('app.name', 'RixetBD') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/frontend')}}/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/frontend')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
        <!-- App Css-->
        <link href="{{asset('assets/frontend')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!--Custom Css-->

        <style>
            .log_btn{
                display: inline-block;
                text-align: center;
                text-decoration: none;
                vertical-align: middle;
                cursor: pointer;
                transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                background-color: #dddddd;
            }
        </style>
    </head>

    <body>
         {{-- <!--start page Loader -->
         <div id="preloader">
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
        </div>
        <!--end page Loader --> --}}

        <!-- Begin page -->
        <div>


            <div class="main-content">

                <div class="page-content">

                    <!-- START SIGN-UP -->
                    <section class="bg-auth">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12">
                                    <div class="card auth-box">
                                        <div class="row align-items-center">
                                            {{-- <div class="col-lg-6 text-center">
                                                <div class="card-body p-4">
                                                    <a href="index.html">
                                                        <img src="{{asset('assets/frontend')}}/images/logo-light.png" alt="" class="logo-light img-fluid">
                                                    </a>
                                                    <div class="mt-5">
                                                        <img src="{{asset('assets/frontend')}}/images/auth/sign-up.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-6 p-0">
                                                <div class="card-body px-5 pt-5">
                                                    <div class="w-100">
                                                        <div class="text-center">
                                                            <h5>Candidate Name</h5>
                                                            <p class="">Sign Up and get access to all the features of {{ config('app.name', 'RixetBD') }}</p>
                                                        </div>
                                                        <form action="{{route('candidate.store')}}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="candidatenameInput" class="form-label">Candidate Name</label>
                                                                <input type="text" class="form-control" required id="candidatenameInput" name="name" placeholder="Enter your name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="candidateemailInput" class="form-label">Email</label>
                                                                <input type="email" class="form-control" required id="candidateemailInput" name="email" placeholder="Enter your email">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="candidatepasswordInput" class="form-label">Password</label>
                                                                <input type="password" class="form-control" id="candidatepasswordInput" name="password" placeholder="Enter your password">
                                                            </div>
                                                            <div class="mb-4">
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" name="checkbox" value="1">
                                                                    <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class=" text-decoration-underline">Terms and conditions</a></label>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6 p-0">
                                                <div class="card-body px-5 pt-5">
                                                    <div class="w-100">
                                                        <div class="text-center">
                                                            <h5>Company Name</h5>
                                                            <p class="">Sign Up and get access to all the features of {{ config('app.name', 'RixetBD') }}</p>
                                                        </div>
                                                        <form action="{{route('company.store')}}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="nameInput" class="form-label">Name</label>
                                                                <input type="text" class="form-control" required id="nameInput" name="name" placeholder="Enter your name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Email</label>
                                                                <input type="email" class="form-control" required id="emailInput" name="email" placeholder="Enter your email">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="passwordInput" class="form-label">Password</label>
                                                                <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter your password">
                                                            </div>
                                                            <div class="mb-4">
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefaultCompany" name="checkbox" value="1">
                                                                    <label class="form-check-label" for="flexCheckDefaultCompany">I agree to the <a href="javascript:void(0)" class="text-decoration-underline">Terms and conditions</a></label>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="row my-3 justify-content-center">
                                                <div class="col-md-8 text-center">
                                                    <a class="btn btn-sm btn-light text-dark log_btn" href="{{ route('login.google') }}"><i class="fab fa-google me-1"></i> Sign with Google</a>
                                                    <a class="btn btn-sm btn-light text-dark log_btn" href="{{ route('login.facebook') }}"><i class="fab fa-facebook-f me-1"></i> Sign with Facebook</a>
                                                </div>
                                            </div>
                                            <div class="mb-3 text-center">

                                                <p class="mb-0">Already a member ? <a href="{{route('login')}}" class="fw-medium  text-decoration-underline"> Sign In </a></p>
                                            </div>
                                        </div><!--end row-->
                                    </div><!--end auth-box-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END SIGN-UP -->

                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/frontend')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


        <!-- Switcher Js -->
        <script src="{{asset('assets/frontend')}}/js/pages/switcher.init.js"></script>

    </body>
</html>
