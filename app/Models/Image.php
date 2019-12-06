<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Image extends Model {

    /**
     *
     * @var array
     */
    protected $fillable = [
	'url', 'id',
    ];

    public function car() {
	return $this->belongsTo(Car::class);
    }

}
