<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Http\Controllers\Controller;



class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $cars = Car::all();
         //$cars = Car::where('service_id', '=', '1')->get();
        return view('client.cars.index', ['cars' => $cars]);
    }
}
