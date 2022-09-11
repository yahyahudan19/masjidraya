<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/home/assets/images/x-icon/logo.png')}}">

        <!-- Title -->
        <title> @yield('title') | Masjid Raya An-Nur Polinema</title>

        <meta content="Admin Dashboard MRA  " name="description" />
        <meta content="Masjid Raya An-Nur Polinema" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

        <link href="{{asset('template/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">

         <!-- DataTables -->
         <link href="{{asset('template/admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('template/admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- Responsive datatable examples -->
         <link href="{{asset('template/admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         
         <!-- Dropify -->
        <link href="{{asset('template/admin/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        {{-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> --}}

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin._page.sidebar')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->
           
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
              
                    <!-- Top Bar Start -->
                    @include('admin._page.header')
                    <!-- Top Bar End -->
                    
                    @yield('content')
                    <!-- Page content Wrapper -->
              
                </div> <!-- content -->
              
                <footer class="footer">
                    © 2022 Admin Masjid Raya An-Nur Polinema.
                </footer>
              
              </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

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

        <script src="{{asset('template/admin/assets/plugins/chart.js/chart.min.js')}}"></script>
        <script src="{{asset('template/admin/assets/pages/dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('template/admin/assets/js/app.js')}}"></script>

         <!-- Required datatable js -->
         <script src="{{asset('template/admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
         <!-- Buttons examples -->
         <script src="{{asset('template/admin/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/jszip.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/pdfmake.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/vfs_fonts.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/buttons.print.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
         <!-- Responsive examples -->
         <script src="{{asset('template/admin/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
 
         <!-- Datatable init js -->
         <script src="{{asset('template/admin/assets/pages/datatables.init.js')}}"></script>
         
         <!-- Dropify init js -->
         <script src="{{asset('template/admin/assets/plugins/dropify/js/dropify.min.js')}}"></script>
         <script src="{{asset('template/admin/assets/pages/dropify.init.js')}}"></script>

          <!--Wysiwig js-->
        <script src="{{asset('template/admin/assets/plugins/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('template/admin/assets/pages/form-editor.js')}}"></script>
        

    </body>
</html>