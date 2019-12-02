<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Controllers\Controller;

class ClientServiceController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

}
