<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        /*User::creating(function ($user) {
            if ( ! $user->isValid()) {
                return false;
            }
        });*/
=======
      /*  User::creating(function ($user) {
            if ( ! $user->isValid()) {
                return false;
            }
        }

        ); */
>>>>>>> master
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
