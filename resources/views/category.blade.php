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

  <style type="text/css">
    html,body {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
    }
    #overlay {
        position: absolute;
        top: 0px;
        left: 0px;
        background: #ccc;
        width: 100%;
        height: 100%;
        opacity: .75;
        filter: alpha(opacity=75);
        -moz-opacity: .75;
        z-index: 999;
        background: #fff url(images/loading.gif) 50% 50% no-repeat;
    }
    .main-contain{
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    </style>







</head>
<body class="hold-transition skin-blue sidebar-mini" >
        <div id="overlay"></div>
<div class="wrapper">
    <header class="main-header">
        <a href="{{url('/home')}}" class="logo">
          <span class="logo-mini"><b>A</b>LT</span>
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

                      <span class="hidden-xs">admin</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">


                      </li>
                      <!-- Menu Body -->

                      <!-- Menu Footer-->
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

            </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        การจัดการหมวด

      </h1>
      @if(Session::has('flash_message') )
      <div class="alert alert-success d-flex align-items-center"> {!! session('flash_message') !!}</div>
      @endif
    </section>
    <section class="content container-fluid">
   <div class="box box-info">
    <div class="box-header with-border">
    <a href="#" class="btn btn-success"  data-toggle="modal" data-target="#myModal">เพิ่มหมวด</a>
    <a href="#" class="btn btn-info"  data-toggle="modal" data-target="#myModal">ย้ายหมวดไปชั้นอื่น</a>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">เพิ่มหมวด</h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" action="{{url('/category')}}"  method="POST" id="form-data" enctype="multipart/form-data" files="true">
                    @csrf
                    <div class="form-group">
                      <label for="floor">ชั้น:</label>
                      <input type="number" class="form-control" id="floor" name="floor_id" placeholder="ชั้น" required>
                    </div>
                    <div class="form-group">
                            <label for="floor">ตู้:</label>
                            <input type="number" class="form-control" id="floor" name="shelf" placeholder="ตู้" required>
                          </div>
                          <div class="form-group">
                                <label for="floor">หมวด:</label>
                                <input type="text" class="form-control" id="floor" name="call_b" placeholder="หมวด" required>
                              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">บันทึก</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>



      <div class="box-body">
        <div class="box-body table-responsive no-padding">
            <table id="category" class=" table table-hover table-striped">
                    <thead>
                    <tr>
                      <th>ไอดี</th>
                      <th>ชั้น</th>
                      <th>ตู้</th>
                      <th>หมวด</th>
                      <th>เพิ่มเติม</th>
                    </tr>
                    </thead>





                  </table>

    </div>
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
    $('#category').DataTable( {

        "processing": true,
        "serverSide": true,
        "ajax": {
            "url":"<?= route('dataProcessing') ?>",
            "dataType":"json",
            "type":"POST",
            "data":{"_token":"<?= csrf_token() ?>"}
        },
        "columns":[
            {"data":"id"},
            {"data":"floor_id"},
            {"data":"shelf"},
            {"data":"call_b"},
            {"data":"action","searchable":false,"orderable":false}
        ]
    } );
</script>
  <script type="text/javascript">
    $(function(){
        $("#overlay").fadeOut();
        $(".main-contain").removeClass("main-contain");
    });
    </script>




</body>
</html>

