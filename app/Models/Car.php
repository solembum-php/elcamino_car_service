<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Image;

class Car extends Model {

    /**
     *
     * @var array
     */
    protected $fillable = [
	'name', 'id', 'service_id'
    ];

    public function service() {
	return $this->belongsTo(Service::class);
    }

    public function images() {
	return $this->hasMany(Image::class);
    }

}
