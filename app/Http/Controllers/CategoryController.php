<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function AddCategory()
    {
        return view('backend.category.add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreCategory(Request $request)
    {
        $request->validate([
        'category_name' => 'required|unique:categories,category_name',
        'category_slug' => 'required',
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name )),
        ]);

        return redirect()->route('view.category')->with('success', 'Created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function ViewCategory(Category $category)
    {
        $categories = Category::latest()->get();
    return view('backend.category.category_list', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function EditCategory($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit_category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function UpdateCategory(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name,' . $id,
            'category_slug' => 'required',
        ]);

        Category::where('id', $id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);

        return redirect()->route('view.category')->with('success', 'Updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function DeleteCategory($id)
    {

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('view.category')->with('success', 'Category deleted successfully.');
    }

    public function ToggleCategoryStatus(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status; // toggle between 1 and 0
        $category->save();

        return back()->with('success', 'Category status updated.');
    }

}
