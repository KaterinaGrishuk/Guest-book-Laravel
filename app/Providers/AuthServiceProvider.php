<?php

namespace App\Providers;


use function foo\func;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use App\Message;
use App\Policies\MessagePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Message::class => MessagePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        Gate::define('add-content', function(User $user){
//            foreach ($user->roles as $role){
//                if($role->name == 'admin' || $role->name == 'guest'){
//                    return true;
//                }
//            }
//            return false;
//        });
//
//        Gate::define('edit-content', function(User $user, Message $message){
//            if($user->id == $message->user_id){
//                return true;
//            }
//            return false;
//        });
//
//        Gate::define('delete-content', function(User $user){
//            foreach ($user->roles as $role){
//                if($role->name == 'admin'){
//                    return true;
//                }
//            }
//            return false;
//        });
    }
}
