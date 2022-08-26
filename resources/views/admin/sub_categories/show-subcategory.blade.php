@extends('admin.admin-app')
@section('title',trans('translations.admin.show_category.all_subcategories_title'))
@section('content')
    <div class="card mb-4">
        <h4 class="card-title mt-lg-5 ml-20">
            {{trans('translations.admin.show_category.all_subcategories_title')}}
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
                                {{trans('translations.category_name')}}
                            </th>
                            <th class="align-middle" scope="col">
                                {{trans('translations.sub_category_name')}}

                            </th>
                            <th class="align-middle" colspan="2" scope="col">
                                {{trans('translations.operations')}}

                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @php  $count = 0; @endphp
                        @foreach($sub_categories as $sub_category)
                            <tr>
                                <td class="text-center">
                                    {{++$count}}
                                </td>
                                <td class="text-center">
                                    {{$sub_category->category->name}}
                                </td>

                                <td class="text-center">
                                    {{$sub_category->name}}
                                </td>
                                <td class="text-center">
                                    <a href="{{route('edit-sub-category',$sub_category->id)}}" class="btn btn-warning">
                                        {{trans('translations.edit')}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{route('delete-sub-category',$sub_category->id)}}" class="btn btn-danger">
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
