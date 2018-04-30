<?php

namespace App\Policies;

use App\User;
use TCG\Voyager\Policies\BasePolicy;

class RackresourcePolicy extends BasePolicy
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
       
        return $current || ($this->checkPermission($user, $model, 'edit') && $this->checkPermission($user, $model, 'add'));
    }
}
