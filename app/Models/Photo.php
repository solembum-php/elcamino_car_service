<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Photo extends Model
{
    /**
     *
     * @var array
     */
    protected $fillable = [
	'name', 'id', 'url',
    ];

    public function user() {
	return $this->belongsTo(User::class);
    }
}
