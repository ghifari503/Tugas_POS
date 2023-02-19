
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config ('app.name') }} @yield('title')</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset ('assets/plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


<link rel="stylesheet" href="{{ asset ('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset ('assets/plugins/jqvmap/jqvmap.min.css') }}">

<link rel="stylesheet" href="{{ asset ('assets/dist/css/adminlte.min.css?v=3.2.0') }}">

<link rel="stylesheet" href="{{ asset ('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

<link rel="stylesheet" href="{{ asset ('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')
 }}">
<link rel="stylesheet" href="{{ asset ('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')
 }}">
<link rel="stylesheet" href="{{ asset ('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')
 }}">

<link rel="stylesheet" href="{{ asset ('assets/plugins/daterangepicker/daterangepicker.css') }}">

<link rel="stylesheet" href="{{ asset ('assets/plugins/summernote/summernote-bs4.min.css') }}">
@yield('css')

</head>
<body class="hold-transition  skin-purple-light sidebar-mini layout-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="{{ asset ('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
</div>

@includeIf('layouts.header')


@includeIf('layouts.sidebar')

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>
    @yield('title')
</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
    @section('breadcrumb')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    @show
</ol>
</div>
</div>
</div>
</div>


<section class="content">
<div class="container-fluid">

@yield('content')



</div>
</section>

</div>

@includeIf('layouts.footer')

<aside class="{{ asset ('assets/control-sidebar control-sidebar-dark') }}">

</aside>

</div>


<script src="{{ asset ('assets/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset ('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset ('assets/plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset ('assets/plugins/sparklines/sparkline.js') }}"></script>

<script src="{{ asset ('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<script src="{{ asset ('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>



<script src="{{ asset ('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script src="{{ asset ('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<script src="{{ asset ('assets/dist/js/adminlte.js?v=3.2.0') }}"></script>

<script src="{{ asset ('assets/dist/js/demo.js') }}"></script>

<script src="{{ asset('assets/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{ asset ('assets/dist/js/pages/dashboard.js') }}"></script>

<script src="{{ asset ('assets/plugins/datatables/jquery.dataTables.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/jszip/jszip.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/pdfmake/pdfmake.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/pdfmake/vfs_fonts.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.html5.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.print.min.js')
 }}"></script>
<script src="{{ asset ('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')
 }}"></script>
<script src="{{ asset ('js/validator.min.js') }}"></script>

@yield('js')
</body>
</html>
