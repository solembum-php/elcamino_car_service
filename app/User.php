<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Service;
use App\Models\Car;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
	'password', 'remember_token',
    ];

    public function services() {
	return $this->hasMany(Service::class);
    }
    
    public function cars() {
	return $this->hasMany(Car::class);
    }

}
