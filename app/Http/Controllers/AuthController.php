<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class AuthController extends Controller
{
    protected $redirectTo = '/home';
    
    public function authorize() {
    if(Auth::user()->role_id == 1) {
        return true;
    }

    return false;
}
}
