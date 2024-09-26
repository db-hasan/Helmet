<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Exception;

use App\Models\Brand;
use App\Models\Size;
use App\Models\Color;
use App\Models\Certification;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware(['permission:ride-index'], ['only' => ['indexride']]);
    //     $this->middleware(['permission:ride-create'], ['only' => ['createride', 'storeride']]);
    //     $this->middleware(['permission:ride-edit'], ['only' => ['editride', 'updateride']]);

    // }
    
    













    // ***********Product Brand Funcation************

    public function indexbrand() {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('backend.brand.index',compact('brands'));
    }
    
    public function createbrand() {
        return view('backend.brand.create');
    }
    public function storebrand(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {
            $data = new Brand();
            $data->name = $request->name;
            $data->save();
            return redirect()->route('brand.index')->with('success', 'brand created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('brand.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function editbrand($id=null){
        $brands['brand'] = Brand::find($id);
        if (!$brands['brand']) {
            return redirect()->back();
        }     
        return view('backend/brand/edit', $brands);
    }

    public function updatebrand(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = Brand::findOrFail($id);
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('brand.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('brand.index')->with('error', $e->getMessage());
        }
    }
}
