<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AddSubcategoryRequest;
use App\Http\Requests\admin\UpdateSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class AdminSubCategoryController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin.sub_categories.add-subcategory' ,compact('categories'));
    }

    public function store(AddSubcategoryRequest $request)
    {
        SubCategory::insert(['name'=> $request->input('name') , 'category_id'  => $request->input('category_id')]);
        return redirect()->back()->with(['message' => trans('translations.data_inserted')]);
    }

    public function show()
    {
        $sub_categories = SubCategory::with('category')->get();
        return view('admin.sub_categories.show-subcategory',compact('sub_categories'));
    }

    public function edit($id)
    {
        $sub_category = SubCategory::with('category')->find($id);
        $categories = Category::all();
        return view('admin.sub_categories.edit-subcategory',compact('sub_category','categories'));
    }

    public function update(UpdateSubCategoryRequest $request)
    {
       SubCategory::where('id' , $request->input('id'))->update(['name' => $request->input('name') , 'category_id' => $request->input('category_id')]);
       return redirect()->route('show-subCategory')->with(['message' => trans('translations.data_edit')]);
    }

    public function destroy($id)
    {
        SubCategory::find($id)->delete();
        return redirect()->route('show-subCategory')->with(['message' => trans('translations.data_deleted')]);

    }
}
