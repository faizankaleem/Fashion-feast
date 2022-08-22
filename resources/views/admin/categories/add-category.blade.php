@extends('admin.admin-app')

@section('title' , trans('translations.admin.add_category.title'))

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

                            <h3>{{trans('translations.admin.add_category.title')}}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('store-category')}}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">{{trans('translations.admin.add_category.categoryName')}}</label>
                                    <input type="text" name="name" placeholder="Category Name" class="form-control">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif

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
