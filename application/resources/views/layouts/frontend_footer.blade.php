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
                    </form>
                    <!--end form-->
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
                        <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/rixetbd"><i class="uil uil-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="https://www.linkedin.com/company/rixetbd/"><i class="uil uil-linkedin-alt"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/rixetbd/"><i class="uil uil-instagram"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="https://twitter.com/rixetbd"><i class="uil uil-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--end col-->
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
            </div>
            <!--end col-->
            <div class="col-lg-2 col-6">
                <div class="footer-item mt-4 mt-lg-0">
                    <p class="fs-16 text-white mb-4">For Jobs</p>
                    <ul class="list-unstyled footer-list mb-0">
                        <li><a href="job-categories.html"><i class="mdi mdi-chevron-right"></i> Browser Categories</a>
                        </li>
                        <li><a href="job-list.html"><i class="mdi mdi-chevron-right"></i> Browser Jobs</a></li>
                        <li><a href="job-details.html"><i class="mdi mdi-chevron-right"></i> Job Details</a></li>
                        <li><a href="bookmark-jobs.html"><i class="mdi mdi-chevron-right"></i> Bookmark Jobs</a></li>
                    </ul>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2 col-6">
                <div class="footer-item mt-4 mt-lg-0">
                    <p class="text-white fs-16 mb-4">For Candidates</p>
                    <ul class="list-unstyled footer-list mb-0">
                        <li><a href="candidate-list.html"><i class="mdi mdi-chevron-right"></i> Candidate List</a></li>
                        <li><a href="candidate-grid.html"><i class="mdi mdi-chevron-right"></i> Candidate Grid</a></li>
                        <li><a href="candidate-details.html"><i class="mdi mdi-chevron-right"></i> Candidate Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2 col-6">
                <div class="footer-item mt-4 mt-lg-0">
                    <p class="fs-16 text-white mb-4">Support</p>
                    <ul class="list-unstyled footer-list mb-0">
                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Help Center</a></li>
                        <li><a href="faqs.html"><i class="mdi mdi-chevron-right"></i> FAQ'S</a></li>
                        <li><a href="privacy-policy.html"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END FOOTER -->

<!-- START FOOTER-ALT -->
<div class="footer-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-white-50 text-center mb-0">
                    Copyright &copy; <script>
                        document.write(new Date().getFullYear())</script> . Powered By <a href="{{url('/')}}">{{env('APP_NAME')}}</a> . Development By <a target="_blank" href="https://rixetbd.com">RixetBD</a>
                </p>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!-- END FOOTER -->
