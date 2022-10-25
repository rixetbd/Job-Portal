<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Home | {{env('APP_NAME')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/frontend')}}/images/favicon.ico">

        <!-- Choise Css -->
        <link rel="stylesheet" href="{{asset('assets/frontend')}}/libs/choices.js/public/assets/styles/choices.min.css">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{asset('assets/frontend')}}/libs/swiper/swiper-bundle.min.css">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/frontend')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/frontend')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!--Custom Css-->

    </head>

    <body>
         <!--start page Loader -->
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
                                    <p class="fs-13 mb-0"> <i class="mdi mdi-map-marker"></i> Your Location: <a href="javascript:void(0)" class="text-dark" id="user_location_fetch">User Location</a></p>
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
                        <!--end col-->
                        <div class="col-md-5">
                            <ul class="list-inline mb-0 text-center text-md-end">
                                <li class="list-inline-item py-2 me-2 align-middle">
                                    <a href="#signupModal" class="text-dark fw-medium fs-13" data-bs-toggle="modal"><i class="uil uil-user"></i>
                                        Sign in</a>
                                </li>
                                <li class="list-inline-item py-2 me-2 align-middle">
                                    <a href="#signupModal" class="text-dark fw-medium fs-13" data-bs-toggle="modal"><i class="uil uil-lock"></i>
                                        Sign Up</a>
                                </li>

                            </ul>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
            <!-- END TOP-BAR -->

            <!--Navbar Start-->
            <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar" style="margin-top: 38px;">
                <div class="container-fluid custom-container">
                    <a class="navbar-brand text-dark fw-bold me-auto" href="index.html">
                        <img src="{{asset('assets/frontend')}}/images/logo-dark.png" height="22" alt="" class="logo-dark" />
                        <img src="{{asset('assets/frontend')}}/images/logo-light.png" height="22" alt="" class="logo-light" />
                    </a>
                    <div>
                        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mx-auto navbar-center">
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="javascript:void(0)" id="homedrop" role="button" data-bs-toggle="dropdown">
                                    Home <div class="arrow-down"></div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="homedrop">
                                    <li><a class="dropdown-item" href="index.html">Home 1</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Home 2</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Home 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="javascript:void(0)" id="jobsdropdown" role="button" data-bs-toggle="dropdown">
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
                                <a class="nav-link" href="javascript:void(0)" id="pagesdoropdown" role="button" data-bs-toggle="dropdown">
                                    Pages
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center" aria-labelledby="pagesdoropdown">
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
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <span class="dropdown-header">Candidates / Companys</span>
                                            <div>
                                                <a class="dropdown-item" href="candidate-list.html">Candidate List</a>
                                                <a class="dropdown-item" href="candidate-grid.html">Candidate Grid</a>
                                                <a class="dropdown-item" href="candidate-details.html">Candidate Details</a>
                                                <a class="dropdown-item" href="company-list.html">Company List</a>
                                                <a class="dropdown-item" href="company-details.html">Company Details</a>
                                            </div>
                                        </div><!--end col-->
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
                                        </div><!--end col-->
                                    </div>
                                </div>
                            </li><!--end dropdown-->
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="javascript:void(0)" id="productdropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            </li><!--end dropdown-->
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul><!--end navbar-nav-->
                    </div>


                    @if (!empty(Auth::user()))
                    <!--end navabar-collapse-->
                    <ul class="header-menu list-inline d-flex align-items-center mb-0">
                        <li class="list-inline-item dropdown me-4">
                            <a href="javascript:void(0)" class="header-item noti-icon position-relative" id="notification" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-bell fs-22"></i>
                                <div class="count position-absolute">3</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end p-0" aria-labelledby="notification">
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
                                                <p class="mb-0 fs-12 text-muted"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                    ago</span></p>
                                            </div>
                                        </div>
                                    </a><!--end notification-item-->
                                    <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{asset('assets/frontend')}}/images/user/img-02.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-14">James Lemire</h6>
                                                <p class="text-muted fs-12 mb-0"><i class="mdi mdi-clock-outline"></i> <span>15 min
                                                    ago</span></p>
                                            </div>
                                        </div>
                                    </a><!--end notification-item-->
                                    <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{asset('assets/frontend')}}/images/featured-job/img-04.png" class="rounded-circle avatar-xs"
                                                    alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-14">Applications has been approved</h6>
                                                <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>45 min
                                                    ago</span></p>
                                            </div>
                                        </div>
                                    </a><!--end notification-item-->
                                    <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{asset('assets/frontend')}}/images/user/img-01.jpg" class="rounded-circle avatar-xs"
                                                    alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-14">Kevin Stewart</h6>
                                                <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>1 hour
                                                    ago</span></p>
                                            </div>
                                        </div>
                                    </a><!--end notification-item-->
                                    <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{asset('assets/frontend')}}/images/featured-job/img-01.png" class="rounded-circle avatar-xs"
                                                    alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-15">Creative Agency</h6>
                                                <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>2 hour
                                                    ago</span></p>
                                            </div>
                                        </div>
                                    </a><!--end notification-item-->
                                </div><!--end notification-wrapper-->
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
                                <img src="{{asset('assets/frontend')}}/images/profile.jpg" alt="mdo" width="35" height="35" class="rounded-circle me-1"> <span class="d-none d-md-inline-block fw-medium">Hi, Jansh</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                                <li><a class="dropdown-item" href="manage-jobs.html">Manage Jobs</a></li>
                                <li><a class="dropdown-item" href="bookmark-jobs.html">Bookmarks Jobs</a></li>
                                <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                                <li><a class="dropdown-item" href="sign-out.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul><!--end header-menu-->
                    @endif

                </div>
                <!--end container-->
            </nav>
            <!-- Navbar End -->


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
                                        <h5>Sign Up</h5>
                                        <p class="text-muted">Sign Up and get access to all the features of {{env('APP_NAME')}}</p>
                                    </div>
                                    <form action="#" class="auth-form">
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="usernameInput" placeholder="Enter your username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-primary form-text text-decoration-underline">Terms and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Already a member ? <a href="sign-in.html" class="form-text text-primary text-decoration-underline"> Sign-in </a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end modal-body-->
                    </div><!--end modal-content-->
                </div><!--end modal-dialog-->
            </div>
            <!-- END SIGN-UP MODAL -->

            <div class="main-content">

                <div class="page-content">

                    <!-- START HOME -->
                    <section class="bg-home" id="home">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="text-center text-white mb-5">
                                        <h1 class="display-5 fw-semibold mb-3">Search Between More Then <span class="text-warning fw-bold">10,000+</span>
                                            Open Jobs.</h1>
                                        <p class="fs-17">Find jobs, create trackable resumes and enrich your applications.</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <form action="#">
                                <div class="registration-form">
                                    <div class="row g-0">
                                        <div class="col-lg-3">
                                            <div class="filter-search-form filter-border mt-3 mt-lg-0">
                                                <i class="uil uil-briefcase-alt"></i>
                                                <input type="search" id="job-title" class="form-control filter-input-box" placeholder="Job, Company name...">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="filter-search-form filter-border mt-3 mt-lg-0">
                                                <i class="uil uil-map-marker"></i>
                                                <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">&Aring;land Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">C&ocirc;te d'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                    <option value="KR">Korea, Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="AN">Netherlands Antilles</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">R&eacute;union</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barth&eacute;lemy</option>
                                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="filter-search-form mt-3 mt-lg-0">
                                                <i class="uil uil-clipboard-notes"></i>
                                                <select class="form-select" data-trigger name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                                    <option value="4">Accounting</option>
                                                    <option value="1">IT & Software</option>
                                                    <option value="3">Marketing</option>
                                                    <option value="5">Banking</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mt-3 mt-lg-0 h-100">
                                                <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><i class="uil uil-search me-1"></i> Find Job</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end container-->
                            </form>

                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="treding-keywords list-inline mb-0 text-white-50 mt-4 mt-lg-3 text-center">
                                        <li class="list-inline-item text-white"><i class="mdi mdi-tag-multiple-outline text-warning fs-18"></i> Trending Keywords:</li>
                                        <li class="list-inline-item"><a href="javascript:void(0)">Design,</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)">Development,</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)">Manager,</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)">Senior</a></li>
                                    </ul>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- End Home -->

                    <!-- START SHAPE -->
                    <div class="position-relative">
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 220">
                                <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                                    <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
                                </g>
                                <defs>
                                    <mask id="SvgjsMask1004">
                                        <rect width="1440" height="250" fill="#ffffff"></rect>
                                    </mask>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->

                    <!-- START CATEGORY -->
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center">
                                        <h3 class="title">Browser Jobs Categories </h3>
                                        <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                                            right freelancers.</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded text-center">
                                        <div class="popu-category-icon icons-md">
                                            <i class="uim uim-layers-alt"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="javascript:void(0)" class="text-dark stretched-link">
                                                <h5 class="fs-18">IT & Software</h5>
                                            </a>
                                            <p class="text-muted mb-0">2024 Jobs</p>
                                        </div>
                                    </div><!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded text-center">
                                        <div class="popu-category-icon icons-md">
                                            <i class="uim uim-airplay"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-categories.html" class="text-dark stretched-link">
                                                <h5 class="fs-18">Technology</h5>
                                            </a>
                                            <p class="text-muted mb-0">1250 Jobs</p>
                                        </div>
                                    </div><!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded text-center">
                                        <div class="popu-category-icon icons-md">
                                            <i class="uim uim-bag"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-categories.html" class="text-dark stretched-link">
                                                <h5 class="fs-18">Government</h5>
                                            </a>
                                            <p class="text-muted mb-0">802 Jobs</p>
                                        </div>
                                    </div><!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded text-center">
                                        <div class="popu-category-icon icons-md">
                                            <i class="uim uim-user-md"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-categories.html" class="text-dark stretched-link">
                                                <h5 class="fs-18">Accounting / Finance</h5>
                                            </a>
                                            <p class="text-muted mb-0">577 Jobs</p>
                                        </div>
                                    </div><!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded text-center">
                                        <div class="popu-category-icon icons-md">
                                            <i class="uim uim-hospital"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-categories.html" class="text-dark stretched-link">
                                                <h5 class="fs-18">Construction / Facilities</h5>
                                            </a>
                                            <p class="text-muted mb-0">285 Jobs</p>
                                        </div>
                                    </div><!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded text-center">
                                        <div class="popu-category-icon icons-md">
                                            <i class="uim uim-telegram-alt"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-categories.html" class="text-dark stretched-link">
                                                <h5 class="fs-18">Tele-communications</h5>
                                            </a>
                                            <p class="text-muted mb-0">495 Jobs</p>
                                        </div>
                                    </div><!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded text-center">
                                        <div class="popu-category-icon icons-md">
                                            <i class="uim uim-scenery"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-categories.html" class="text-dark stretched-link">
                                                <h5 class="fs-18">Design & Multimedia</h5>
                                            </a>
                                            <p class="text-muted mb-0">1045 Jobs</p>
                                        </div>
                                    </div><!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded text-center">
                                        <div class="popu-category-icon icons-md">
                                            <i class="uim uim-android-alt"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-categories.html" class="text-dark stretched-link">
                                                <h5 class="fs-18">Human Resource</h5>
                                            </a>
                                            <p class="text-muted mb-0">1516 Jobs</p>
                                        </div>
                                    </div><!--end popu-category-box-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-5 text-center">
                                        <a href="job-categories.html" class="btn btn-primary btn-hover">Browse All Categories <i class="uil uil-arrow-right"></i></a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END CATEGORY -->

                    <!-- START JOB-LIST -->
                    <section class="section bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center mb-4 pb-2">
                                        <h4 class="title">New & Random Jobs</h4>
                                        <p class="text-muted mb-1">Post a job to tell us about your project. We'll quickly match you
                                            with the right freelancers.</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <ul class="job-list-menu nav nav-pills nav-justified flex-column flex-sm-row mb-4" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="recent-jobs-tab" data-bs-toggle="pill"
                                                data-bs-target="#recent-jobs" type="button" role="tab" aria-controls="recent-jobs"
                                                aria-selected="true">Recent Jobs</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="featured-jobs-tab" data-bs-toggle="pill"
                                                data-bs-target="#featured-jobs" type="button" role="tab" aria-controls="featured-jobs"
                                                aria-selected="false">Featured Jobs</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="freelancer-tab" data-bs-toggle="pill"
                                                data-bs-target="#freelancer" type="button" role="tab" aria-controls="freelancer"
                                                aria-selected="false">Freelancer</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="part-time-tab" data-bs-toggle="pill"
                                                data-bs-target="#part-time" type="button" role="tab" aria-controls="part-time"
                                                aria-selected="false">Part Time</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="full-time-tab" data-bs-toggle="pill"
                                                data-bs-target="#full-time" type="button" role="tab" aria-controls="full-time"
                                                aria-selected="false">Full Time</button>
                                        </li>
                                    </ul>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="recent-jobs" role="tabpanel"
                                            aria-labelledby="recent-jobs-tab">
                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web Developer</a>
                                                                </h5>
                                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Oakridge Lane ssRichardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-success fs-13 mt-1">Full Time</span>
                                                                <span class="badge bg-soft-info fs-13 mt-1">Private</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                                    - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-danger fs-13 mt-1">Part Time</span>
                                                                <span class="badge bg-soft-info fs-13 mt-1">Private</span>
                                                                <span class="badge bg-soft-warning fs-13 mt-1">Urgent</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                                        Manager</a></h5>
                                                                <p class="text-muted fs-14 mb-0">{{env('APP_NAME')}} Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                                                <span class="badge bg-soft-info fs-13 mt-1">Private</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-lg-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-success fs-13 mt">Full Time</span>
                                                                <span class="badge bg-soft-warning fs-13 mt-1">Urgent</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                                    - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                                            </div>

                                        </div>
                                        <!--end recent-jobs-tab-->

                                        <div class="tab-pane fade" id="featured-jobs" role="tabpanel"
                                            aria-labelledby="featured-jobs-tab">
                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web Developer</a>
                                                                </h5>
                                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-success fs-13 mt-1">Full Time</span>
                                                                <span class="badge bg-soft-info fs-13 mt">Private</span>
                                                                <span class="badge bg-soft-warning fs-13 mt-1">Urgent</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                                    - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-danger fs-13 mt-1">Part Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                                        Manager</a></h5>
                                                                <p class="text-muted fs-14 mb-0">{{env('APP_NAME')}} Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-lg-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-success fs-13 mt-1">Full Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                                    - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end featured-jobs-tab-->

                                        <div class="tab-pane fade" id="freelancer" role="tabpanel" aria-labelledby="freelancer-tab">
                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web Developer</a>
                                                                </h5>
                                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                                    - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                                        Manager</a></h5>
                                                                <p class="text-muted fs-14 mb-0">{{env('APP_NAME')}} Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-lg-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                                    - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end freelancer-tab-->

                                        <div class="tab-pane fade" id="part-time" role="tabpanel" aria-labelledby="part-time-tab">
                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web Developer</a>
                                                                </h5>
                                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-danger fs-13 mt-1">Part Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                                    - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-danger fs-13 mt-1">Part Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                                        Manager</a></h5>
                                                                <p class="text-muted fs-14 mb-0">{{env('APP_NAME')}} Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0"> Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-danger fs-13 mt-1">Part Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-lg-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-danger fs-13 mt-1">Part Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                                    - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end part-time-tab-->

                                        <div class="tab-pane fade" id="full-time" role="tabpanel" aria-labelledby="full-time-tab">
                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web Developer</a>
                                                                </h5>
                                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-success fs-13 mt-1">Full Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                                    - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-success fs-13 mt-1">Full Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                                        Manager</a></h5>
                                                                <p class="text-muted fs-14 mb-0">{{env('APP_NAME')}} Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Phoenix,  Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-success fs-13 mt-1">Full Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label text-center">
                                                    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="text-center mb-4 mb-lg-0">
                                                                <a href="company-details.html"><img src="{{asset('assets/frontend')}}/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex mb-2">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                                </div>
                                                                <p class="text-muted mb-0">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p class="text-muted mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span class="badge bg-soft-success fs-13 mt-1">Full Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                                    - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end full-time-tab-->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END JOB-LIST -->

                    <!-- START PROCESS -->
                    <section class="section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="section-title me-5">
                                        <h3 class="title">How It Work</h3>
                                        <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                                            right freelancers.</p>
                                        <div class="process-menu nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <div class="d-flex">
                                                    <div class="number flex-shrink-0">
                                                        1
                                                    </div>
                                                    <div class="flex-grow-1 text-start ms-3">
                                                        <h5 class="fs-18">Register an account</h5>
                                                        <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability
                                                            is of great importance.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                <div class="d-flex">
                                                    <div class="number flex-shrink-0">
                                                        2
                                                    </div>
                                                    <div class="flex-grow-1 text-start ms-3">
                                                        <h5 class="fs-18">Find your job</h5>
                                                        <p class="text-muted mb-0">There are many variations of passages of avaibookmark-label, but the majority
                                                            alteration in some form.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                <div class=" d-flex">
                                                    <div class="number flex-shrink-0">
                                                        3
                                                    </div>
                                                    <div class="flex-grow-1 text-start ms-3">
                                                        <h5 class="fs-18">Apply for job</h5>
                                                        <p class="text-muted mb-0">It is a long established fact that a reader will be distracted by the
                                                            readable content of a page.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-6">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <img src="{{asset('assets/frontend')}}/images/process-01.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <img src="{{asset('assets/frontend')}}/images/process-02.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <img src="{{asset('assets/frontend')}}/images/process-03.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END PROCESS -->

                    <!--START CTA-->
                    <section class="section bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="text-center">
                                        <h2 class="text-primary mb-4">Browse Our <span class="text-warning fw-bold">5,000+</span> Latest
                                            Jobs</h2>
                                        <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with
                                            the right freelancers.</p>
                                        <div class="mt-4 pt-2">
                                            <a href="javascript:void(0)" class="btn btn-primary btn-hover">Started Now <i class="uil uil-rocket align-middle ms-1"></i></a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!--END CTA-->

                    <!-- START TESTIMONIAL -->
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center mb-4 pb-2">
                                        <h3 class="title mb-3">Happy Candidates</h3>
                                        <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                                            right freelancers.</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="swiper testimonialSlider pb-5">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card testi-box">
                                                    <div class="card-body">
                                                        <div class="mb-4">
                                                            <img src="{{asset('assets/frontend')}}/images/logo/mailchimp.svg" height="50" alt="">
                                                        </div>
                                                        <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate communication.
                                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                            shortcuts. Even if the client is being careless. "</p>
                                                        <h5 class="mb-0">Jeffrey Montgomery</h5>
                                                        <p class="text-muted mb-0">Product Manager</p>
                                                    </div>
                                                </div>
                                            </div><!--end swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="card testi-box">
                                                    <div class="card-body">
                                                        <div class="mb-4">
                                                            <img src="{{asset('assets/frontend')}}/images/logo/wordpress.svg" height="50" alt="">
                                                        </div>
                                                        <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate communication.
                                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                            shortcuts. Even if the client is being careless. "</p>
                                                        <h5 class="mb-0">Rebecca Swartz</h5>
                                                        <p class="text-muted mb-0">Creative Designer</p>
                                                    </div>
                                                </div>
                                            </div><!--end swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="card testi-box">
                                                    <div class="card-body">
                                                        <div class="mb-4">
                                                            <img src="{{asset('assets/frontend')}}/images/logo/Instagram.svg" height="50" alt="">
                                                        </div>
                                                        <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate communication.
                                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                            shortcuts. Even if the client is being careless. "</p>
                                                        <h5 class="mb-0">Charles Dickens</h5>
                                                        <p class="text-muted mb-0">Store Assistant</p>
                                                    </div>
                                                </div>
                                            </div><!--end swiper-slide-->
                                        </div>
                                        <!--end swiper-wrapper-->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <!--end swiper-container  -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </section>
                    <!-- END TESTIMONIAL -->

                    <!-- START BLOG -->
                    <section class="section bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center mb-5">
                                        <h3 class="title mb-3">Quick Career Tips</h3>
                                        <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                                            right freelancers.</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="blog-box card p-2 mt-3">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img src="{{asset('assets/frontend')}}/images/blog/img-01.jpg" alt="" class="img-fluid">
                                            <div class="bg-overlay"></div>
                                            <div class="author">
                                                <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)"
                                                        class="text-light user">Dirio Walls</a></p>
                                                <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 01 July, 2021</p>
                                            </div>
                                            <div class="likes">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                                class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                                class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="blog-details.html" class="primary-link">
                                                <h5 class="fs-17">How apps is the IT world ?</h5>
                                            </a>
                                            <p class="text-muted">The final text is not yet avaibookmark-label. Dummy texts have Internet tend
                                                been in use by typesetters since century.</p>
                                            <a href="blog-details.html" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                                        </div>
                                    </div><!--end blog-box-->
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="blog-box card p-2 mt-3">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img src="{{asset('assets/frontend')}}/images/blog/img-02.jpg" alt="" class="img-fluid">
                                            <div class="bg-overlay"></div>
                                            <div class="author">
                                                <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)"
                                                        class="text-light user">Brandon Carney</a></p>
                                                <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 June, 2021</p>
                                            </div>
                                            <div class="likes">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                                class="mdi mdi-heart-outline me-1"></i> 44</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                                class="mdi mdi-comment-outline me-1"></i> 25</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="blog-details.html" class="primary-link">
                                                <h5 class="fs-17">Smartest Applications for Business ?</h5>
                                            </a>
                                            <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability
                                                is of great importance: human perception.</p>
                                            <a href="blog-details.html" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                                        </div>
                                    </div><!--end blog-box-->
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="blog-box card p-2 mt-3">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img src="{{asset('assets/frontend')}}/images/blog/img-03.jpg" alt="" class="img-fluid">
                                            <div class="bg-overlay"></div>
                                            <div class="author">
                                                <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)"
                                                        class="text-light user">William Mooneyhan</a></p>
                                                <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 16 March, 2021
                                                </p>
                                            </div>
                                            <div class="likes">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 68</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 20</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="blog-details.html" class="primary-link">
                                                <h5 class="fs-17">Design your apps in your own way ?</h5>
                                            </a>
                                            <p class="text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters
                                                appear more frequently than others.</p>
                                            <a href="blog-details.html" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                                        </div>
                                    </div><!--end blog-box-->
                                </div><!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END BLOG -->

                    <!-- START CLIENT -->
                    <div class="py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="text-center p-3">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Woocommerce">
                                            <img src="{{asset('assets/frontend')}}/images/logo/logo-01.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2">
                                    <div class="text-center p-3">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Envato">
                                            <img src="{{asset('assets/frontend')}}/images/logo/logo-02.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2">
                                    <div class="text-center p-3">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Magento">
                                            <img src="{{asset('assets/frontend')}}/images/logo/logo-03.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2">
                                    <div class="text-center p-3">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wordpress">
                                            <img src="{{asset('assets/frontend')}}/images/logo/logo-04.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2">
                                    <div class="text-center p-3">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Generic">
                                            <img src="{{asset('assets/frontend')}}/images/logo/logo-05.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="text-center p-3">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Reveal">
                                            <img src="{{asset('assets/frontend')}}/images/logo/logo-06.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </div>
                    <!-- END CLIENT -->

                    <!-- START APPLY MODAL -->
                    <div class="modal fade" id="applyNow" tabindex="-1" aria-labelledby="applyNow" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-5">
                                    <div class="text-center mb-4">
                                        <h5 class="modal-title" id="staticBackdropLabel">Apply For This Job</h5>
                                    </div>
                                    <div class="position-absolute end-0 top-0 p-3">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nameControlInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="nameControlInput" placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailControlInput2" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emailControlInput2" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="messageControlTextarea" class="form-label">Message</label>
                                        <textarea class="form-control" id="messageControlTextarea" rows="4" placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="inputGroupFile01">Resume Upload</label>
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Send Application</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- END APPLY MODAL -->

                </div>
                <!-- End Page-content -->

                <!-- START SUBSCRIBE -->
                <section class="bg-subscribe">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center text-lg-start">
                                    <h4 class="text-white">Get New Jobs Notification!</h4>
                                    <p class="text-white-50 mb-0">Subscribe & get all related jobs notification.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4 mt-lg-0">
                                    <form class="subscribe-form" action="#">
                                        <div class="input-group justify-content-center justify-content-lg-end">
                                            <input type="text" class="form-control" id="subscribe" placeholder="Enter your email">
                                            <button class="btn btn-primary" type="button" id="subscribebtn">Subscribe</button>
                                        </div>
                                    </form><!--end form-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                    <div class="email-img d-none d-lg-block">
                        <img src="{{asset('assets/frontend')}}/images/subscribe.png" alt="" class="img-fluid">
                    </div>
                </section>
                <!-- END SUBSCRIBE -->

                <!-- START FOOTER -->
                <section class="bg-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-item mt-4 mt-lg-0 me-lg-5">
                                    <h4 class="text-white mb-4">{{env('APP_NAME')}}</h4>
                                    <p class="text-white-50">It is a long established fact that a reader will be of a page reader
                                        will be of at its layout.</p>
                                    <p class="text-white mt-3">Follow Us on:</p>
                                    <ul class="footer-social-menu list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-google"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">Company</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="about.html"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Contact Us</a></li>
                                        <li><a href="services.html"><i class="mdi mdi-chevron-right"></i> Services</a></li>
                                        <li><a href="blog.html"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                                        <li><a href="team.html"><i class="mdi mdi-chevron-right"></i> Team</a></li>
                                        <li><a href="pricing.html"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">For Jobs</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="job-categories.html"><i class="mdi mdi-chevron-right"></i> Browser Categories</a></li>
                                        <li><a href="job-list.html"><i class="mdi mdi-chevron-right"></i> Browser Jobs</a></li>
                                        <li><a href="job-details.html"><i class="mdi mdi-chevron-right"></i> Job Details</a></li>
                                        <li><a href="bookmark-jobs.html"><i class="mdi mdi-chevron-right"></i> Bookmark Jobs</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="text-white fs-16 mb-4">For Candidates</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="candidate-list.html"><i class="mdi mdi-chevron-right"></i> Candidate List</a></li>
                                        <li><a href="candidate-grid.html"><i class="mdi mdi-chevron-right"></i> Candidate Grid</a></li>
                                        <li><a href="candidate-details.html"><i class="mdi mdi-chevron-right"></i> Candidate Details</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">Support</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Help Center</a></li>
                                        <li><a href="faqs.html"><i class="mdi mdi-chevron-right"></i> FAQ'S</a></li>
                                        <li><a href="privacy-policy.html"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </section>
                <!-- END FOOTER -->

                <!-- START FOOTER-ALT -->
                <div class="footer-alt">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-white-50 text-center mb-0">
                                    Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Development By {{env('APP_NAME')}}
                                </p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
                <!-- END FOOTER -->

                <!-- Style switcher -->
                <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
                    <div>
                        <h6>Select your color</h6>
                        <ul class="pattern list-unstyled mb-0">
                            <li>
                                <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                            </li>
                            <li>
                                <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                            </li>
                            <li>
                                <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <h6>Light/dark Layout</h6>
                            <div class="text-center mt-3">
                                <!-- light-dark mode -->
                                <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                                    <i class="uil uil-brightness mode-dark mx-auto"></i>
                                    <i class="uil uil-moon mode-light"></i>
                                </a>
                                <!-- END light-dark Mode -->
                            </div>
                        </div>
                    </div>
                    <div class="bottom d-none d-md-block" >
                        <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
                    </div>
                </div>
                <!-- end switcher-->

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
