<?php

namespace App\Policies;

use App\Message;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessagePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function add(User $user){
        foreach ($user->roles as $role){
            if($role->name == 'admin' || $role->name == 'guest'){
                return true;
            }
        }
        return false;
    }
    public function edit(User $user, Message $message){
        if($user->id == $message->user_id){
            return true;
        }
        return false;
    }
    public function delete(User $user){
        foreach ($user->roles as $role){
            if($role->name == 'admin'){
                return true;
            }
        }
        return false;
    }
}
