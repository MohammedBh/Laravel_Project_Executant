<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('blog-edit', function($user, $blog){
            return $user->role_id == 1 || $user->id == $blog->user_id;
        });
        
        Gate::define('blog-delete', function($user, $blog){
            return $user->role_id == 1 || $user->id == $blog->user_id;
        });

        Gate::define('blog-create', function($user){
            return $user->role_id == 1 || $user->role_id == 3;
        });
    }
}
