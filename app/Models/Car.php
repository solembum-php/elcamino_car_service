<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;


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
	return $this->belongsTo(User::class);
    }
}
