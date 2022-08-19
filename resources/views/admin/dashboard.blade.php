
@extends('admin.admin-app')

@section('title',trans('translations.dashboard'))
@section('content')
    <main class="main-wrap">
    <header class="main-header navbar">
        <div class="col-search">
            <form class="searchform">
                <div class="input-group">
                    <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                    <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i></button>
                </div>
                <datalist id="search_terms">
                    <option value="Products">
                    <option value="New orders">
                    <option value="Apple iphone">
                    <option value="Ahmed Hassan">
                </datalist>
            </form>
        </div>
        <div class="col-nav">
            <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link btn-icon" href="#">
                        <i class="material-icons md-notifications animation-shake"></i>
                        <span class="badge rounded-pill">3</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                </li>

                <li class="dropdown nav-item">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                        <a class="dropdown-item text-brand" href="#">
                            <img src="{{asset('admin/assets/imgs/theme/flag-us.png')}}" alt="English">
                            {{trans('translations.language_english')}}
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{asset('admin/assets/imgs/theme/flag-fr.png')}}" alt="Français">
                            {{trans('translations.language_france')}}
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{asset('admin/assets/imgs/theme/flag-jp.png')}}" alt="Français">
                            {{trans('translations.language_japan')}}
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="{{asset('admin/assets/imgs/theme/flag-cn.png')}}" alt="Français">
                            {{trans('translations.china')}}
                        </a>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="{{asset('admin/assets/imgs/people/avatar2.jpg')}}" alt="User">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                        <a class="dropdown-item" href="#">
                            <i class="material-icons md-perm_identity"></i>
                            {{trans('translations.admin.admin_dashboard.edit_profile')}}
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="material-icons md-settings"></i>
                            {{trans('translations.admin.admin_dashboard.edit_profile')}}
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="material-icons md-account_balance_wallet"></i>
                            {{trans('translations.admin.admin_dashboard.wallet')}}
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="material-icons md-receipt"></i>
                            {{trans('translations.admin.admin_dashboard.billing')}}
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">
                            <i class="material-icons md-exit_to_app"></i>
                            {{trans('translations.logout')}}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
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
