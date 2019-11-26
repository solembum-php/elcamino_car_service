<?php

namespace App\Policies;

use App\User;
use App\Models\Car;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarPolicy
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
     * @param Car $car
     * @return type
     */
    public function destroy(User $user, Car $car) {
	return $car->user_id == $user->id;
        
    }
}
