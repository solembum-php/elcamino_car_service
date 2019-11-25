<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Service extends Model {

    /**
     *
     * @var array
     */
    protected $fillable = [
	'name', 'id',
    ];

    public function user() {
	return $this->belongsTo(User::class);
    }

}
