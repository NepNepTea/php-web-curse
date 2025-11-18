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
        $cartStatus ='empty';
        $cost = 0;
        $cart = Cart::where('user', auth()->user()->id)->first();
        if($cart->content != '' or !empty($cart->content)) {
            $cartStatus ='notempty';
            $cartContent = explode(',', $cart->content);
            $contents = Product::whereIn('id', $cartContent)->get();
            foreach ($contents as $content) {
                $cost += $content->price;
            }
        }
        if ($cartStatus == 'notempty') {
            return view('cart', [
                'contents' => $contents,
                'cost' => $cost,
                'cartStatus' => $cartStatus
            ]);
        } else {
            return view('cart', [
                'cartStatus' => $cartStatus,
                'cost' => 0
            ]);
        }
    }
    public function delete($id)
    {
        $cart = Cart::where('user', auth()->user()->id)->first();
        $cartContent = explode(',', $cart->content);
        $newContent = '';
        foreach ($cartContent as $content) {
            if ((int)$content != $id) {
                if ($newContent == '') {
                    $newContent .= $content;
                } else {
                    $newContent .= ',' . $content;
                }
            }
        }
        $cart->content = $newContent;
        $cart->save();
        return redirect()->back();
    }
}
