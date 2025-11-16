<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function add($id)
    {
        $cart = Cart::where('user', auth()->user()->id)->first();;
        if($cart->content == '' or empty($cart->content)){
            $cart->content = $id;
        } else {
            $cart->content .= ',' . $id;
        }
        $cart->save();
        return redirect()->back();
    }
    public function index()
    {
        $cost = 0;
        $cart = Cart::where('user', auth()->user()->id)->first();
        if($cart->content != '' or !empty($cart->content)){
            $cartContent = explode(',', $cart->content);
        }
        $contents = Product::whereIn('id', $cartContent)->get();
        foreach ($contents as $content) {
            $cost += $content->price;

        }
        return view('cart', [
            'contents' => $contents,
            'cost' => $cost
        ]);
    }
}