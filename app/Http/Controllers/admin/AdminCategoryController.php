<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AddCategoryRequest;
use App\Http\Requests\admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.add-category');
    }
    public function store(AddCategoryRequest $request)
    {
        Category::insert(['name' =>$request->input('name')]);
        return redirect()->back()->with(['message' => trans('translations.data_inserted')]);
    }
    public function show()
    {
        $categories = Category::all();
        return view('admin.categories.show-category',compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit-category',compact('category'));
    }

    public function update(UpdateCategoryRequest $request)
    {
      Category::where('id' , $request->input('category_id'))->update(['name' => $request->input('name')]);
      return redirect()->route('show-category')->with(['message' => trans('translations.data_edit')]);
    }

    public function destroy($id)
    {
        Category::find($id)->delete($id);
        return redirect()->route('show-category')->with(['message' => trans('translations.data_deleted')]);


    }
}
