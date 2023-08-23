<?php
namespace sociallogin\sociallogin;
use Illuminate\Support\ServiceProvider;

class SocialloginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // $this->loadViewsFrom(__DIR__.'/views','sociallogin');
        $this->mergeConfigFrom(
            __DIR__.'/config/secretkey.php','sociallogin'
        );
        // $this->publishes([
        //     __DIR__.'/config/secretkey.php' =>config_path('secretkey.php')
        // ],'sociallogin-config');
        // $this->publishes([
        //     __DIR__.'/config/secretkey.php' =>config_path('secretkey.php'),
        //     __DIR__.'/views' =>resource_path('views/social')
        // ]);
        $this->publishes([
            __DIR__.'/config/secretkey.php' =>config_path('secretkey.php'),
            // __DIR__.'/views' =>resource_path('views/vendor/sociallogin'),
            __DIR__ . '/Http/Controllers' => app_path('Http/Controllers/social/sociallogin'),
        ],'sociallogin');
    }

    public function register()
    {
        
    }
}