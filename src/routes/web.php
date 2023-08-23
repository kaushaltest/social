<?php

use App\Http\Controllers\social\sociallogin\Sociallogincontroller;


Route::group(['middleware' => 'web'], function () {
    Route::get('auth/google', [Sociallogincontroller::class, "redirectToGoogle"]);
    Route::get('auth/google/callback', [Sociallogincontroller::class, 'handleGoogleCallback']);
    Route::get('auth/facebook', [Sociallogincontroller::class, 'redirectToFacebook']);
    Route::get('auth/facebook/callback', [Sociallogincontroller::class, 'handleFacebookCallback']);
});
