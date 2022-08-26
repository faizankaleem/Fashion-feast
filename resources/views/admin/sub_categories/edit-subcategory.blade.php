@extends('admin.admin-app')

@section('title' , trans('translations.admin.show_category.all_subcategories_title'))

@section('content')
    <section class="content-main">

        <div class="row">

            <div class="col-lg-10">
                <div class="card mb-4">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>{{Session('message')}}</strong>
                        </div>
                    @endif
                    <div class="card-header">
                        <h3>{{trans('translations.admin.show_category.all_subcategories_title')}}</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-sub-category')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$sub_category->id}}" name="id">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">{{trans('translations.admin.add_sub_category.subCategoryName')}}</label>
                                <input type="text" name="name" placeholder="Category Name" class="form-control" value="{{$sub_category->name}}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                @endif
                            </div>

                            <div class="mb-4">
                                <label>
                                    {{trans('translations.admin.add_sub_category.selectCategory')}}
                                </label>
                                <select name="category_id" required class="form-select"> {{trans('translations.admin.add_sub_category.subCategoryName')}}

                                    <option selected disabled>
                                        {{trans('translations.admin.add_sub_category.selectCategory')}}

                                    </option>
                                    @foreach($categories as $category)
                                        <option {{$sub_category->category->id == $category->id ?'selected' : ''}} value="{{$category->id}}"> {{$category->name}} </option>
                                    @endforeach
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">
                                            {{ $errors->first('category_id') }}
                                        </span>
                                    @endif
                                </select>
                            </div>
                            <button type="submit" class="btn btn-md rounded font-sm hover-up">{{trans('translations.submit')}} </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">   </div>
        </div>
    </section>

@endsection
