<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select(['id', 'name'])->get();
        $products = Product::all();
        return view('backend.products.create', compact('categories', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale_price' => 'nullable',
            'qty' => 'required',
            'category_id' => 'required'
        ]);

        $new_image = rand() . rand() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/images/products'), $new_image);

        Product::create([
            'name' => $request->name,
            'image' => $new_image,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'qty' => $request->qty,
            'category_id' => $request->category_id,
        ]);
        $notification = array(
            'message' => 'New Product Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.product.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::select('id', 'name')->get();
        return view('backend.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'description' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'category_id' => 'required'
        ]);

        $products = Product::findOrFail($id);
        $new_image = $products->image;

        if ($request->hasFile('image')) {
            $new_image = rand() . rand() . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/images/products'), $new_image);
        }

        $products->update([
            'name' => $request->name,
            'image' => $new_image,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'qty' => $request->qty,
            'category_id' => $request->category_id,
        ]);
        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.product.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        // Delete image
        if (file_exists(public_path('uploads/images/products' . $products->image))) {
            File::delete(public_path('uploads/images/products' . $products->image));
        }
        // delete item
        $products->delete();

        $notification = array(
            'message' => 'Product deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
