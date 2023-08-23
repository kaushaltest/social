# Social login system


[![Latest Version on Packagist](https://img.shields.io/packagist/v/role/rolebasesystem.svg?style=flat-square)](https://packagist.org/packages/role/rolebasesystem)
[![Total Downloads](https://img.shields.io/packagist/dt/role/rolebasesystem.svg?style=flat-square)](https://packagist.org/packages/role/rolebasesystem)
[![License](https://img.shields.io/github/license/kaushaltest/rolebasesystem.svg?style=flat-square)](LICENSE.md)

Laravel sociallogin is a package that simplifies the process of authenticating users with various OAuth providers, such as Google, Facebook. It abstracts away the complexities of OAuth authentication, making it easier to integrate third-party authentication into your Laravel application.

## Indexing
1. [Login Integration](#loginintegration)
2. [Installation](#installation)
3. [ENV](#env)
4. [configuration](#configuration)
5. [Publish](#publish)
6. [Routes](#routes)
7. [Run](#run)


## LoginIntegration
1. Create a Google Project and Obtain Credentials:
    - Go to the Google Developers Console.
    - Create a new project and enable the "Google+ API" (or "People API").
    - Protect routes and actions based on user roles and permissions.
    - Simplified and intuitive API for role and permission management.
    - Integration with Laravel's built-in authentication system.
    - Under "Credentials," create OAuth 2.0 credentials. Configure the authorized redirect URI for your Laravel app.

2. Create a Facebook App and Obtain Credentials:
    - Go to the Facebook Developers Console.
    - Create a new app and configure the OAuth settings.
    - Note down the App ID and App Secret.
   

## Installation

You can install the package via composer:

```bash
composer require sociallogin/sociallogin
```

## ENV 

- .env file add this  
```bash
    GOOGLE_CLIENT_ID=
    GOOGLE_CLIENT_SECRET=
    GOOGLE_REDIRECT=

    FACEBOOK_CLIENT_ID=
    FACEBOOK_CLIENT_SECRET=
    FACEBOOK_REDIRECT_URI=
```

## configuration

- In the config/services.php file, add your Google OAuth credentials:
```bash
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT'),
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID', 'your_default_client_id'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET', 'your_default_client_secret'),
        'redirect' => env('FACEBOOK_REDIRECT_URI'),
    ],
```

## Publish 

- Controller store package controller inside (social/sociallogin/).
```bash
 php artisan vendor:publish --tag=sociallogin
```
## Routes 

- route use in this package 
```bash
    //redirect to google login page
    Route::get('auth/google', [Sociallogincontroller::class, "redirectToGoogle"]);
     //This is call back function to get google login credential data
    Route::get('auth/google/callback', [Sociallogincontroller::class, 'handleGoogleCallback']);

    //redirect to facebook login page
    Route::get('auth/facebook', [Sociallogincontroller::class, 'redirectToFacebook']);

    //This is call back function to get facebook login credential data
    Route::get('auth/facebook/callback', [Sociallogincontroller::class, 'handleFacebookCallback']);
```

## Run 

-run this command:
```bash
php artisan serve 
```
- Hit this url for google login 'http://127.0.0.1:8000/auth/google'
- Hit this url for facebook login 'http://127.0.0.1:8000/auth/facebook'