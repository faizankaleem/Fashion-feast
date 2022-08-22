<?php

namespace App\Services\admin;


use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;

class ProductService{

    public function storeProduct($request)
    {

        $subCategoryId = '';
        $current_price = $request->input('reg_price') - $request->input('discounted_price');
        $subcategory = SubCategory::where('name' , $request->input('subcategory'))->first();
        if ($subcategory == null)
        {
            $subCategoryId = SubCategory::insertGetId([
                'name' => $request->input('subcategory'),
                'category_id' => $request->input('category'),
            ]);
        }
        else
        {
            $subCategoryId = $subcategory->id;
        }
        $product_id = Product::insertGetId([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'total_stock' => $request->input('stock'),
            'regular_price' => $request->input('reg_price'),
            'discounted_price' => $request->input('discounted_price'),
            'current_price' => $current_price,
            'sub_category_id' => $subCategoryId,
            'category_id' =>$request->input('category'),

        ]);

        if($request->hasFile('img'))
        {
            $size = count($request->file('img'));
            for($i = 0 ;$i < $size ; $i++)
            {
                $file_name = time().rand(1,1000).'.'.$request->file('img')[$i]->extension();
                $request->file('img')[$i]->move('uploads/products/',$file_name);
                ProductImage::insert(['image' => $file_name , 'product_id' => $product_id]);
            }
        }

    }
}
