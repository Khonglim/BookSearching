<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>BookSearching</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="expires" content="never" />
  <link rel="stylesheet" href="{{ asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
          <a href="{{'home'}}" class="logo">
            <span class="logo-mini"><b>A</b>LT</span>
            <span class="logo-lg"><b>Admin</b>BOOK</span>
          </a>
          <nav class="navbar navbar-static-top" role="navigation">

              <ul class="nav navbar-nav navbar-right">
              <li>

                  <a  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('ออกจากระบบ') }}
               </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
      </form>

              </li>

                </ul>




          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">

            <!-- /.sidebar-menu -->
          </section>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    </div>


    <script src="{{ asset('asset/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('asset/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('asset/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('asset/dist/js/demo.js') }}"></script>
    <script src="{{ asset('asset/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/easyAutocomplete-1.3.5/jquery.easy-autocomplete.js') }}"></script>
    <script src="{{ asset('asset/easyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js') }}"></script>

</body>
</html>
