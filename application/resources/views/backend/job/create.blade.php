@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-xl-12">
            <form class="card">

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
                                <input class="form-control" type="text" id="title" name="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="company">Company Name</label>
                                <input class="form-control" type="text" id="company" name="company" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-control btn-square">
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
                                <select class="form-control btn-square">
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
                                <select class="form-control btn-square">
                                    <option value="">--Select--</option>
                                    <option value="1">Fresher</option>
                                    <option value="1">0-6 Month</option>
                                    <option value="1">6-12 Month</option>
                                    <option value="1">1-2 Years</option>
                                    <option value="1">2-3 Years</option>
                                    <option value="1">3-4 Years</option>
                                    <option value="1">4-5 Years</option>
                                    <option value="1">5+ Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="vacancy">Vacancy</label>
                                <input class="form-control" type="text" id="vacancy" name="vacancy" placeholder="Vacancy">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="salary">Salary</label>
                                <input class="form-control" type="text" id="salary" name="salary" placeholder="Salary">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="job_location">Job Location</label>
                                <input class="form-control" type="text" id="job_location" name="job_location" placeholder="Job Location">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="vacancy">Application Deadline</label>
                                <input class="form-control" type="date" id="deadline" name="deadline">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="salary">Salary</label>
                                <input class="form-control" type="text" id="salary" name="salary" placeholder="Salary">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="form-label">About Me</label>
                                <textarea class="form-control" placeholder="Enter About your description"></textarea>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
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
    function auto_categories() {
        let urlData = `{{route('autocategories')}}`;
        $.ajax({
            type: 'POST',
            url: `${urlData}`,
            success: function (data) {
                $("#table_data").html(data.tableData);
                // console.log(data.tableData);
            }
        });
    }
    auto_categories();

    $('#ajaxForm').on('submit', function () {
        let formUrlData = `{{route('backend.job.categories.store')}}`;
        $.ajax({
            type: "POST",
            url: `${formUrlData}`,
            data: {
                name: $('#CategoryName').val(),
            },
            success: function (data) {
                auto_categories();
            }
        });

    });

    function categoryDestroy(id) {
        let formUrlData = `{{route('backend.job.categories.destroy')}}`;
        $.ajax({
            type: "POST",
            url: `${formUrlData}`,
            data: {
                "id": id,
            },
            success: function (data) {
                auto_categories();
            }
        });
    }

</script>

@endsection
