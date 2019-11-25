<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Models\Service;

class ServicePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        //
//    }
    /**
     * 
     * @param User $user
     * @param Service $service
     * @return type
     */
    public function destroy(User $user, Service $service) {
	return $service->user_id == $user->id;
    }
}
