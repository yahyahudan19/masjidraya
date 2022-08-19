<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/home/assets/images/x-icon/logo.png')}}">

        <!-- Title -->
        <title> @yield('title') | Masjid Raya An-Nur Polinema</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="{{asset('template/admin/theme/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('template/admin/theme/assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('template/admin/theme/assets/plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
        <link href="{{asset('template/admin/theme/assets/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
        <link href="{{asset('template/admin/theme/assets/plugins/DataTables/datatables.min.css')}}" rel="stylesheet">   


      
        <!-- Theme Styles -->
        <link href="{{asset('template/admin/theme/assets/css/main.min.css')}}" rel="stylesheet">
        <link href="{{asset('template/admin/theme/assets/css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="page-container">
            <!-- Header -->
            @include('admin._page.header')
            <!-- Sidebar -->
            @include('admin._page.sidebar')
            <!-- Content -->
            @yield('content')
        </div>
        
        <!-- Javascripts -->
        <script src="{{asset('template/admin/theme/assets/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="{{asset('template/admin/theme/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="{{asset('template/admin/theme/assets/plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('template/admin/theme/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('template/admin/theme/assets/js/main.min.js')}}"></script>
        <script src="{{asset('template/admin/theme/assets/js/pages/dashboard.js')}}"></script>
        <script src="{{asset('template/admin/theme/assets/plugins/DataTables/datatables.min.js')}}"></script>
        <script src="{{asset('template/admin/theme/assets/js/pages/datatables.js')}}"></script>

    </body>
</html>