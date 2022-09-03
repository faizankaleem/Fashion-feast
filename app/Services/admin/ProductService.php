<?php

namespace App\Services\admin;


use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use http\Env\Request;

class ProductService{

    public function storeProduct($request)
    {

;//        $subCategoryId = '';
        $current_price = $request->input('reg_price') - $request->input('discounted_price');
////        $subcategory = SubCategory::where('name' , $request->input('subcategory'))->first();
//          $subcategory = SubCategory::find($request->input('subcategory'));
//
//        if ($subcategory == null)
//        {
//            $subCategoryId = SubCategory::insertGetId([
//                'name' => $request->input('subcategory'),
//                'category_id' => $request->input('category'),
//            ]);
//        }
//        else
//        {
//            $subCategoryId = $subcategory->id;
//        }
        $product_id = Product::insertGetId([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'total_stock' => $request->input('stock'),
            'regular_price' => $request->input('reg_price'),
            'discounted_price' => $request->input('discounted_price'),
            'current_price' => $current_price,
            'sub_category_id' =>$request->input('subcategory'),
            'category_id' =>$request->input('category'),

        ]);

        if($request->hasFile('img'))
        {
            uploadMultipleProductImages($request,$product_id);
        }

    }

    public function updateProduct($request)
    {
        $subCategoryId = '';
        $current_price = $request->input('reg_price') - $request->input('discounted_price');
        $subcategory = SubCategory::where('name' , $request->input('subcategory'))->first();
        if ($subcategory == null)
        {
            $subCategoryId = SubCategory::insertGetId(['name' => $request->input('subcategory'), 'category_id' => $request->input('category')]);
        }
        $subCategoryId = $subcategory->id;
        $product = Product::find($request->product_id);
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->total_stock = $request->input('stock');
        $product->regular_price = $request->input('reg_price');
        $product->discounted_price = $request->input('discounted_price');
        $product->current_price =  $current_price;
        $product->sub_category_id = $subCategoryId;
        $product->category_id = $request->input('category');
        $product->save();

        if($request->hasFile('img'))
        {
            uploadMultipleProductImages($request,$request->input('product_id'));
        }
    }
}
