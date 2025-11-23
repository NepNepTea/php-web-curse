<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([

            'status' => 'required',
        ]);
        Cartorder::where('id', $id)
            ->update(['status' => $validated['status']]);
        return redirect()->back();
    }
}
