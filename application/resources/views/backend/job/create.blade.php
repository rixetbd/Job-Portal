@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-xl-12">
            <form class="card" action="{{route('backend.job.store')}}" method="POST">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Job Post</h4>
                    <span>Add Job</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control" type="text" id="title" name="title" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="company">Company Name</label>
                                <input class="form-control" type="text" id="company" name="company" placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-control btn-square" name="category" id="category">
                                    <option value="">--Select--</option>
                                    <option value="1">Full Time</option>
                                    <option value="2">Part Time</option>
                                    <option value="3">Remote</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Employee Type</label>
                                <select class="form-control btn-square" id="employee_type" name="employee_type">
                                    <option value="">--Select--</option>
                                    <option value="1">Full Time</option>
                                    <option value="2">Part Time</option>
                                    <option value="3">Remote</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Experience</label>
                                <select class="form-control btn-square" id="experience" name="experience">
                                    <option value="">--Select--</option>
                                    <option value="Fresher">Fresher</option>
                                    <option value="0 to 6 Month">0-6 Month</option>
                                    <option value="6 to 12 Month">6-12 Month</option>
                                    <option value="1 to 2 Years">1-2 Years</option>
                                    <option value="2 to 3 Year">2-3 Years</option>
                                    <option value="3 to 4 Years">3-4 Years</option>
                                    <option value="4 to 5 Years">4-5 Years</option>
                                    <option value="5+ Years">5+ Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="vacancy">Vacancy</label>
                                <input class="form-control" type="text" id="vacancy" name="vacancy" placeholder="Vacancy" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="salary">Salary</label>
                                <input class="form-control" type="text" id="salary" name="salary" placeholder="Salary" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="job_location">Job Location</label>
                                <input class="form-control" type="text" id="job_location" name="job_location" placeholder="Job Location" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="vacancy">Application Deadline</label>
                                <input class="form-control" type="date" id="deadline" name="deadline" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="website">Website</label>
                                <input class="form-control" type="text" id="website" name="website" placeholder="Website" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="form-label">About Me</label>
                                <textarea class="form-control" placeholder="Enter job description" id="description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="mb-3">
                                <label class="form-label">Upload Thumbnail (Optional)</label>
                                <input class="form-control" type="file" placeholder="Email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Post</button> {{-- id="jobNewPost" --}}
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.min.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/griddata.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.js"></script>

<script>
    // function auto_categories() {
    //     let urlData = `{{route('autocategories')}}`;
    //     $.ajax({
    //         type: 'POST',
    //         url: `${urlData}`,
    //         success: function (data) {
    //             $("#table_data").html(data.tableData);
    //             // console.log(data.tableData);
    //         }
    //     });
    // }
    // auto_categories();

    // $('#jobNewPost').on('click', function () {
    //     // let formUrlData = `{{route('backend.job.store')}}`;
    //     let title = $('#title').val();
    //     let company = $('#company').val();
    //     let category = $('#category').val();
    //     let employee_type = $('#employee_type').val();
    //     let experience = $('#experience').val();
    //     let vacancy = $('#vacancy').val();
    //     let salary = $('#salary').val();
    //     let description = $('#description').val();
    //     let job_location = $('#job_location').val();
    //     let deadline = $('#deadline').val();
    //     let website = $('#website').val();


    //     $.ajax({
    //         type: "POST",
    //         // url: `${formUrlData}`,
    //         url: `{{route('backend.job.store')}}`,
    //         data: {
    //             'title':title,
    //             'category':category,
    //             'company':company,
    //             'vacancy':vacancy,
    //             'experience':experience,
    //             'employee_type':employee_type,
    //             'salary':salary,
    //             'job_location':job_location,
    //             'deadline':deadline,
    //             'description':description,
    //             'website':website,
    //         },
    //         success: function (data) {
    //             // auto_categories();
    //             console.log(data.name);
    //         }
    //     });

    // });

    // function categoryDestroy(id) {
    //     let formUrlData = `{{route('backend.job.categories.destroy')}}`;
    //     $.ajax({
    //         type: "POST",
    //         url: `${formUrlData}`,
    //         data: {
    //             "id": id,
    //         },
    //         success: function (data) {
    //             auto_categories();
    //         }
    //     });
    // }

</script>

@endsection
