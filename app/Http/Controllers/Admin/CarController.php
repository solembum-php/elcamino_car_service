<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Http\Controllers\Controller;
use App\Models\Service;

class CarController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
	$cars = Car::all();
	return view('admin.cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
	$services = Service::all();
	if ($services->count() == 0) {
	    return redirect()->route('admin.services.index');
	}
	return view('admin.cars.create', ['services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
	$this->validate($request, [
	    'name' => 'required|max:255',
	    'service_id' => 'required',
	]);

	Car::create([
	    'name' => $request->name,
	    'service_id' => $request->service_id,
	]);


	return redirect(route('admin.cars.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
	//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car) {
	return view('admin.cars.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car) {
	$this->validate($request, [
	    'name' => 'required|max:255',
	]);
	$car->name = $request->name;
	$car->update();
	return redirect(route('admin.cars.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Car $car) {
	$car->delete();
	return redirect(route('admin.cars.index'));
    }

}
