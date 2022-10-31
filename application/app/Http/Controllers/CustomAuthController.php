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

        if(!empty($candidate)){
            if(Hash::check($request->password , $candidate->password)) {
                Auth::guard('CandidateAuth')->login($candidate);
                return redirect(url('/'));
            }else{
                return redirect()->route('register');
            }
        }

        if(!empty($company)){
            if(Hash::check($request->password , $company->password)) {
                Auth::guard('CompanyAuth')->login($company);
                return redirect(url('/'));
            }else{
                return redirect()->route('register');
            }
        }

        if(!empty($author)){
            if(Hash::check($request->password , $author->password)) {
                Auth::login($author);
                return redirect(url('/'));
            }else{
                return redirect()->route('register');
            }
        }

        return redirect()->route('register');

    }
}
