<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class AddProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'stock' => 'required|numeric',
            'reg_price' => 'required|numeric',
            'discounted_price' => 'required|numeric|lt:reg_price',
            'category' => 'required',
            'subcategory' => 'required',
            'img[]' => 'mimes:jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => trans('translations.title_required'),
            'description.required' => trans('translations.description_required'),
            'stock.required' => trans('translations.stock_required'),
            'stock.numeric' => trans('translations.stock_number'),
            'reg_price.required' => trans('translations.reg_price_required'),
            'reg_price.numeric' => trans('translations.reg_price_numeric'),
            'discounted_price.required' => trans('translations.discounted_price_required'),
            'discounted_price.numeric' => trans('translations.discounted_price_numeric'),
            'category.required' => trans('translations.category_required'),
            'subcategory.required' => trans('translations.subcategory_required'),
            'img.mimes' => trans('translations.img_type'),
        ];
    }
}
