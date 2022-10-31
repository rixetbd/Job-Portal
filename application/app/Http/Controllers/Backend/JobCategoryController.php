<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\JobCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class JobCategoryController extends Controller
{

    public function index()
    {
        return view('backend.job.category');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        JobCategory::insert([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'author'=>Auth::user()->name,
            'created_at'=>Carbon::now(),
        ]);
        return response()->json([
            'success'=>'success',
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {
        JobCategory::find($request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }

    public function autocategories(Request $request){

        $table = JobCategory::all();

        $tableData = '';
        foreach ($table as $key => $value) {
            $tableData .= '<tr><th scope="row">'.($key+1).'</th><td>'. $value->name .'</td><td>'. $value->author .'</td><td class="text-center p-0"><a class="btn btn-sm px-2 m-1 btn-primary" href="1"><i class="fa fa-edit"></i></a><button class="btn btn-sm px-2 m-1 btn-danger" onclick="categoryDestroy(\''.$value->id.'\')"><i class="fa fa-trash"></i></button></td></tr>';
        }
        return response()->json([
            'tableData'=>$tableData,
        ]);

    }

}
