<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login - Masjid Raya An-Nur Polinema</title>
        <meta content="Admin Masjid Raya" name="description" />
        <meta content="Masjid Raya An-Nur Polinema" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/home/assets/images/x-icon/logo.png')}}">

        <link href="{{asset('template/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <div class="text-center m-b-15">
                        <a href="#" class="logo logo-admin"><img src="{{asset('template/home/assets/images/logo_hitam.png')}}" height="150px" alt="logo"></a>
                    </div>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" action="/login" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="email" class="form-control" type="text" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="password" class="form-control" type="password" required="" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            {{-- <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="pages-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> <small>Create an account ?</small></a>
                                </div>
                            </div> --}}
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="{{asset('template/admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/detect.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('template/admin/assets/js/app.js')}}"></script>

    </body>
</html>