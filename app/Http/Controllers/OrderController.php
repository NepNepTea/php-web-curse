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
            'page' => 'constructor',
        ]);
    }
    public function buycar()
    {
        $cart = Cart::where('user', auth()->user()->id)->first();
        $productsid = explode(',', $cart->content);
        $products = Product::whereIn('id', $productsid)->get();
        return view('check', [
            'products' => $products,
            'page' => 'cart',
        ]);
    }
    public function check(Request $request, string $page)
    {
        $validated = $request->validate([
            'phone' => 'required|regex:/^[0-9]+$/',
        ]);
        if($page == 'cart'){
            $cart = Cart::where('user', auth()->user()->id)->first();
            $products = $cart->content;
            $code = bin2hex(random_bytes(10 / 2));
            $cartContent = explode(',', $cart->content);
            $cost = 0;
            $contents = Product::whereIn('id', $cartContent)->get();
        }
        else {
            $constructor = Constructor::where('user', auth()->user()->id)->first();
            $products = $constructor->constructorContent;
            $code = bin2hex(random_bytes(10 / 2));
            $content = explode(',', $constructor->constructorContent);
            $cost = 0;
            $contents = Product::whereIn('id', $content)->get();
        }
        foreach ($contents as $content) {
            $cost += $content->price;
        }
        $order = Cartorder::create([
            'phone' => $validated['phone'],
            'status' => 'собирается',
            'code' => $code,
            'products' => $products,
            'user' => auth()->user()->id,
            'date' => date("Y-m-d"),
            'cost' => $cost,
        ]);
        return redirect('/profile');
    }
}
