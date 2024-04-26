<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset('image/pbm.png')}}" rel="icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
      <img src="{{asset('image/pbm.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Resep Makanan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('user/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/dashboard" class="d-block">{{Auth::user()->name;}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt" style="margin: 10px"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-th" style="margin: 10px"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left" style="margin: 10px"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/slides" class="nav-link">
                  <i class="far fa-circle nav-icon" style="margin: 10px"></i>
                  <p> Data Slide </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/abouts" class="nav-link">
                  <i class="far fa-circle nav-icon" style="margin: 10px"></i>
                  <p> Data About </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/categoris" class="nav-link">
                  <i class="far fa-circle nav-icon" style="margin: 10px"></i>
                  <p> Data Kategori </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/reseps" class="nav-link">
                  <i class="far fa-circle nav-icon" style="margin: 10px"></i>
                  <p> Data Resep </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/rekoms" class="nav-link">
                  <i class="far fa-circle nav-icon" style="margin: 10px"></i>
                  <p> Data Rekom Resep </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/testis" class="nav-link">
                  <i class="far fa-circle nav-icon" style="margin: 10px"></i>
                  <p> Data Testimonial </p>
                </a>
              </li>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/kontaks" class="nav-link">
              <i class="nav-icon fas fa-user" style="margin: 10px"></i>
              <p>
                Tentang
              </p>
            </a>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             <i class="nav-icon fas fa-sign-out-alt"></i><p>{{ __('Logout') }}</p>
         </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">@yield('title', 'Dashboard')</h5>
              </div>
              <div class="card-body">
               <p> @yield('content')</p>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
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
    <strong>Copyright &copy; {{ date('Y')}} <a href="https://adminlte.io">Aplikasi Resep Makanan</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
