<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Ocoging | Blog')</title>
        <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
        <meta name="description" content="@yield('meta_description','default description')">
        <link rel="canonical" href="{{url()->current()}}"/>

    <title>Ocoding | Dashboard - {{ $title }}  </title>

    <!-- Custom fonts for this template-->
    <link href="../../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../../../css/cssfont.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- multiple select -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">

    {{-- css:external --}}
    @stack('css-external')
    {{-- css:internal --}}
    @stack('css-internal')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
        @include('dashboard.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Navbar -->
            @include('dashboard.layouts.navbar')
            <!-- Main Content -->
            <div id="content">
                @yield('content')
            <!-- Footer -->
            @include('dashboard.layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../../js/sb-admin-2.min.js"></script>

    <!-- MultipleSelect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../../js/demo/chart-area-demo.js"></script>
    <script src="../../../../js/demo/chart-pie-demo.js"></script>
    <script src="../../../../js/demo/datatables-demo.js"></script>
        
    {{-- javascript:external --}}
    @stack('javascript-external')
    {{-- javascript:internal --}}
    @stack('javascript-internal')

</body>

</html>