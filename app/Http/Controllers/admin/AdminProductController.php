<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AddProductsRequest;
use App\Http\Requests\admin\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
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

    public function show()
    {
        $products = Product::with('subCategory','category','productImages')->get();
        return view('admin.products.show-products',compact('products'));
    }
    public function edit($id)
    {
        $products = Product::with('subCategory','category','productImages')->where('id',$id)->first();
        $categories = Category::all();
        return view('admin.products.edit-product',compact('products','categories'));
    }

    public function update(UpdateProductRequest $request)
    {
        $this->service->updateProduct($request);
        return redirect()->route('show-product')->with(['message' => trans('translations.data_edit')]);
    }

    public function destroy($id)
    {
        ProductImage::where('product_id' , $id)->delete();
        Product::find($id)->delete();
        return back()->with(['message' => trans('translations.data_deleted')]);
    }

}
