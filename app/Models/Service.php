<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Service extends Model {

    /**
     *
     * @var array
     */
    protected $fillable = [
	'name', 'id',
    ];

    public function car() {
	return $this->hasMany(Car::class);
    }
    
}
