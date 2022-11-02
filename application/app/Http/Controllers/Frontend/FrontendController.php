<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\JobCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function jobs_categories()
    {
        $all_categories = JobCategory::all();
        return view('frontend.jobs.categories',[
            'all_categories'=>$all_categories,
        ]);
    }
}
