
@extends('admin.admin-app')

@section('title',trans('translations.dashboard'))
@section('content')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">
                    {{trans('translations.dashboard')}}
                </h2>
                <p>
                    {{trans('translations.admin.admin_dashboard.whole_data_string')}}
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-primary-light">
                            <i class="text-primary material-icons md-monetization_on"></i>
                        </span>
                        <div class="text">
                            <h6 class="mb-1 card-title">
                                {{trans('translations.admin.admin_dashboard.revenue')}}
                            </h6>
                            <span>$13,456.5</span>
                            <span class="text-sm">
                                {{trans('translations.admin.admin_dashboard.shipping_fee')}}
                            </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-success-light">
                            <i class="text-success material-icons md-local_shipping"></i>
                        </span>
                        <div class="text">
                            <h6 class="mb-1 card-title">
                                {{trans('translations.admin.admin_dashboard.Orders')}}
                            </h6>
                            <span>
                                53.668
                            </span>
                            <span class="text-sm">
                                Excluding orders in transit
                            </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light">
                            <i class="text-warning material-icons md-qr_code"></i>
                        </span>
                        <div class="text">
                            <h6 class="mb-1 card-title">
                                {{trans('translations.admin.admin_dashboard.products')}}

                            </h6>
                            <span>
                                9.856
                            </span>
                            <span class="text-sm">
                                In 19 Categories
                            </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-info-light">
                            <i class="text-info material-icons md-shopping_basket"></i>
                        </span>
                        <div class="text">
                            <h6 class="mb-1 card-title">
                                {{trans('translations.admin.admin_dashboard.monthly_earning')}}

                            </h6>
                            <span>
                                $6,982
                            </span>
                            <span class="text-sm">
                                Based in your local time.
                            </span>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    </section></main>

@endsection
