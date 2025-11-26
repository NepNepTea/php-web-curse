<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cartorder;
use App\Models\Constructor;
use App\Models\Cart;
use App\Models\Product;
class OrderController extends Controller
{
    public function admin()
    {
        return view('orders-admin', [
            'orders' => Cartorder::all(),
            'statuses' => ['готов', 'отменен', 'собирается', 'завершен']
        ]);
    }
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([

            'status' => 'required',
        ]);
        Cartorder::where('id', $id)
            ->update(['status' => $validated['status']]);
        return redirect()->back();
    }

    public function buycon()
    {
        $constructor = Constructor::where('user', auth()->user()->id)->first();
        $productsid = explode(',', $constructor->constructorContent);
        $products = Product::whereIn('id', $productsid)->get();
        return view('check', [
            'products' => $products,
            'productsid' => $productsid,
        ]);
    }

    public function buycar()
    {
        return view('check', [
            'orders' => Cartorder::all(),
        ]);
    }
    public function checkConstructor(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|regex:/^[0-9]+$/',
        ]);
        return redirect('/profile');
    }
    public function checkCart(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|regex:/^[0-9]+$/',
        ]);
        return redirect('/profile');
    }
}
