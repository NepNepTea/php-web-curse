<?php

namespace App\Http\Controllers;

use App\Models\Cart;

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
        $cart = Cart::where('user', auth()->user()->id)->first();;
        return view('cart', [
            'content' => $cart->content
        ]);
    }
}
