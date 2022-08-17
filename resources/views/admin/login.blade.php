<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="layoutAuthentication" class="mt-lg-5x">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">{{{trans('translations.admin.login.formTitle')}}}</h3></div>
                            <div class="card-body">
                                <form action="{{route('admin-auth')}}" method="post">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="" type="email" name="email" value="{{old('email')}}"/>
                                        <label for="inputEmail">{{{trans('translations.admin.login.email')}}}</label>
                                        @if ($errors->has('email'))
                                            <span class="text-danger"><b>{{ $errors->first('email') }}</b></span>
                                        @endif
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control"  name="password" type="password" placeholder="Password" />
                                        <label for="inputPassword">{{{trans('translations.admin.login.password')}}}</label>
                                        @if ($errors->has('password'))
                                            <span class="text-danger"><b>{{ $errors->first('password') }}</b></span>
                                        @endif
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="#">Forgot Password?</a>
                                        <button class="btn btn-primary" type="submit">{{trans('translations.login')}}</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
</body>
</html>
