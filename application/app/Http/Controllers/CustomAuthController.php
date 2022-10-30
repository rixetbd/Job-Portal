<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function custom_login(Request $request)
    {

        $request->validate([
            "email"=>'required',
            "password"=>'required',
        ]);

        $author = User::where('email', $request->email)->first();
        $candidate = Candidate::where('email', $request->email)->first();
        $company = Company::where('email', $request->email)->first();

        // if(Hash::check($request->password, $candidate->password)) {
        //     return response()->json(['status'=>'true','message'=>'Email is correct']);
        // } else if(Hash::check($request->password, $company->password)) {
        //     return response()->json(['status'=>'false', 'message'=>'password is wrong']);
        // } else if(Hash::check($request->password, $author->password)) {
        //     return response()->json(['status'=>'false', 'message'=>'password is wrong']);
        // }else{
        //     return $request->all();
        // }

        // if (!empty($author)) {
        //     if ($author->password = $value) {
        //         Auth::login($author);
        //         return redirect(url('/'));
        //     }
        // }

    //     dd($request->email ,
    //     $candidate->password,
    //         Auth::user()
    // );


        if(!empty($candidate)){
            if ($request->password = $candidate->password) {
                $user = Candidate::find($candidate->id);
                Auth::guard('CandidateAuth')->login($user);
                return redirect(url('/'));
            }
        }

        if(!empty($company)){
            if ($request->password = $company->password) {
                $user = Company::find($candidate->id);
                Auth::guard('CompanyAuth')->login($user);
                return redirect(url('/'));
            }
        }

        if(!empty($author)){
            if ($request->password = $author->password) {
                $user = Company::find($author->id);
                Auth::guard('CompanyAuth')->login($user);
                return redirect(url('/'));
            }
        }

        return back('register');

        // if(!empty($candidate)){
        //     if(Hash::check($request->password , $candidate->password)) {
        //         Auth::guard('CandidateAuth')->login($company);
        //         return redirect(url('/'));
        //     }else{
        //         return "Password Didn't Match";
        //     }
        // }

        // if(!empty($author)){
        //     return "Author User";
        // }

        // if(!empty($candidate)){
        //     if ($candidate->password = $value) {
        //         Auth::guard('CandidateAuth')->login($candidate);
        //         return redirect(url('/'));
        //     }
        // }else{
        //     return redirect(url('/'));
        // }

    }
}
