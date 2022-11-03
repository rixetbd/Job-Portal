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
                        <h3 class="mb-4">Jobs Categories</h3>
                        <div class="page-next">
                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Company</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Jobs Categories </li>
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

    <!-- START CATEGORIES -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <p class="badge bg-warning fs-14 mb-2">Jobs Live Today</p>
                        <h4>Browse Job By Categories</h4>
                        <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card job-Categories-box bg-light border-0">
                        <div class="card-body p-4">
                            <div class="row list-unstyled job-Categories-list mb-0">
                                @foreach ($all_categories as $category)
                                <div class="col-sm-12 col-md-4">
                                    <div><a href="job-list.html" class="primary-link">{{$category->name}} <span class="badge bg-soft-info float-end">25</span></a></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- END CATEGORIES -->

    <!-- START CTA -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title text-center">
                    <h3 class="title mb-4 pb-2">See everything about your employee at one place.</h3>
                    <p class="para-desc text-muted mx-auto">Start working with Jobcy that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- END CTA -->

</div>
<!-- End Page-content -->


@endsection
