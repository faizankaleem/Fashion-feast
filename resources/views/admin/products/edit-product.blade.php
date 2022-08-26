@extends('admin.admin-app')

@section('title' , trans('translations.admin.edit_product.title'))

@section('content')

    <section class="content-main">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">
                        {{trans('translations.admin.edit_product.title')}}
                    </h2>
                    <div>
                        <a href="{{route('dashboard')}}" class="btn btn-md rounded font-sm hover-up">
                            {{trans('translations.back')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <strong>{{Session('message')}}</strong>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="{{route('update-product')}}"  enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$products->id}}">
                            <div class="mb-4">
                                <label for="title" class="form-label">{{trans('translations.admin.add_product.title')}} *</label>
                                <input type="text" placeholder=" {{trans('translations.admin.add_product.title_placeholder')}}" class="form-control" name="title"  value="{{$products->title}}" >
                                @if ($errors->has('title'))
                                    <span class="text-danger">
                                            {{ $errors->first('title') }}
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="description" class="form-label">{{trans('translations.admin.add_product.description')}} * </label>
                                <textarea placeholder=" {{trans('translations.admin.add_product.description_placeholder')}} " class="form-control" rows="4" name="description">{{$products->description}}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">
                                            {{ $errors->first('description') }}
                                    </span>
                                @endif
                            </div>


                            <h4> {{trans('translations.admin.add_product.price')}}</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">{{trans('translations.admin.add_product.total_Qty')}}</label>
                                        <input placeholder="{{trans('translations.admin.add_product.total_Qty_placeholder')}}" type="text" class="form-control" name="stock"   value="{{$products->total_stock}}">
                                        @if ($errors->has('stock'))
                                            <span class="text-danger">
                                            {{ $errors->first('stock') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">{{trans('translations.admin.add_product.reg_price')}} </label>
                                        <div class="row gx-2">
                                            <input placeholder=" {{trans('translations.admin.add_product.rs')}}" type="text" class="form-control" name="reg_price"  value="{{$products->regular_price}}">
                                        </div>
                                        @if ($errors->has('reg_price'))
                                            <span class="text-danger">
                                            {{ $errors->first('reg_price') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">{{trans('translations.admin.add_product.dis_price')}}</label>
                                        <input placeholder="{{trans('translations.admin.add_product.rs')}}" type="text" class="form-control" name="discounted_price"   value="{{$products->discounted_price}}">
                                        @if ($errors->has('discounted_price'))
                                            <span class="text-danger">
                                            {{ $errors->first('discounted_price') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <h4>{{trans('translations.admin.add_product.category_section_heading')}}</h4>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">{{trans('translations.admin.add_product.category')}} </label>
                                        <select class="form-select" id="cat" name="category">
                                            <option value="" disabled selected>{{trans('translations.admin.add_sub_category.selectCategory')}}   </option>
                                            @foreach($categories as $category)
                                                <option {{$products->category->id == $category->id ?'selected' : ''}} value="{{$category->id}}"> {{$category->name}} </option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('category'))
                                            <span class="text-danger">
                                            {{ $errors->first('category') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">{{trans('translations.admin.add_product.sub_category')}}</label>
                                        <input type="text" name="subcategory" class="form-control" placeholder="{{trans('translations.admin.add_product.sub_category_placeholder')}}" value="{{$products->subCategory->name}}">
                                        @if ($errors->has('subcategory'))
                                            <span class="text-danger">
                                            {{ $errors->first('subcategory') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <h4>{{trans('translations.images')}}</h4>
                            <span class="btn btn-md rounded font-sm hover-up mb-50" style="float: right" id="add_more_button" >
                                {{trans('translations.add_more_image')}}
                            </span>

                            <input type="hidden" value = 2 id="hidden_images_value">

                            <div class=mb-lg-5">
                                <label for="img">
                                    {{trans('translations.image_1')}}
                                </label>
                                <input type="file" name="img[]" class="form-control">
                                @if ($errors->has('img'))
                                    <span class="text-danger">
                                            {{ $errors->first('img') }}
                                            </span>
                                @endif
                            </div>
                            <div class="mb-4" id="img-2">
                                <label for="img">
                                    {{trans('translations.image_2')}}:
                                </label>
                                <input type="file" name="img[]" class="form-control">
                            </div>
                            <div class="mb-4" id="img-3">
                                <label for="img">
                                    {{trans('translations.image_3')}}
                                </label>
                                <input type="file" name="img[]" class="form-control">
                            </div>
                            <div class="mb-4" id="img-4">
                                <label for="img">
                                    {{trans('translations.image_4')}}
                                </label>
                                <input type="file" name="img[]" class="form-control">
                            </div>


                            <button type="submit" class="btn btn-md rounded font-sm hover-up mt-20">{{trans('translations.submit')}} </button>

                        </form>
                    </div>
                </div> <!-- card end// -->
            </div>
        </div>
    </section>

@endsection



