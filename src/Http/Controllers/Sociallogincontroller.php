<?php

namespace App\Http\Controllers\social\sociallogin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class Sociallogincontroller extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        print_r($user);
    }
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        print_r($user);
    }
}
