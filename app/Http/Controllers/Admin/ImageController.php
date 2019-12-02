<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Image;
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
	//return view('admin.images.index');
	$images = Image::all();
	return view('admin.images.index', ['images' => $images]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.images.create');
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
	Image::create(['url'=>$url,'user_id'=>$request->user()->id]);
	return redirect(route('admin.images.index'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Image $image) {
        $this->authorize('destroy', $image);
        $image->delete();
        return redirect(route('admin.images.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image) {
        return view('admin.images.edit', ['image' => $image]);
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image) {
        
        $image->url = $request->url;
        $image->update();
        return redirect(route('admin.images.index'));
    }
}
