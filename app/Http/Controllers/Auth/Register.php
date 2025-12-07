<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Constructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cart;
class Register extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:30|regex:/^[а-яА-ЯЁё\s]+$/',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8|regex:/^[a-zA-Z0-9]+$/',
        ]);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        Auth::login($user);
        $constructor = new Constructor;
        $constructor->user = auth()->user()->id;
        $constructor->save();
        $cart = new Cart;
        $cart->user = auth()->user()->id;
        $cart->save();
        return redirect('/')->with('success', 'Добро пожаловать в River Planet');
    }
}
