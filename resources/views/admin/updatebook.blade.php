<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>BookSearching</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="expires" content="never" />
<link rel="shortcut icon" href="{{asset('images/favicon.jpg')}}" type="image/x-icon"/>
  <link rel="stylesheet" href="{{ asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="{{url('/home')}}" class="logo">
      <span class="logo-mini"><b>A</b>BK</span>
      <span class="logo-lg"><b>Admin</b>BOOK</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('/images/icon.jpg')}}" class="img-circle" alt="User Image"   width="20px"  height="20px">
                  <span class="hidden-xs">admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('/images/icon.jpg')}}" class="img-circle" alt="User Image">
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                        <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('ออกจากระบบ') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">การจัดการ</li>
                    <li><a href="{{url('/home')}}"><i class="fa fa-circle-o text-red"></i> <span>การจัดการชั้น</span></a></li>
                    <li><a href="{{url('/category')}}"><i class="fa fa-circle-o text-yellow"></i> <span>หมวดหนังสือ</span></a></li>
                    <li><a href="{{url('/updatedata')}}"><i class="fa  fa-cloud-download"></i> <span>อัพเดทฐานข้อมูล</span></a></li>
            </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      @if(Session::has('flash_message') )
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <p>{!! session('flash_message') !!}</p>
      </div>

      @endif
    </section>
    <section class="content container-fluid">
   <div class="box box-info">
    <div class="box-header with-border">
            อัพเดทข้อมูลหนังสือ
    </div>
      <div class="box-body">
      <form action="{{url('/updatedataapi')}}" name="testform" method="get" id="inviter">
           <span id="sendingmail">
               <input type="submit" name="submit" value="อัพเดทฐานข้อมูล" id="sendemail" class="btn btn-success">
            </span>
        </form>
      </div>
      <div class="box-footer">
      </div>
  </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <strong>Copyright &copy; 2018 <a href="#">BookSearching</a>.</strong> All rights reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
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
<script>
$("#inviter").submit(function(){     $("#sendingmail").html("ระบบกำลังอัพเดทโปรดรอสักครู่.....");     return true; });
</script>
</body>
</html>
