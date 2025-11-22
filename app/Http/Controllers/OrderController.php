<?php

namespace App\Http\Controllers;
use App\Models\Cartorder;
class OrderController extends Controller
{
    public function admin()
    {
        return view('orders-admin', [
            'orders' => Cartorder::all(),
            'statuses' => ['готов', 'отменен', 'собирается', 'завершен']
        ]);
    }
}
