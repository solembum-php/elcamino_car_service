<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use App\Models\Service;
use App\Models\Car;
use App\Http\Controllers\Controller;

class ImageController extends Controller {

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
	return view('admin.images.index', ['images' => $images]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
	$cars = Car::all();
	if ($cars->count() == 0) {
	    return redirect()->route('admin.cars.index');
	}
	return view('admin.images.create', ['cars' => $cars]);
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
	$request->validate([
	    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	]);
	$originName = $request->file('image')->getClientOriginalName();
	$fileName = pathinfo($originName, PATHINFO_FILENAME);
	$extension = $request->file('image')->getClientOriginalExtension();
	$fileName = $fileName . '_' . time() . '.' . $extension;

	request()->image->move(public_path('images'), $fileName);
	$url = asset('images/' . $fileName);
	Image::create(['url'=>$url,'car_id'=>$request->car_id]);
	return redirect(route('admin.images.index'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Image $image) {
       
	
        $image->delete();
        return redirect(route('admin.images.index'));
    }
}
