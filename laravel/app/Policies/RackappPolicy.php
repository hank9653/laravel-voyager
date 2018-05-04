<?php

namespace App\Policies;

use App\User;
use TCG\Voyager\Policies\BasePolicy;

class RackappPolicy extends BasePolicy
{
    /**
     * Determine if the given model can be edited by the user.
     *
     * @param \TCG\Voyager\Contracts\User $user
     * @param  $model
     *
     * @return bool
     */
    public function copy(User $user, $model)
    {
        // Does this model belong to the current user?
        $current = $user->id === $model->author_id;

        $env = env('APP_ENV', 'fail');
        
        if($env == 'local'){
            if ( $user->role()->first()->name == 'RD') {
                return $current || ($this->checkPermission($user, $model, 'edit') && $this->checkPermission($user, $model, 'add'));
            }
        }else if($env=='production_test'){
            if ( $user->role()->first()->name == 'RD') {
                return $current || ($this->checkPermission($user, $model, 'edit') && $this->checkPermission($user, $model, 'add'));
            }
        }
       
        return false;
    }

    public function edit(User $user, $model)
    {
        // Does this model belong to the current user?
        $current = $user->id === $model->author_id;

        $env = env('APP_ENV', 'fail');
        
        if($env == 'local'){
            if ( $user->role()->first()->name == 'RD') {
                return $current || ($this->checkPermission($user, $model, 'edit') && $this->checkPermission($user, $model, 'add'));
            }
        }else if($env=='production_test'){
            if ( $user->role()->first()->name == 'RD') {
                return $current || ($this->checkPermission($user, $model, 'edit') && $this->checkPermission($user, $model, 'add'));
            }
        }
       
        return false;
    }

    public function deploy(User $user, $model)
    {
        // Does this model belong to the current user?
        $current = $user->id === $model->author_id;
        
        $env = env('APP_ENV', 'fail');
        
        if($env == 'local'){
            // Only QA and RD can depoly
            if ( $user->role()->first()->name == 'QA' || $user->role()->first()->name == 'RD') {
                return true;
            }
        }else if($env=='production_test'){
            if ( $user->role()->first()->name == 'QA' || $user->role()->first()->name == 'RD') {
                return true;
            }
        }

        return false;
        
    }

}
