<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
// use App\Providers\Passport;
// use Laravel\Passport\Passport;
// use Laravel\Passport\Passport;
use App\Passport\Passport;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    // protected $policies = [
    //     'App\Model' => 'App\Policies\ModelPolicy',
    // ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Passport::routes();
    }
}
