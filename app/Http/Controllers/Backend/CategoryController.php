<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\News;

class CategoryController extends Controller
{
    public function index()
        {
            $categories = Category::all();
            return view('backend.category.index',compact('categories'));
        }

    public function create()
        {
            
            return view('backend.category.create');
        }

    public function show(Request $request)
        {
            $category = new Category();
            $category->name = $request->name;
            $category->save();

            return redirect(route('category-table'));
        }

    public function edit($id)
        {
            $category = Category::find($id);
            return view('backend.category.edit', compact('category'));
        }

    public function update(Request $request, $id)
        {
            $category = Category::find($id);
            $category->name = $request->name;
            $category->save();

            return redirect(route('category-table'));
        }

    public function destroy($id)
        {

          
            $categories = Category::find($id);
           
            $categories->delete();

            return redirect()->back();
        }

}
