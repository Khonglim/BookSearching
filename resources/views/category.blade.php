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
  <link href="{{ asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('asset/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

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
                                  <br><br>
                                  <div class="form-group">
                                    <label for="floor">ภาษา:</label>
                                    <select class=" form-control" name="language" >
                                        <option value="" >--เลือกภาษา--</option>
                                        <option value="tha" >ภาษาไทย</option>
                                        <option value="eng" >ภาษาอังกฤษ</option>


                                      </select>
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

    <a href="#" class="btn btn-info"  data-toggle="modal" data-target="#myModal2">ย้ายหมวดไปชั้นอื่น</a>
    <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">ย้ายหมวดไปชั้นอื่น</h4>
                </div>
                <div class="modal-body">
                    <form class="form-inline" action="{{url('/categorych')}}" name="frmMain" method="GET" id="form-data" enctype="multipart/form-data" files="true">
                        @csrf
                        <select class="js-example-basic-single form-control" name="state"  OnChange="resutName(this.value);" id="cattalog" >
                          <option value="" >--เลือกหมวด--</option>
                          @foreach ($category as $item)
                          <option value="{{$item->floor_id}}|{{$item->shelf}}|{{$item->call_b}}"> {{$item->call_b}}</option>

                          @endforeach

                        </select>
                        <hr>
                        <div class="form-group">
                          <label for="floor">ชั้นเดิม:</label>
                          <input type="number" class="form-control" id="floor_id" name="floor_id" placeholder="ชั้น" required>
                        </div>
                        <div class="form-group">
                                <label for="floor">ตู้เดิม:</label>
                                <input type="number" class="form-control" id="shelf" name="shelf" placeholder="ตู้" required>
                              </div>
                              <div class="form-group">
                                    <label for="floor">หมวด:</label>
                                    <input type="text" class="form-control" id="call_b" name="call_b" placeholder="หมวด" required>
                                </div>
                                   <br><br>
                                  <div class="form-group">
                                        <label for="floor">ชั้นใหม่:</label>
                                        <input type="number" class="form-control" id="floor_id2" name="floor_id2" placeholder="ชั้น" required>
                                      </div>
                                      <div class="form-group">
                                              <label for="floor">ตู้ใหม่:</label>
                                              <input type="number" class="form-control" id="shelf2" name="shelf2" placeholder="ตู้" required>
                                            </div>
                                          <hr>
                                  <div class="checkbox">
                                        <label><input type="checkbox" value="1"   name="checkBox"  id="checkBox">กรณีย้ายทั้งตู้</label>
                                      </div>
                                      <br> <br>
                                      <div class="form-group">
                                        <label for="floor">ชั้นใหม่:</label>
                                        <input type="number" class="form-control" id="floor_id3" name="floor_id3" placeholder="ชั้น" required  disabled>
                                      </div>
                                      <div class="form-group">
                                              <label for="floor">ตู้ใหม่:</label>
                                              <input type="number" class="form-control" id="shelf3" name="shelf3" placeholder="ตู้" required   disabled>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
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

    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    </script>


<script language="JavaScript">
      function resutName(strCusName)
            {
                        frmMain.floor_id.value = strCusName.split("|")[0];
                        frmMain.shelf.value = strCusName.split("|")[1];
                        frmMain.call_b.value = strCusName.split("|")[2];


            }
</script>

<script type="text/javascript">
    $(function () {
        $("#checkBox").click(function () {
            if ($(this).is(":checked")) {
                $("#shelf2").attr("disabled", "disabled");
                $("#floor_id2").attr("disabled", "disabled");
                $("#call_b").attr("disabled", "disabled");
                $("#shelf").attr("disabled", "disabled");
                $("#floor_id").attr("disabled", "disabled");
                $("#cattalog").attr("disabled", "disabled");
                $("#shelf3").removeAttr("disabled");
                $("#shelf3").focus();

                $("#floor_id3").removeAttr("disabled");
                $("#floor_id3").focus();


            } else {
                $("#shelf2").removeAttr("disabled");
                $("#shelf2").focus();

                $("#floor_id2").removeAttr("disabled");
                $("#floor_id2").focus();

                $("#call_b").removeAttr("disabled");
                $("#call_b").focus();

                $("#shelf").removeAttr("disabled");
                $("#shelf").focus();

                $("#floor_id").removeAttr("disabled");
                $("#floor_id").focus();

                $("#cattalog").removeAttr("disabled");
                $("#cattalog").focus();

                $("#floor_id3").attr("disabled", "disabled");

                $("#shelf3").attr("disabled", "disabled");




            }
        });
    });
</script>

























</body>
</html>

