<?php

namespace Preferred\Domain\Users\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Preferred\Domain\Users\Entities\Role;
use Preferred\Domain\Users\Entities\User;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view a list of model.
     *
     * @param  \Preferred\Domain\Users\Entities\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('view any roles');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Preferred\Domain\Users\Entities\User $user
     * @param  \Preferred\Domain\Users\Entities\Role $model
     * @return mixed
     */
    public function view(User $user, Role $model)
    {
        return $user->can('view roles');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Preferred\Domain\Users\Entities\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create roles');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Preferred\Domain\Users\Entities\User $user
     * @param  \Preferred\Domain\Users\Entities\Role $model
     * @return mixed
     */
    public function update(User $user, Role $model)
    {
        return $user->can('update roles');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Preferred\Domain\Users\Entities\User $user
     * @param  \Preferred\Domain\Users\Entities\Role $model
     * @return mixed
     */
    public function delete(User $user, Role $model)
    {
        return $user->can('delete roles');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Preferred\Domain\Users\Entities\User $user
     * @param  \Preferred\Domain\Users\Entities\Role $model
     * @return mixed
     */
    public function restore(User $user, Role $model)
    {
        return $user->can('restore roles');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Preferred\Domain\Users\Entities\User $user
     * @param  \Preferred\Domain\Users\Entities\Role $model
     * @return mixed
     */
    public function forceDelete(User $user, Role $model)
    {
        return $user->can('force delete roles');
    }
}
