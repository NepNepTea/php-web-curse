<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('catalog', [
                    'products' => Product::all(),
                    'brands' => Brand::all()
                ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([

            'full_name' => 'required',

            'shortName' => 'required',

            'price' => 'required',

            'type' => 'required',

            'brand' => 'required',
            'status' => 'required',
            'photo' => 'required|file|size:2000|mimes:png',
            'max_value' => 'required',

        ]);



        // Create the user

        $product = Product::create([

            'full_name' => $validated['full_name'],

            'shortName' => $validated['shortName'],
            'price' => $validated['price'],
            'type' => $validated['type'],
            'brand' => $validated['brand'],
            'status' => $validated['status'],
            'max_value' => $validated['max_value'],

        ]);
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();

        $filename = $request->shortName.'.'.$extension;

        $path = 'images/products/';
        $file->move($path, $filename);
        return redirect('/catalog-add')->with('success', 'Товар добавлен');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
