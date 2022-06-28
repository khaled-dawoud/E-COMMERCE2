<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories  = Category::with('products', 'parent')->orderBy('id', 'desc')->get(); //withCount -> build fake column call (products_count)
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::WhereNull('parent_id')->get();
        return view('backend.categories.create', compact('categories'));
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
            'parent_id' => 'nullable|exists:categories,'
        ]);
        $new_image = rand() . rand() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/images/category'), $new_image);

        Category::create([
            'name' => $request->name,
            'image' => $new_image,
            'parent_id' => $request->parent_id,
        ]);
        $notification = array(
            'message' => 'New Category Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.category.index')->with($notification);
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
        $category = Category::findOrFail($id);
        $categories = Category::WhereNull('parent_id')->where('id', '<>', $category->id)->get(); // 'id' == $id && $category->id == $id
        return view('backend.categories.edit', compact('categories', 'category'));
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
            'parent_id' => 'nullable|exists:categories,'
        ]);

        $category = Category::findOrFail($id);
        $new_image = $category->image;

        if ($request->hasFile('image')) {
            $new_image = rand() . rand() . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/images/category'), $new_image);
        }

        $category->update([
            'name' => $request->name,
            'image' => $new_image,
            'parent_id' => $request->parent_id,
        ]);
        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        // Delete image
        if (file_exists(public_path('uploads/images/category' . $category->image))) {
            File::delete(public_path('uploads/images/category' . $category->image));
        }

        // set parent id to null
        Category::where('parent_id', $category->id)->update(['parent_id' => null]);
        // Category::where('parent_id', $category->id)->delete();

        // delete item
        $category->delete();
        $notification = array(
            'message' => 'Category deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
