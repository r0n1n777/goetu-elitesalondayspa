<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class GalleryController extends Controller
{
    public function getPhotos()
    {
        return collect(File::allFiles('images/gallery/store/'))
            ->sortByDesc(function ($file) {
                return $file->getCTime();
            })
            ->map(function ($file) {
                return $file->getFileName();
            })->toArray();
    }

    public function index()
    {
        $photos = $this->getPhotos();
        
        return view('gallery/our-salon')->with('photos', $photos);
    }
}
