<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Exception;
use App\Models\Product;
use App\Models\Modeles;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Size;
use App\Models\Color;
use App\Models\Certification;


class ProductController extends Controller
{
    public function indexproduct() {
        $data['brands'] = Brand::all();
        $data['modeles'] = Modeles::all();
        $data['types'] = Type::all();
        $data['sizes'] = Size::all();
        $data['colors'] = Color::all();
        $data['certifications'] = Certification::all();
        return view('backend.product.index', $data);
    }
    
    public function createproduct() {
        $data['brands'] = Brand::all();
        $data['modeles'] = Modeles::all();
        $data['types'] = Type::all();
        $data['sizes'] = Size::all();
        $data['colors'] = Color::all();
        $data['certifications'] = Certification::all();
        return view('backend.product.create', $data);
    }
    public function storeproduct(Request $request):RedirectResponse
    {
        $request->validate([
            'costtype_id' => 'required',
            'amount' => 'required',
            'note' => 'nullable',
        ]);

        try {
            $data = new Product();
            $data->note = $request->note;
            $data->save();
            return redirect()->route('product.index')->with('success', 'product created successfully.');
        } catch (Exception $e) {
            return redirect()->route('product.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function editproduct($id = null) {
        $products['product'] = Product::find($id);
        $products['brands'] = Brand::all();
        $products['modeles'] = Modeles::all();
        $products['types'] = Type::all();
        $products['sizes'] = Size::all();
        $products['colors'] = Color::all();
        $products['certifications'] = Certification::all();
        
        if (!$products['product']) {
            return redirect()->back();
        }
        
        return view('backend.product.edit', $products);
    }
    
    public function updateproduct(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'costtype_id' => 'required', // Use 'costtype_id' instead of 'name'
            'amount' => 'required',
            'note' => 'nullable',
            'status' => 'required',
        ]);
    
        try {
            $data = Product::findOrFail($id);
            $data->note = $request->input('note');
            $data->status = $request->input('status');
            $data->save();
    
            return redirect()->route('product.index')->with('success', 'Data updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('product.index')->with('error', $e->getMessage());
        }
    }
}
