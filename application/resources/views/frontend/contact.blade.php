@extends('layouts.frontend')

@section('meta_data')

@include('meta::manager', [
    'title' => env('APP_NAME').' | Job portal',
    'description' => 'This is my example description',
    'image' => 'Url to the image',
])

@endsection


@section('content')
                    <!-- Start home -->
                    <section class="page-title-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white">
                                        <h3 class="mb-4">Contact</h3>
                                        <div class="page-next">
                                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                                <ol class="breadcrumb justify-content-center">
                                                    <li class="breadcrumb-item"><a href="{{route('frontend.index')}}">Home</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page"> Contact </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- end home -->

                    <!-- START SHAPE -->
                    <div class="position-relative" style="z-index: 1">
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                                <path fill="#FFFFFF" fill-opacity="1"
                                    d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->


                    <!-- START CONTACT-PAGE -->
                    <section class="section">
                        <div class="container">
                            <div class="row align-items-center mt-5">
                                <div class="col-lg-6">
                                    <div class="section-title mt-4 mt-lg-0">
                                        <h3 class="title">Get in touch</h3>
                                        <p class="text-muted">Start working with Jobcy that can provide everything you need to generate
                                            awareness, drive traffic, connect.</p>
                                        <form method="post" onsubmit="return validateForm()" class="contact-form mt-4" name="myForm" id="myForm">
                                            <span id="error-msg"></span>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="nameInput" class="form-label">Name</label>
                                                        <input type="text" name="name" id="name" class="form-control"
                                                            placeholder="Enter your name">
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="emaiol" name="email"
                                                            placeholder="Enter your email">
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="subjectInput" class="form-label">Subject</label>
                                                        <input type="text" class="form-control" id="subjectInput" name="subject" id="subject"
                                                            placeholder="Enter your subject">
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="meassageInput" class="form-label">Your Message</label>
                                                        <textarea class="form-control" id="meassageInput" placeholder="Enter your message" name="comments" id="comments" rows="3"></textarea>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="text-end">
                                                <button type="submit" id="submit" name="submit" class="btn btn-primary"> Send Message <i class="uil uil-message ms-1"></i></button>
                                            </div>
                                        </form><!--end form-->
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-5 ms-auto order-first order-lg-last">
                                    <div class="text-center">
                                        <img src="assets/images/contact.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="mt-4 pt-3">
                                        <div class="d-flex text-muted align-items-center mt-2">
                                            <div class="flex-shrink-0 fs-22 text-primary">
                                                <i class="uil uil-map-marker"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0">2453 Clinton StreetLittle Rock, California, USA</p>
                                            </div>
                                        </div>
                                        <div class="d-flex text-muted align-items-center mt-2">
                                            <div class="flex-shrink-0 fs-22 text-primary">
                                                <i class="uil uil-envelope"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0">contactus@Jobcy.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex text-muted align-items-center mt-2">
                                            <div class="flex-shrink-0 fs-22 text-primary">
                                                <i class="uil uil-phone-alt"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0">(+245) 223 1245</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- START CONTACT-PAGE -->
@endsection
