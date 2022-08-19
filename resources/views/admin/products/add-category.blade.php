@extends('admin.admin-app')

@section('title' , trans('translations.admin.add_category.title'))

@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Add New Category</h2>
                    <div>
                        <a href="{{route('admin.dashboard')}}" class="btn btn-md rounded font-sm hover-up"> Back</a>

                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-5">
                            @include('user.layouts._session_message')
                            <div class="col-lg-9">
                                <section class="content-body p-xl-4">
                                    <form method="post" action="{{route('admin.insert_category')}}">
                                        @csrf
                                        <div class="row mb-4">
                                            <label class="col-lg-3 col-form-label">Category name*</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="cat_name" placeholder="Enter Category Name" required autofocus>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" style="float: right"> Submit</button>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
