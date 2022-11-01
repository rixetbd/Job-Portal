@extends('layouts.frontend')

@section('meta_data')

@include('meta::manager', [
    'title' => config('app.name', 'WantJob').' | Job portal',
    'description' => 'This is my example description',
    'image' => 'Url to the image',
])
@endsection


@section('content')
<!-- START HOME -->
<section class="bg-home" id="home">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center text-white mb-5">
                    <h1 class="display-5 fw-semibold mb-3">Search Between More Then <span
                            class="text-warning fw-bold">10,000+</span>
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
                            <input type="search" id="job-title" class="form-control filter-input-box"
                                placeholder="Job, Company name...">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-3">
                        <div class="filter-search-form filter-border mt-3 mt-lg-0">
                            <i class="uil uil-map-marker"></i>
                            <select class="form-select" data-trigger name="choices-single-location"
                                id="choices-single-location" aria-label="Default select example">
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
                    </div>
                    <!--end col-->
                    <div class="col-lg-3">
                        <div class="filter-search-form mt-3 mt-lg-0">
                            <i class="uil uil-clipboard-notes"></i>
                            <select class="form-select" data-trigger name="choices-single-categories"
                                id="choices-single-categories" aria-label="Default select example">
                                <option value="4">Accounting</option>
                                <option value="1">IT & Software</option>
                                <option value="3">Marketing</option>
                                <option value="5">Banking</option>
                            </select>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-3">
                        <div class="mt-3 mt-lg-0 h-100">
                            <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><i
                                    class="uil uil-search me-1"></i> Find Job</button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </form>

        <div class="row">
            <div class="col-lg-12">
                <ul class="treding-keywords list-inline mb-0 text-white-50 mt-4 mt-lg-3 text-center">
                    <li class="list-inline-item text-white"><i
                            class="mdi mdi-tag-multiple-outline text-warning fs-18"></i> Trending Keywords:</li>
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
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440"
            height="150" preserveAspectRatio="none" viewBox="0 0 1440 220">
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
                </div>
                <!--end popu-category-box-->
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
                </div>
                <!--end popu-category-box-->
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
                </div>
                <!--end popu-category-box-->
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
                </div>
                <!--end popu-category-box-->
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
                </div>
                <!--end popu-category-box-->
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
                </div>
                <!--end popu-category-box-->
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
                </div>
                <!--end popu-category-box-->
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
                </div>
                <!--end popu-category-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5 text-center">
                    <a href="job-categories.html" class="btn btn-primary btn-hover">Browse All Categories <i
                            class="uil uil-arrow-right"></i></a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
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
            </div>
            <!--end col-->
        </div>
        <!--end row-->
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
                        <button class="nav-link" id="freelancer-tab" data-bs-toggle="pill" data-bs-target="#freelancer"
                            type="button" role="tab" aria-controls="freelancer"
                            aria-selected="false">Freelancer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="part-time-tab" data-bs-toggle="pill" data-bs-target="#part-time"
                            type="button" role="tab" aria-controls="part-time" aria-selected="false">Part Time</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="full-time-tab" data-bs-toggle="pill" data-bs-target="#full-time"
                            type="button" role="tab" aria-controls="full-time" aria-selected="false">Full Time</button>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-01.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web
                                                    Developer</a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m
                                            </p>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-02.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-03.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital
                                                    Marketing
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
                                            </p>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-04.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
                                            </p>
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
                            <a href="job-list.html" class="btn btn-primary">View More <i
                                    class="uil uil-arrow-right"></i></a>
                        </div>

                    </div>
                    <!--end recent-jobs-tab-->

                    <div class="tab-pane fade" id="featured-jobs" role="tabpanel" aria-labelledby="featured-jobs-tab">
                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-01.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web
                                                    Developer</a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m
                                            </p>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-02.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-03.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital
                                                    Marketing
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-04.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
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
                            <a href="job-list.html" class="btn btn-primary">View More <i
                                    class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end featured-jobs-tab-->

                    <div class="tab-pane fade" id="freelancer" role="tabpanel" aria-labelledby="freelancer-tab">
                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-01.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web
                                                    Developer</a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-02.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-03.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital
                                                    Marketing
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-04.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
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
                            <a href="job-list.html" class="btn btn-primary">View More <i
                                    class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end freelancer-tab-->

                    <div class="tab-pane fade" id="part-time" role="tabpanel" aria-labelledby="part-time-tab">
                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-01.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web
                                                    Developer</a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-02.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-03.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital
                                                    Marketing
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-04.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
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
                            <a href="job-list.html" class="btn btn-primary">View More <i
                                    class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end part-time-tab-->

                    <div class="tab-pane fade" id="full-time" role="tabpanel" aria-labelledby="full-time-tab">
                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-01.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web
                                                    Developer</a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-02.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-03.png"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital
                                                    Marketing
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
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
                                <a href="javascript:void(0)" class="text-white align-middle"><i
                                        class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img
                                                    src="{{asset('assets/frontend')}}/images/featured-job/img-04.png"
                                                    alt="" class="img-fluid rounded-3"></a>
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
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m
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
                            <a href="job-list.html" class="btn btn-primary">View More <i
                                    class="uil uil-arrow-right"></i></a>
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
                    <div class="process-menu nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="d-flex">
                                <div class="number flex-shrink-0">
                                    1
                                </div>
                                <div class="flex-grow-1 text-start ms-3">
                                    <h5 class="fs-18">Register an account</h5>
                                    <p class="text-muted mb-0">Due to its widespread use as filler text for layouts,
                                        non-readability
                                        is of great importance.</p>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <div class="d-flex">
                                <div class="number flex-shrink-0">
                                    2
                                </div>
                                <div class="flex-grow-1 text-start ms-3">
                                    <h5 class="fs-18">Find your job</h5>
                                    <p class="text-muted mb-0">There are many variations of passages of
                                        avaibookmark-label, but the majority
                                        alteration in some form.</p>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages"
                            role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <div class=" d-flex">
                                <div class="number flex-shrink-0">
                                    3
                                </div>
                                <div class="flex-grow-1 text-start ms-3">
                                    <h5 class="fs-18">Apply for job</h5>
                                    <p class="text-muted mb-0">It is a long established fact that a reader will be
                                        distracted by the
                                        readable content of a page.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <img src="{{asset('assets/frontend')}}/images/process-01.png" alt="" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <img src="{{asset('assets/frontend')}}/images/process-02.png" alt="" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <img src="{{asset('assets/frontend')}}/images/process-03.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
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
                        <a href="javascript:void(0)" class="btn btn-primary btn-hover">Started Now <i
                                class="uil uil-rocket align-middle ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
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
                                        <img src="{{asset('assets/frontend')}}/images/logo/mailchimp.svg" height="50"
                                            alt="">
                                    </div>
                                    <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate
                                        communication.
                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                        shortcuts. Even if the client is being careless. "</p>
                                    <h5 class="mb-0">Jeffrey Montgomery</h5>
                                    <p class="text-muted mb-0">Product Manager</p>
                                </div>
                            </div>
                        </div>
                        <!--end swiper-slide-->
                        <div class="swiper-slide">
                            <div class="card testi-box">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img src="{{asset('assets/frontend')}}/images/logo/wordpress.svg" height="50"
                                            alt="">
                                    </div>
                                    <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate
                                        communication.
                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                        shortcuts. Even if the client is being careless. "</p>
                                    <h5 class="mb-0">Rebecca Swartz</h5>
                                    <p class="text-muted mb-0">Creative Designer</p>
                                </div>
                            </div>
                        </div>
                        <!--end swiper-slide-->
                        <div class="swiper-slide">
                            <div class="card testi-box">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img src="{{asset('assets/frontend')}}/images/logo/Instagram.svg" height="50"
                                            alt="">
                                    </div>
                                    <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate
                                        communication.
                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                        shortcuts. Even if the client is being careless. "</p>
                                    <h5 class="mb-0">Charles Dickens</h5>
                                    <p class="text-muted mb-0">Store Assistant</p>
                                </div>
                            </div>
                        </div>
                        <!--end swiper-slide-->
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
                        <p class="text-muted">The final text is not yet avaibookmark-label. Dummy texts have Internet
                            tend
                            been in use by typesetters since century.</p>
                        <a href="blog-details.html" class="form-text text-primary">Read more <i
                                class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div>
                <!--end blog-box-->
            </div>
            <!--end col-->

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
                        <a href="blog-details.html" class="form-text text-primary">Read more <i
                                class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div>
                <!--end blog-box-->
            </div>
            <!--end col-->

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
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                            class="mdi mdi-heart-outline me-1"></i> 68</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                            class="mdi mdi-comment-outline me-1"></i> 20</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="blog-details.html" class="primary-link">
                            <h5 class="fs-17">Design your apps in your own way ?</h5>
                        </a>
                        <p class="text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters
                            appear more frequently than others.</p>
                        <a href="blog-details.html" class="form-text text-primary">Read more <i
                                class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div>
                <!--end blog-box-->
            </div>
            <!--end col-->
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
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                        data-bs-original-title="Woocommerce">
                        <img src="{{asset('assets/frontend')}}/images/logo/logo-01.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                        data-bs-original-title="Envato">
                        <img src="{{asset('assets/frontend')}}/images/logo/logo-02.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                        data-bs-original-title="Magento">
                        <img src="{{asset('assets/frontend')}}/images/logo/logo-03.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                        data-bs-original-title="Wordpress">
                        <img src="{{asset('assets/frontend')}}/images/logo/logo-04.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                        data-bs-original-title="Generic">
                        <img src="{{asset('assets/frontend')}}/images/logo/logo-05.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                        data-bs-original-title="Reveal">
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
                    <textarea class="form-control" id="messageControlTextarea" rows="4"
                        placeholder="Enter your message"></textarea>
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



@endsection
