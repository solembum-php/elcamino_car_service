<?php

namespace App\Policies;

use App\User;
use App\Models\Image;
use Illuminate\Auth\Access\HandlesAuthorization;

class ImagePolicy
{
    use HandlesAuthorization;

//    /**
//     * Create a new policy instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        //
//    }
    /**
     * 
     * @param User $user
     * @param Image $image
     * @return type
     */
    public function destroy(User $user, Image $image) {
	return $image->user_id == $user->id;
        
    }
}
