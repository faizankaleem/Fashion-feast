<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AddSubcategoryRequest;
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
}
