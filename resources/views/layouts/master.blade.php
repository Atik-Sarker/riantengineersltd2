<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backEnd/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/backEnd/css/toastr.min.css') }}">
  
  
  {{-- coustom style --}}
    @section('head_style')
        
    @show

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/backEnd/css/style.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
    <img src="{{asset('public/backEnd/dist/img/AdminLTELogo.png')}}" alt="Admin" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Dashboard
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-header">Main Menu</li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-folder-o text-info" ></i>
            <p>
              Logo
              <i class="fa fa-angle-left right text-info"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('logo.create') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon text-info"></i>
                <p>Add Logo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logo.manage') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon text-info"></i>
                <p>Manage Logo</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-folder-o text-info" ></i>
            <p>
              Slider
              <i class="fa fa-angle-left right text-info"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('slider.create') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon text-info"></i>
                <p>Add Slider</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('slider.manage') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon text-info"></i>
                <p>Manage Slider</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-folder-o text-info" ></i>
            <p>
              Service
              <i class="fa fa-angle-left right text-info"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('service.create') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon text-info"></i>
                <p>Add Service</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('service.manage') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon text-info"></i>
                <p>Manage Service</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-folder-o text-info" ></i>
            <p>
              Gallery
              <i class="fa fa-angle-left right text-info"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('gallery.create') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon text-info"></i>
                <p>Add Gallery</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('gallery.manage') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon text-info"></i>
                <p>Manage Gallery</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @section('content')
      
  @show
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>
        <a id="navbarDropdown"  href="#" role="button">{{ Auth::user()->name }} </a>
      </h5>
      <p>
        <a href="{{ route('logout') }}" 
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
      </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        </p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="">GatewayIT</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{asset('public/backEnd/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backEnd/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backEnd/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('public/backEnd/dist/js/toastr.min.js') }}"></script>

  {!! Toastr::message() !!}
{{-- coustom script --}}
@section('footer_script')
  @show
</body>

</html>
