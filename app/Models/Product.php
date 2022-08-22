<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' ,'description','total_stock','sold','available_stock','regular_price',
        'discounted_price','current_price','sub_category_id','category_id'];
}
