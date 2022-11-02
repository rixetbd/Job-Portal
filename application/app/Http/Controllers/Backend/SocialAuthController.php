<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Intervention\Image\Facades\Image;

class SocialAuthController extends Controller
{

    public function login_google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback_google()
    {
        $getUser = Socialite::driver('google')->user();
        // dd($getUser);
        $this->_add_user_google($getUser);
        return redirect(url('/'));
    }

    public function login_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook()
    {
        $getUser = Socialite::driver('facebook')->user();
        // dd($getUser);
        $this->_add_user_facebook($getUser);
        return redirect(url('/'));
    }

    protected function _add_user_facebook($data){

        $user = Candidate::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new Candidate();
            $avatar_name = $data->email.'_'.rand(0,1000).'.jpg';
            $user->name         = $data->name;
            $user->email        = $data->email;
            $user->password     = Hash::make($data->id);
            $user->user_id     = Str::slug($data->name).'-'.Carbon::now()->year.rand(1111111, 999999999);
            $user->avatar       = $avatar_name;
            $user->provider_id  = $data->id;
            Image::make($data->avatar_original.'&access_token='.$data->token)->save(public_path('uploads/users/'.$avatar_name));
            $user->save();
        }else{
            $image_path = public_path('uploads/users/'.$user->avatar);
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            $avatar_name = $data->email.'_'.rand(0,1000).'.jpg';
            Image::make($data->avatar_original.'&access_token='.$data->token)->save(public_path('uploads/users/'.$avatar_name));
            Candidate::where('email', '=', $data->email)->update([
                'avatar'=> $avatar_name,
            ]);
        }
        Auth::guard('CandidateAuth')->login($user);
    }

    protected function _add_user_google($data){
        $user = Candidate::where('email','=', $data->email)->first();
        if (!$user) {
            $user = new Candidate();
            $avatar_name = $data->email.'_'.rand(0,1000).'.jpg';
            $user->name         = $data->name;
            $user->email        = $data->email;
            $user->password     = Hash::make($data->id);
            $user->user_id     = Str::slug($data->name).'-'.Carbon::now()->year.rand(1111111, 999999999);
            $user->avatar       = $avatar_name;
            $user->provider_id  = $data->id;
            Image::make($data->avatar_original)->save(public_path('uploads/users/'.$avatar_name));
            $user->save();
        }else{
            $image_path = public_path('uploads/users/'.$user->avatar);
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            $avatar_name = $data->email.'_'.rand(0,1000).'.jpg';
            Image::make($data->avatar_original)->save(public_path('uploads/users/'.$avatar_name));
            Candidate::where('email', '=', $data->email)->update([
                'avatar'=> $avatar_name,
            ]);
        }
        Auth::guard('CandidateAuth')->login($user);
    }

}
