<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Controllers\Controller;

class ClientImageController extends Controller {

//     /**
//     * Создание нового экземпляра контроллера.
//     *
//     * @return void
//     */
//    public function __construct() {
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $images = Image::all();
        //$images = Image::where('user_id', '=', '1')->get();
        return view('client.images.index', ['images' => $images]);
    }
}
