<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Exception;
use App\Models\Brand;
use App\Models\Size;
use App\Models\Color;
use App\Models\Certification;

class AttributesController extends Controller
{
    
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




    // ***********Product Size Funcation************

    public function indexsize() {
        $sizes = Size::orderBy('id', 'desc')->get();
        return view('backend.size.index',compact('sizes'));
    }
    
    public function createsize() {
        return view('backend.size.create');
    }
    public function storesize(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {
            $data = new Size();
            $data->name = $request->name;
            $data->save();
            return redirect()->route('size.index')->with('success', 'size created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('size.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function editsize($id=null){
        $sizes['size'] = Size::find($id);
        if (!$sizes['size']) {
            return redirect()->back();
        }     
        return view('backend/size/edit', $sizes);
    }

    public function updatesize(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = Size::findOrFail($id);
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('size.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('size.index')->with('error', $e->getMessage());
        }
    }



    // ***********Product Color Funcation************

    public function indexcolor() {
        $colors = Color::orderBy('id', 'desc')->get();
        return view('backend.color.index',compact('colors'));
    }
    
    public function createcolor() {
        return view('backend.color.create');
    }
    public function storecolor(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {
            $data = new Color();
            $data->name = $request->name;
            $data->save();
            return redirect()->route('color.index')->with('success', 'color created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('color.index')->with('error', 'An error occurred. Please try again.');
        }
    }


    public function editcolor($id=null){
        $colors['color'] = Color::find($id);
        if (!$colors['color']) {
            return redirect()->back();
        }     
        return view('backend/color/edit', $colors);
    }

    public function updatecolor(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = Color::findOrFail($id);
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('color.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('color.index')->with('error', $e->getMessage());
        }
    }



    // *****Product Certification Funcation******
    
    public function indexcertification() {
            $certifications = Certification::orderBy('id', 'desc')->get();
            return view('backend.certification.index',compact('certifications'));
        }
        
        public function createcertification() {
            return view('backend.certification.create');
        }
        public function storecertification(Request $request):RedirectResponse
        {
            $request->validate([
                'name' => 'required',
            ]);

            try {
                $data = new Certification();
                $data->name = $request->name;
                $data->save();
                return redirect()->route('certification.index')->with('success', 'certification created successfully.');
            } catch (\Exception $e) {
                return redirect()->route('certification.index')->with('error', 'An error occurred. Please try again.');
            }
        }

        public function editcertification($id=null){
            $certifications['certification'] = Certification::find($id);
            if (!$certifications['certification']) {
                return redirect()->back();
            }     
            return view('backend/certification/edit', $certifications);
        }

        public function updatecertification(Request $request, $id): RedirectResponse
        {
            $request->validate([
                'name' => 'required',
                'status' => 'required',
            ]);
            
            try {
                $data = Certification::findOrFail($id);
                $data->name   = $request->input('name');
                $data->status  = $request->input('status');
                $data->save();

                    return redirect()->route('certification.index')->with('success', 'Data update successfully.');
                } catch (\Exception $e) {
                    return redirect()->route('certification.index')->with('error', $e->getMessage());
            }
        }
}
