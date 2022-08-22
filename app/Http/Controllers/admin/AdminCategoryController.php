<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AddCategoryRequest;
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
}
