<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use App\Models\Car;
use App\Models\Service;
use App\Http\Controllers\Controller;

class ImageController extends Controller {


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $images = Image::all();
        //$images = Image::where('car_id', '=', '1')->get();
        return view('client.images.index', ['images' => $images]);
    }
}
