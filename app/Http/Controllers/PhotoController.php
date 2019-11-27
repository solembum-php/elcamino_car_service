<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Photo;

class PhotoController extends Controller {

    public function index() {
	$photos = Photo::all();
	return view('photos.index', ['photos' => $photos]);
    }
    
    public function uploadfile(Photo $photo, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $photo->storeAs($folder, $name.'.'.$photo->getClientOriginalExtension(), $disk);

        return $file;
    }

}
