<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{

    public function login_google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback_google()
    {
        $getUser = Socialite::driver('google')->user();
        $this->_add_user($getUser);
        return redirect('/login');
    }

    public function login_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook()
    {
        $getUser = Socialite::driver('facebook')->user();
        // dd($getUser);
        $this->_add_user($getUser);
        return redirect('/login');
    }

    protected function _add_user($data){
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name         = $data->name;
            $user->email        = $data->email;
            $user->password     = Hash::make($data->id);
            $user->avatar       = $data->avatar;
            $user->provider_id  = $data->id;
            $user->save();
        }else{
            User::where('email', '=', $data->email)->update([
                'avatar'=> $data->avatar,
            ]);
        }
        Auth::login($user);
    }





}
