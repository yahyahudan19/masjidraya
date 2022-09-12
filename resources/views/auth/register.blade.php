<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Register - Masjid Raya An-Nur Polinema</title>
        <meta content="Register Masjid Raya" name="description" />
        <meta content="Masjid Raya An-Nur Polinema" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/home/assets/images/x-icon/logo.png')}}">

        <link href="{{asset('template/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <div class="text-center m-b-15">
                        <a href="#" class="logo logo-admin"><img src="{{asset('template/home/assets/images/logo_hitam.png')}}" height="150px" alt="logo"></a>
                        <p><b>Selamat Datang !</b> <br> Sistem Informasi Masjid Raya An-Nur Polinema</p>

                    </div>
                    
                    <div class="p-3">
                        <form class="form-horizontal" action="/registering" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" name="email" type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" name="name" type="text" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a href="/auth" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Sweet Alert-->
        @include('sweetalert::alert')

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