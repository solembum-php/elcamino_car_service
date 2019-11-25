<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Service;

class Car extends Model
{
    /**
     *
     * @var array
     */
    protected $fillable = [
	'name', 'id',
    ];

    public function service() {
	return $this->belongsTo(Service::class);
    }
}
