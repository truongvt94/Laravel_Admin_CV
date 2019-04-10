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
            return $user->type == User::SUPER_ADMIN || $user->type == User::ADMIN;
        });

        Gate::define('update-profile', function($user){
            return $user->id != Auth::user()->id;
        });

        Gate::define('add-user', function($user){
            return $user->type == self::ADMIN;
        });
    }
}
