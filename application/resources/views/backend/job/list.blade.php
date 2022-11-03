@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Jobs List</h5>
                    <span>All Jobs Information</span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Vacancy</th>
                                    <th scope="col">Applied</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_data">
                                @foreach ($all_jobs as $key=> $jobs_item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$jobs_item->title}}</td>
                                    <td>{{($jobs_item->getCategory != '' ? $jobs_item->getCategory->name:"N/A")}}</td>
                                    <td>{{$jobs_item->company_id}}</td>
                                    <td>{{$jobs_item->job_location}}</td>
                                    <td>{{$jobs_item->website}}</td>
                                    <td>{{$jobs_item->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a class="btn btn-sm px-2 m-1 btn-primary" href="#"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm px-2 m-1 btn-danger" onclick="jobDestroy('{{$jobs_item->slug}}')"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
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
    // function auto_categories(){
    //     let urlData = `{{route('autocategories')}}`;
    //     $.ajax({
    //      type:'POST',
    //      url: `${urlData}`,
    //      success:function(data){
    //         $("#table_data").html(data.tableData);
    //         // console.log(data.tableData);
    //      }
    //   });
    // }
    // auto_categories();

    $('#ajaxForm').on('submit',function(){
        let formUrlData = `{{route('backend.job.categories.store')}}`;
        $.ajax({
            type:"POST",
            url: `${formUrlData}`,
            data:{
                name:$('#CategoryName').val(),
            },
            success:function(data){
                auto_categories();
            }
      });

    });

    function jobDestroy(slug){
        let formUrlData = `{{route('backend.job.destroy')}}`;
        $.ajax({
            type:"POST",
            url: `${formUrlData}`,
            data:{
                "slug": slug,
            },
            success:function(data){
                // auto_categories();
            }
      });
    }

</script>

@endsection
