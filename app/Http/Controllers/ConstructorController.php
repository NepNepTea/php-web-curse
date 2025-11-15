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
        $constructorContent = '';
        $cost = 0;
        if(!empty($filter->price)) {
            $cost += $filter->price;
            $constructorContent .= $filter->id;
        };
        if(!empty($light->price)) {
            $cost += $light->price;
            if($constructorContent == ''){
                $constructorContent .= $light->id;
            } else {
                $constructorContent .= ',' . $light->id;
            }
        };
        if(!empty($fishTank->price)) {
            $cost += $fishTank->price;
            if($constructorContent == ''){
                $constructorContent .= $fishTank->id;
            } else {
                $constructorContent .= ',' . $fishTank->id;
            }
        };
        if(!empty($wood->price)) {
            $cost += $wood->price;
            if($constructorContent == ''){
                $constructorContent .= $wood->id;
            } else {
                $constructorContent .= ',' . $wood->id;
            }
        };
        if(!empty($stones->price)) {
            $cost += $stones->price;
            if($constructorContent == ''){
                $constructorContent .= $stones->id;
            } else {
                $constructorContent .= ',' . $stones->id;
            }
        };
        if(!empty($hideout->price)) {
            $cost += $hideout->price;
            if($constructorContent == ''){
                $constructorContent .= $hideout->id;
            } else {
                $constructorContent .= ',' . $hideout->id;
            }
        };
        if(!empty($soil->price)) {
            $cost += $soil->price;
            if($constructorContent == ''){
                $constructorContent .= $soil->id;
            } else {
                $constructorContent .= ',' . $soil->id;
            }
        };
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
            'cost' => $cost,
            'constructorContent' => $constructorContent,
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
