<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::with('categories.menus.prices')->get();

        return view('services')->with('services', $services);
    }
}
