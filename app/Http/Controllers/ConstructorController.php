<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Constructor;
class ConstructorController extends Controller

{
    public function index()
    {
        $constructor = Constructor::where('user', auth()->user()->id)->first();
        $light = Product::where('id', $constructor->light)->first();
        $fishTank = Product::where('id', $constructor->fishTank)->first();
        $wood = Product::where('id', $constructor->wood)->first();
        $stones = Product::where('id', $constructor->stones)->first();
        $hideout = Product::where('id', $constructor->hideout)->first();
        $soil = Product::where('id', $constructor->soil)->first();
        $filter = Product::where('id', $constructor->filter)->first();
        return view('constructor', [
            'products' => Product::all(),
            'constructor' => $constructor,
            'light' => $light,
            'fishTank' => $fishTank,
            'wood' => $wood,
            'stones' => $stones,
            'hideout' => $hideout,
            'soil' => $soil,
            'filter' => $filter,
        ]);
    }
}
