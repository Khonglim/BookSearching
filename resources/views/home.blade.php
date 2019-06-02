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

                        <img src="{{asset('/images/icon.jpg')}}" class="img-circle" alt="User Image"   width="20px"  height="20px">
                  <span class="hidden-xs">admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('/images/icon.jpg')}}" class="img-circle" alt="User Image">


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
                    <li><a href="{{url('/updatedata')}}"><i class="fa  fa-cloud-download"></i> <span>อัพเดทฐานข้อมูล</span></a></li>
            </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        การจัดการชั้น
        <small>ยินดีต้อนรับ</small>
      </h1>
      @if(Session::has('flash_message') )

      <div class="alert alert-success d-flex align-items-center">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {!! session('flash_message') !!}
        </div>
      @endif
    </section>
    <section class="content container-fluid">
   <div class="box box-info">
    <div class="box-header with-border">
    <a href="#" class="btn btn-success"  data-toggle="modal" data-target="#myModal">เพิ่มชั้น</a>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">เพิ่มชั้น</h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" action="{{url('/shelfchange')}}"  method="POST" id="form-data" enctype="multipart/form-data" files="true">
                    @csrf
                    <div class="form-group">
                      <label for="floor">ชั้น</label>
                      <input type="number" class="form-control" id="floor" name="floor" placeholder="1" required>
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
        <table id="table1" class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชั้น</th>
                    <th>จำนวนตู้ทั้งหมด</th>
                    <th>เพิ่มเติม</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($code as $codewolds)
                        <tr>
                            <td>#</td>
                            <td>
                                {{$codewolds->floor_id}}
                            </td>
                            <td>
                                {{$codewolds->shelf_all}} ตู้
                            </td>
                            <td>
                                <a href="{{url('editBook/'.$codewolds->floor_id)}}"  class="btn btn-warning btn-xs"><i  class="fa fa-map"  width="15px"></i> แผนที่</a>
                                    <a href="#" data-toggle="modal" data-target="#edit{{$codewolds->id}}" class="btn btn-info btn-xs"><i  class="fa fa-pencil"  width="15px"></i> แก้ไข</a>
                                    <div id="edit{{$codewolds->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">แก้ไข</h4>
                                                </div>
                                                <div class="modal-body">
                                                        {{Form::open(['route'=>['shelfchange.update',$codewolds->id],'method'=>'PUT','files' => true])}}
                                                        @csrf

                                                        <div class="form-group">
                                                          <label for="floor">ชั้น</label>
                                                          <input type="number" class="form-control" id="floor" name="floor" placeholder="1" required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="submit" class="btn btn-success">บันทึก</button>
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                                </div>
                                              </div>
                                              {{ Form::close() }}
                                            </div>
                                          </div>
                                    <a href="#" class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#Dealer2{{$codewolds->id}}"><i class="fa fa-trash" width="15px"></i> ลบ</a>
                                    <div id="Dealer2{{$codewolds->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">เพิ่มชั้น</h4>
                                                </div>
                                                <div class="modal-body">
                                                        {{ Form::open(['route' => ['shelfchange.destroy',$codewolds->floor_id, 'method' => "DELETE"] ]) }}
                                                        <input type="hidden" name="_method" value="delete" />
                                                      <p>คุณต้องการลบใช่หรือไม่!!!!</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="summit" class="btn btn-danger">ลบ</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                        {{ Form::close() }}
                                                      </div>
                                              </div>

                                            </div>
                                          </div>

                                          <a href="#" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#de{{$codewolds->id}}"><i class="fa fa-bomb">ลบตู้หนังสือ</i></a>
                                          <div id="de{{$codewolds->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">ลบตู้หนังสือชั้น {{$codewolds->floor_id}}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-inline" action="{{url('/shelfchange/de')}}"  method="POST" id="form-data" enctype="multipart/form-data" files="true">
                                                        @csrf
                                                        <div class="form-group">
                                                          <label for="floor">เลขตู้</label>
                                                          <input type="number" class="form-control" id="shelf" name="shelf" placeholder="1" required>
                                                        <input type="hidden" name="floor"   value="{{$codewolds->floor_id}}">
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="submit" class="btn btn-success">บันทึก</button>
                                                </form>
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

                                                </div>
                                              </div>

                                            </div>
                                          </div>


                        </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">

      </div>
      <!-- /.box-footer -->

  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">BookSearching</a>.</strong> All rights reserved.
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
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




</body>
</html>
