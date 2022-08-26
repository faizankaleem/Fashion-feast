<?php

use App\Models\ProductImage;

function generateOtp($table, $field)
{
    $number = mt_rand(1000, 9999);
    $opt_exist = DB::table($table)->where($field, '=', $number)->exists();
    if ($opt_exist) {
        generateOtp($table, $field);
    }
    return $number;
}

function uploadMultipleProductImages($request,$product_id)
{
    ProductImage::where('product_id',$product_id)->delete();
    $size = count($request->file('img'));
    for($i = 0 ;$i < $size ; $i++)
    {
        $file_name = time().rand(1,1000).'.'.$request->file('img')[$i]->extension();
        $request->file('img')[$i]->move('uploads/products/',$file_name);
        ProductImage::insert(['image' => $file_name , 'product_id' => $product_id]);
    }
}
