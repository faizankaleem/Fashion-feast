<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AddProductsRequest;
use App\Services\admin\ProductService;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function __construct(ProductService $productService)
    {
        $this->service = $productService;
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.products.add-product',compact('category'));
    }

    public function store(AddProductsRequest $request)
    {
        $this->service->storeProduct($request);
        return redirect()->back()->with(['message' => trans('translations.data_inserted')]);

    }
}
