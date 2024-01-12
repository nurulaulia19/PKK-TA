<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />

 <!-- DataTables -->
 {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/> --}}
  <link rel="stylesheet" href="{{url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

<!-- Favicons -->
<link href="{{ url ('image/remove.png') }}" rel="icon" />
<link href="{{ url ('image/remove.png') }}" rel="apple-touch-icon" />

    <!-- Tempusdominus Bbootstrap 4 -->
    <link
      rel="stylesheet"
      href="{{ url('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="{{ url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('admin/plugins/jqvmap/jqvmap.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/dist/css/adminlte.min.css') }}" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="{{ url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"
    />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('admin/plugins/daterangepicker/daterangepicker.css') }}" />
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('admin/plugins/summernote/summernote-bs4.css') }}" />
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/dashboard_super" class="brand-link">
            <img
              src="{{ url ('image/remove.png') }}"
              alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3"
              style="opacity: 0.8"
            />
            <span class="brand-text font-weight-light">Super Admin TP PKK</span>
          </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="{{ url ('image/remove.png') }}"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">Super Admin PKK</a>
            </div>
          </div> --}}

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
                <a href="/dashboard_super" class="nav-link {{ Request::is('dashboard_super') ? 'active':'' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <!-- <i class="right fas fa-angle-left"></i> -->
                  </p>
                </a>

              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Data Kegiatan POKJA
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/data_desa" class="nav-link {{ Request::is('data_desa') ? 'active':'' }}" >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Desa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/data_kecamatan" class="nav-link {{ Request::is('data_kecamatan') ? 'active':'' }}" >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Kecamatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/data_pokja1_super" class="nav-link {{ Request::is('data_pokja1_super') ? 'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Catatan Data dan Data <br> Kegiatan Warga PKK Desa/ <br> Kelurahan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/data_pokja2_super" class="nav-link {{ Request::is('data_pokja2_super') ? 'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Catatan Data dan Data <br> Kegiatan Warga PKK <br> Kecamatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/data_pokja3_super" class="nav-link {{ Request::is('data_pokja3_super') ? 'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Catatan Data dan Data <br> Kegiatan Warga PKK <br> Kabupaten</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/data_pokja4_super" class="nav-link {{ Request::is('data_pokja4_super') ? 'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data POKJA IV</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/data_sekretariat_super" class="nav-link {{ Request::is('data_sekretariat_super') ? 'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Sekretariat/ <br> Data Umum</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Data Laporan
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/data_pokja_desa" class="nav-link {{ Request::is('data_pokja_desa') ? 'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Laporan Data Umum <br> POKJA Desa </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/data_pokja_kecamatan" class="nav-link {{ Request::is('data_pokja_kecamatan') ? 'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Laporan Data Umum <br> POKJA Kecamatan </p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item">
                <a href="/laporan_super" class="nav-link">
                    <i class="nav-icon fas fa-folder-open"></i>
                  <p>Data Laporan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/data_pengguna_super" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('super_admin.logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    Keluar
                </a>

                <form id="logout-form" action="{{ route('super_admin.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>


      <!-- /.content-wrapper -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1>@yield('bread')</h1> --}}
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('bread')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      @yield('container')

</div>

      <footer class="main-footer">
        <strong
          >Copyright &copy; Super Admin PKK.</strong
        >
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          {{-- <b>Version</b> 3.0.5 --}}
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('admin/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('admin/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('admin/dist/js/demo.js') }}"></script>
    <!-- DataTables -->
    {{-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> --}}
    <script src="{{url('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">

    </script>

    @stack('script-addon')
    @include('sweetalert::alert')

    @yield('script')

  </body>
</html>
