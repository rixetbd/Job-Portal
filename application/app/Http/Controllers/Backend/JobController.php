<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\JobModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_jobs = JobModel::where('status', 1)->get();
        return view('backend.job.list',[
            'all_jobs'=>$all_jobs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        JobModel::insert([
            'title' =>$request->title,
            'slug' =>Str::slug($request->title),
            'category'  =>$request->category,
            'post_by'  => '1',
            'company_id'    =>$request->company,
            'vacancy'   =>$request->vacancy,
            'experience'    =>$request->experience,
            'employee_type' =>$request->employee_type,
            'salary'    =>$request->salary,
            'job_location'    =>$request->job_location,
            'description'   =>$request->description,
            'deadline'   =>$request->deadline,
            'website' =>$request->website,
            'created_at'    =>Carbon::now(),
        ]);

        return redirect()->route('backend.job.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        JobModel::where('slug','=',$request->slug)->delete();
    }
}
