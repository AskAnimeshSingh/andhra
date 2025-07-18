<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Restaurant POS Admin Panel</title>
        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/app.min.css')}}">
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/components.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/custom.css')}}">
        <link rel='shortcut icon' type='image/x-icon' href='{{ url('public/assets/website/images/logo.webp')}}' />
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/izitoast/css/iziToast.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

        <!--Summernote-->
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/summernote/summernote-bs4.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/codemirror/lib/codemirror.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/codemirror/theme/duotone-dark.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/jquery-selectric/selectric.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/bundles/select2/dist/css/select2.min.css')}}">

        @yield('extra_css')
      </head>
</head>
<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!-- include Navbar-->
            @include('admin.include.nav')

            <!-- include sidebar-->
            @include('admin.include.sidebar')


            <!-- content--->
            <div class="main-content">
                @yield('content')
            </div>

             <!-- include footer-->
             @include('admin.include.footer')


        </div>
    </div>

</body>
 <!-- General JS Scripts -->
 <script src="{{ asset('assets/admin/assets/js/app.min.js')}}"></script>
 <!-- JS Libraies -->
 <script src="{{ asset('assets/admin/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
 <!-- Page Specific JS File -->
 <script src="{{ asset('assets/admin/assets/js/page/index.js')}}"></script>
 <!-- Template JS File -->
 <script src="{{ asset('assets/admin/assets/js/scripts.js')}}"></script>
 <!-- Custom JS File -->
 <script src="{{ asset('assets/admin/assets/js/custom.js')}}"></script>
 <script src="{{ asset('assets/admin/assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
 <script src="{{ asset('assets/admin/assets/js/page/toastr.js')}}"></script>
 <script src="{{ asset('assets/admin/assets/js/page/sweetalert.js')}}"></script>
 <script src="{{ asset('assets/admin/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{ asset('assets/admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/admin/assets/js/page/datatables.js')}}"></script>
  <script src="{{ asset('assets/admin/assets/bundles/sweetalert/sweetalert.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/admin/assets/js/page/sweetalert.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


  <script src="{{ asset('assets/admin/assets/bundles/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('assets/admin/assets/bundles/codemirror/lib/codemirror.js')}}"></script>
  <script src="{{ asset('assets/admin/assets/bundles/codemirror/mode/javascript/javascript.js')}}"></script>
  <script src="{{ asset('assets/admin/assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
  <script src="{{ asset('assets/admin/assets/bundles/ckeditor/ckeditor.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/admin/assets/js/page/ckeditor.js')}}"></script>
  {{-- <script src="{{ asset('assets/admin/assets/bundles/select2/dist/js/select2.full.min.js')}}"></script> --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">

        <!-- Select2 JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>
  
 @yield('extra_js')
</html>
