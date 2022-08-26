@extends('admin.admin-app')
@section('title',trans('translations.admin.show_product_form_heading'))
@section('content')
    <div class="card mb-4">
        <h4 class="card-title mt-lg-5 ml-20">
            {{trans('translations.admin.show_product_form_heading')}}
        </h4>

        <div class="card-body">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{Session('message')}}</strong>
                </div>
            @endif

            {{--        @if(Session::has('message'))--}}
            {{--            <div class="alert alert-success alert-dismissible" role="alert">--}}
            {{--                <strong>{{Session('message')}}</strong>--}}
            {{--                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
            {{--                    <span aria-hidden="true">&times;</span>--}}
            {{--                </button>--}}
            {{--            </div>--}}
            {{--        @endif--}}
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table align-middle text-center table-nowrap mb-50">
                        <thead class="table-light">
                        <tr>
                            <th class="align-middle" scope="col">
                                {{trans('translations.Sr_number')}}
                            </th>
                            <th class="align-middle" scope="col">
                                {{trans('translations.admin.show_product_form_images')}}
                            </th>
                            <th class="align-middle"  scope="col">
                                {{trans('translations.admin.add_product.title')}}
                            </th>
                            <th class="align-middle"  scope="col">
                                {{trans('translations.sub_category_name')}}
                            </th>
                            <th class="align-middle"  scope="col">
                                {{trans('translations.sub_category_name')}}
                            </th>
                            <th class="align-middle"  scope="col">
                                {{trans('translations.admin.show_product_form_total_stock')}}
                            </th>

                            <th class="align-middle" scope="col">
                                {{trans('translations.admin.show_product_form_current_price')}}
                            </th>
                            <th class="align-middle" scope="col">
                                {{trans('translations.admin.show_product_form_discounted_price')}}
                            </th>

                            <th class="align-middle"  scope="col">
                                {{trans('translations.admin.show_product_form_current_price')}}
                            </th>
                             <th class="align-middle" colspan="2" scope="col">
                                {{trans('translations.operations')}}
                            </th>


                        </tr>
                        </thead>
                        <tbody>
                        @php  $count = 0; @endphp
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center">
                                    {{++$count}}
                                </td>
                                <td class="text-center">
                                    @if(count($product->productImages) != 0)
                                        <img src="{{asset('uploads/products/'.$product->productImages[0]->image)}}" class="show_product_table_image_size">
                                    @else
                                        <img src="{{asset('admin/assets/imgs/logo/logo.png')}}" class="show_product_table_image_size logo">
                                    @endif
                                </td>
                                <td class="text-center">
                                    {{$product->title}}
                                </td>
                                <td class="text-center">
                                    {{$product->category->name}}
                                </td>
                                <td class="text-center">
                                    {{$product->subCategory->name}}
                                </td>

                                <td class="text-center">
                                    {{$product->total_stock}}
                                </td>
                                <td class="text-center">
                                    {{$product->regular_price}}
                                </td>
                                <td class="text-center">
                                    {{$product->discounted_price}}
                                </td>
                                <td class="text-center">
                                    {{$product->current_price}}
                                </td>

                                <td class="text-center">
                                    <a href="{{route('edit-product',$product->id)}}" class="btn btn-warning">
                                        {{trans('translations.edit')}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{route('delete-product',$product->id)}}" class="btn btn-danger">
                                        {{trans('translations.delete')}}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div> <!-- table-responsive end// -->
        </div>
    </div>
@endsection
