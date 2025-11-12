<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Constructor;
class ConstructorController extends Controller

{
    public function index()
    {
        return view('constructor', [
            'products' => Product::all(),
            'constructors' => Constructor::where('id', auth()->user()->id)
        ]);
    }
}
