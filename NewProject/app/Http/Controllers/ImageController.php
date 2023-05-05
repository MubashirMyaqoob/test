<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Image;

class ImageController extends Controller
{
    public function image(){
        return view('image');
    }
}
