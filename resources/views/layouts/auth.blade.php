<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{__('auth.login')}}</title>
    @vite(['resources/js/app.js'])

    <!-- Fonts -->
    <link href="{{asset('assets/template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="{{asset('assets/template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/template/css/IRANSansWeb.css')}}" rel="stylesheet">
    @if(LaravelLocalization::getCurrentLocale() == 'ar')
        <link href="{{asset('assets/template/css/bootstrap-rtl.css')}}" rel="stylesheet">
    @endif



</head>
<body id="page-top">
<!-- Page Wrapper -->

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/template/js/sb-admin-2.min.js')}}"></script>



</body>
</html>
