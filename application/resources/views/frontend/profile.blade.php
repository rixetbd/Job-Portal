@extends('layouts.frontend')

@section('meta_data')

@include('meta::manager', [
    'title' => config('app.name', 'WantJob').' | Job portal',
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
                    <h3 class="mb-4">My Profile</h3>
                    <div class="page-next">
                        <nav class="d-inline-block" aria-label="breadcrumb text-center">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> My Profile </li>
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


<!-- START PROFILE -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card profile-sidebar me-lg-4">
                    <div class="card-body p-4">
                        <div class="text-center pb-4 border-bottom">
                            <img src="{{asset('application/uploads/users')}}/{{$user->avatar}}" alt=""
                                class="avatar-lg img-thumbnail rounded-circle mb-4" />
                            <h5 class="mb-0">{{$user->name}}</h5>
                            {{-- <p class="text-muted">Developer</p> --}}
                            <ul class="list-inline d-flex justify-content-center align-items-center ">
                                <li class="list-inline-item text-warning fs-19">
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-half-full"></i>
                                </li>
                            </ul>
                            <ul class="candidate-detail-social-menu list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-primary"><i
                                            class="uil uil-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-info"><i
                                            class="uil uil-twitter-alt"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-success"><i
                                            class="uil uil-whatsapp"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-danger"><i
                                            class="uil uil-phone-alt"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--end profile-->
                        <div class="mt-4 border-bottom pb-4">
                            <h5 class="fs-17 fw-bold mb-3">Documents</h5>
                            <ul class="profile-document list-unstyled mb-0">
                                <li>
                                    <div class="profile-document-list d-flex align-items-center mt-4 ">
                                        <div class="icon flex-shrink-0">
                                            <i class="uil uil-file"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="fs-16 mb-0">Resume.pdf</h6>
                                            <p class="text-muted mb-0">1.25 MB</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="assets/images/dark-logo.png" download class="fs-20 text-muted"><i class="uil uil-import"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="profile-document-list d-flex align-items-center mt-4 ">
                                        <div class="icon flex-shrink-0">
                                            <i class="uil uil-file"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="fs-16 mb-0">Cover-letter.pdf</h6>
                                            <p class="text-muted mb-0">1.25 MB</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="assets/images/dark-logo.png" download="dark-logo" class="fs-20 text-muted"><i class="uil uil-import"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--end document-->
                        <div class="mt-4">
                            <h5 class="fs-17 fw-bold mb-3">Contacts</h5>
                            <div class="profile-contact">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <div class="d-flex">
                                            <label>Email</label>
                                            <div>
                                                <p class="text-muted text-break mb-0">
                                                    {{$user->email}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <label>Phone Number</label>
                                            <div>
                                                <p class="text-muted mb-0">+2 345 678 0000</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <label>Location</label>
                                            <div>
                                                <p class="text-muted mb-0">New Caledonia</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end contact-details-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end profile-sidebar-->
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card profile-content-page mt-4 mt-lg-0">
                    <ul class="profile-content-nav nav nav-pills border-bottom mb-4" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-bs-toggle="pill"
                                    data-bs-target="#overview" type="button" role="tab" aria-controls="overview"
                                    aria-selected="true">
                                    Overview
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#settings" type="button" role="tab" aria-controls="settings"
                                    aria-selected="false">
                                    Settings
                                </button>
                            </li>
                        </ul>
                        <!--end profile-content-nav-->
                    <div class="card-body p-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview-tab">
                                <div>
                                    <h5 class="fs-18 fw-bold">About</h5>
                                    <p class="text-muted mt-4">
                                        Developer with over 5 years' experience working in both
                                        the public and private sectors. Diplomatic, personable,
                                        and adept at managing sensitive situations. Highly
                                        organized, self-motivated, and proficient with
                                        computers. Looking to boost students’ satisfactions
                                        scores for <b>International University</b>. Bachelor's
                                        degree in communications.
                                    </p>
                                    <p class="text-muted">
                                        It describes the candidate's relevant experience,
                                        skills, and achievements. The purpose of this career
                                        summary is to explain your qualifications for the job in
                                        3-5 sentences and convince the manager to read the whole
                                        resume document.
                                    </p>
                                </div>
                                <div class="candidate-education-details mt-4">
                                    <h6 class="fs-18 fw-bold mb-0">Education</h6>
                                    <div class="candidate-education-content mt-4 d-flex">
                                        <div class="circle flex-shrink-0 bg-soft-primary">
                                            B
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="fs-16 mb-1">
                                                BCA - Bachelor of Computer Applications
                                            </h6>
                                            <p class="mb-2 text-muted">
                                                International University - (2004 - 2010)
                                            </p>
                                            <p class="text-muted">
                                                There are many variations of passages of available,
                                                but the majority alteration in some form. As a
                                                highly skilled and successfull product development
                                                and design specialist with more than 4 Years of My
                                                experience.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="candidate-education-content mt-3 d-flex">
                                        <div class="circle flex-shrink-0 bg-soft-primary">
                                            M
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="fs-16 mb-1">
                                                MCA - Master of Computer Application
                                            </h6>
                                            <p class="mb-2 text-muted">
                                                International University - (2010 - 2012)
                                            </p>
                                            <p class="text-muted">
                                                There are many variations of passages of available,
                                                but the majority alteration in some form. As a
                                                highly skilled and successfull product development
                                                and design specialist with more than 4 Years of My
                                                experience.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="candidate-education-content mt-3 d-flex">
                                        <div class="circle flex-shrink-0 bg-soft-primary">
                                            D
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="fs-16 mb-1">Design Communication Visual</h6>
                                            <p class="text-muted mb-2">
                                                International University - (2012-2015)
                                            </p>
                                            <p class="text-muted">
                                                There are many variations of passages of available,
                                                but the majority alteration in some form. As a
                                                highly skilled and successfull product development
                                                and design specialist with more than 4 Years of My
                                                experience.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="candidate-education-details mt-4">
                                    <h6 class="fs-18 fw-bold mb-0">Experiences</h6>
                                    <div class="candidate-education-content mt-4 d-flex">
                                        <div class="circle flex-shrink-0 bg-soft-primary"> W </div>
                                        <div class="ms-4">
                                            <h6 class="fs-16 mb-1">Web Design & Development Team Leader</h6>
                                            <p class="mb-2 text-muted">Creative Agency - (2013 - 2016)</p>
                                            <p class="text-muted">There are many variations of passages of available, but the majority alteration in some form. As a highly skilled and successfull product development and design specialist with more than 4 Years of My experience.</p>
                                        </div>
                                    </div>
                                    <div class="candidate-education-content mt-4 d-flex">
                                        <div class="circle flex-shrink-0 bg-soft-primary"> P </div>
                                        <div class="ms-4">
                                            <h6 class="fs-16 mb-1">Project Manager</h6>
                                            <p class="mb-2 text-muted">Jobcy Technology Pvt.Ltd - (Pressent)</p>
                                            <p class="text-muted mb-0">There are many variations of passages of available, but the majority alteration in some form. As a highly skilled and successfull product development and design specialist with more than 4 Years of My experience.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="fs-18 fw-bold">Skills</h5>
                                    <span class="badge fs-13 bg-soft-blue mt-2">Cloud Management</span>
                                    <span class="badge fs-13 bg-soft-blue mt-2">Responsive Design</span>
                                    <span class="badge fs-13 bg-soft-blue mt-2">Network Architecture</span>
                                    <span class="badge fs-13 bg-soft-blue mt-2">PHP</span>
                                    <span class="badge fs-13 bg-soft-blue mt-2">Bootstrap</span>
                                    <span class="badge fs-13 bg-soft-blue mt-2">UI & UX Designer</span>
                                </div>
                                <div class="mt-4">
                                    <h5 class="fs-18 fw-bold">Spoken languages</h5>
                                    <span class="badge fs-13 bg-soft-success mt-2">English</span>
                                    <span class="badge fs-13 bg-soft-success mt-2">German</span>
                                    <span class="badge fs-13 bg-soft-success mt-2">French</span>
                                </div>
                            </div>
                            @if (!empty(Auth::guard('CandidateAuth')->user()) && Auth::guard('CandidateAuth')->user()->id == $user->id)

                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <form action="#">
                                    <div>
                                        <h5 class="fs-17 fw-semibold mb-3 mb-0">My Account</h5>
                                        <div class="text-center">
                                            <div class="mb-4 profile-user">
                                                <img src="{{asset('application/uploads/users')}}/{{$user->avatar}}" class="rounded-circle img-thumbnail profile-img" id="profile-img" alt="">
                                                <div class="p-0 rounded-circle profile-photo-edit">
                                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input" onchange="previewImg()" >
                                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                        <i class="uil uil-edit"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="firstName"
                                                        value="Jansh" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="lastName"
                                                        value="Dickens" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="choices-single-categories" class="form-label">Account Type</label>
                                                    <select class="form-select" data-trigger
                                                        name="choices-single-categories"
                                                        id="choices-single-categories"
                                                        aria-label="Default select example">
                                                        <option value="4">Accounting</option>
                                                        <option value="1">IT & Software</option>
                                                        <option value="3">Marketing</option>
                                                        <option value="5">Banking</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email"
                                                        value="{{$user->email}}" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end account-->
                                    <div class="mt-4">
                                        <h5 class="fs-17 fw-semibold mb-3">Profile</h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Introduce Yourself</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="5">Developer with over 5 years' experience working in both the public and private sectors. Diplomatic, personable, and adept at managing sensitive situations. Highly organized, self-motivated, and proficient with computers. Looking to boost students’ satisfactions scores for International University. Bachelor's degree in communications.</textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="languages" class="form-label">Languages</label>
                                                    <input type="text" class="form-control" id="languages"
                                                        value="English, German, French" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="choices-single-location" class="form-label">Location</label>
                                                    <select class="form-select" data-trigger
                                                        name="choices-single-location" id="choices-single-location"
                                                        aria-label="Default select exam
                                                        ple">
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="attachmentscv" class="form-label">Attachments
                                                        CV</label>
                                                    <input class="form-control" type="file" id="attachmentscv" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end profile-->
                                    <div class="mt-4">
                                        <h5 class="fs-17 fw-semibold mb-3">Social Media</h5>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="facebook" class="form-label">Facebook</label>
                                                    <input type="text" class="form-control" id="facebook"
                                                        value="https://www.facebook.com" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="twitter" class="form-label">Twitter</label>
                                                    <input type="text" class="form-control" id="twitter"
                                                        value="https://www.twitter.com" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="linkedin" class="form-label">Linkedin</label>
                                                    <input type="text" class="form-control" id="linkedin"
                                                        value="https://www.linkedin.com" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="whatsapp" class="form-label">Whatsapp</label>
                                                    <input type="text" class="form-control" id="whatsapp"
                                                        value="https://www.whatsapp.com" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end socia-media-->
                                    <div class="mt-4">
                                        <h5 class="fs-17 fw-semibold mb-3 mb-3">
                                            Change Password
                                        </h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="current-password-input" class="form-label">Current
                                                        password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter Current password"
                                                        id="current-password-input" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="new-password-input" class="form-label">New
                                                        password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter new password"
                                                        id="new-password-input" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="confirm-password-input" class="form-label">Confirm Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirm Password"
                                                        id="confirm-password-input" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="verification" />
                                                    <label class="form-check-label" for="verification">
                                                        Enable Two-Step Verification via email
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end Change-password-->
                                    <div class="mt-4 text-end">
                                        <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                                    </div>
                                </form>
                                <!--end form-->
                            </div>

                            @endif
                            <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end profile-content-page-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END PROFILE -->
@endsection
