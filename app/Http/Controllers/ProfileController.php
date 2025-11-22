<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cartorder;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $orders = Cartorder::where('user', auth()->user()->id)->get();
        return view('profile', [
            'user' => $user,
            'orders' => $orders
        ]);
    }
}
