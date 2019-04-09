<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //super, admin, hr, member

        Gate::define('show-list', function($user){
            $arr = ['1', '2', '3', '4'];

            return $user->type == $arr[0] || $user->type == $arr[1];
        });

        Gate::define('update-profile', function($user){
            return $user->id != Auth::user()->id;
        });

        Gate::define('add-user', function($user){
            return $user->type == self::ADMIN;
        });
    }
}
