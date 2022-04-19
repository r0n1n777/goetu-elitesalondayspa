<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promotion::where('active', true)->get();

        return view('promo')->with('promos', $promos);
    }
}
