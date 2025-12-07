<?php
namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class BrandController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'logo' => 'required|mimes:svg',
        ]);
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
    public function destroy($id)
    {
        $brand = Brand::where('id', $id)->firstorfail();
        $filename = 'images/brands/'.$brand->name.'.svg';
        $brand->delete();
        File::delete($filename);
        echo ("Бренд удален");
        return redirect()->route('brand-admin');
    }
    public function admin()
    {
        return view('brand-admin', [
            'brands' => Brand::all()
        ]);
    }
}
