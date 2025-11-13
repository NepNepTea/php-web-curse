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

    public function add($id)
    {
        $constructor = Constructor::where('user', auth()->user()->id)->first();
        $product = Product::where('id', $id)->first();
        switch ($product->type) {
            case "filter":
                $constructor->filter = $id;
                $constructor->save();
                break;
            case "light":
                $constructor->light = $id;
                $constructor->save();
                break;
            case "fishTank":
                $constructor->fishTank = $id;
                $constructor->save();
                break;
            case "wood":
                $constructor->wood = $id;
                $constructor->save();
                break;
            case "stones":
                $constructor->stones = $id;
                $constructor->save();
                break;
            case "hideout":
                $constructor->hideout = $id;
                $constructor->save();
                break;
            case "soil":
                $constructor->soil = $id;
                $constructor->save();
                break;
        }
        return redirect('/constructor');
    }
}
