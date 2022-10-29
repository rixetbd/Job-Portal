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

        $author = User::where('email', '=', $request->email)->first();
        $candidate = Candidate::where('email', '=',$request->email)->first();
        $company = Company::where('email', '=', $request->email)->first();
        $value = Hash::make($request->password);

        if (!empty($author)) {
            if ($author->password = $value) {
                Auth::login($author);
                return redirect(url('/'));
            }
        } else if(!empty($company)){
            if ($company->password = $value) {
                Auth::guard('CompanyAuth')->login($company);
                return redirect(url('/'));
            }
        }else if(!empty($candidate)){
            if ($candidate->password = $value) {
                Auth::guard('CandidateAuth')->login($candidate);
                return redirect(url('/'));
            }
        }else{
            return redirect(url('/'));
        }

    }
}
