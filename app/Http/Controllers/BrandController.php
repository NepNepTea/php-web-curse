<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([

            'name' => 'required',

        ]);



        // Create the user

        $brand = Brand::create([

            'name' => $validated['name'],

        ]);
        $file = $request->file('logo');
        $extension = $file->getClientOriginalExtension();

        $filename = $request->name.'.'.$extension;

        $path = 'images/brands/';
        $file->move($path, $filename);
        return redirect('/brand-add')->with('success', 'Бренд добавлен');
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
