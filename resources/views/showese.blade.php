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
<style>
.map
{
height:744px;
width:1341px;
background-image:url('images/map.jpg');
border: solid 1px #355681;
margin-left: -200px;
}
</style>
<style type="text/css">
    html,body{
        height:100%;
        margin:0;
        padding:0;
    }
    /* กำหนด css ของส่วนที่ใช้เป็น loading */
    div#loadPage{
        position:fixed;
        margin:auto;
        left:0;
        top:0;
        width:100%;
        height:100%;
        color:#FFF;
        background-color:#000;
        z-index:500;
        text-align:center;
    }
    </style>



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
<body class="hold-transition skin-purple  layout-top-nav">
        <div id="overlay"></div>
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{url('/')}}" class="navbar-brand">BookSearching</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"> <i class=" fa fa-folder-open"></i> รายการทั้งหมด <span class="sr-only">(current)</span></a></li>
            <li><a href="#"> <i class=" fa  fa-newspaper-o "></i> สืบค้นตามปีพิมพ์</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="content-wrapper">
    <div class="container">
        <br>
    <a href="{{url('/')}}" class="btn btn-primary"  >ย้อนกลับ</a>
      <section class="content-header">
        <h1>
          ค้นหาหนังสือบนชั้นวาง   คำที่คุณค้นหา  {{$k}}
        </h1>
      </section>
      <section class="content">
        <table id="category" class=" table table-hover table-striped">
            <thead>
            <tr>
              <th>ชื่อหนังสือ</th>
              <th>ผู้แต่ง</th>
              <th>ตำแหน่ง</th>
            </thead>





          </table>

                      <input type="hidden" class="form-control" id="customSearchBox" placeholder="Search book..."   >
                      <input type="hidden" class="form-control" id="users" placeholder="Search book..."   value="{{$k}}" >

        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2019 <a href="https://adminlte.io">โปรเจกนักศึกษา</a>.</strong> KMUTNB
    </div>
  </footer>
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
        $(document).ready(function() {
                    var users = $('#category').DataTable({

                        "processing": true,
                        "serverSide": true,
                        "ajax": {
                                  "url":"<?= route('bookapi') ?>",
                                  "dataType":"json",
                                  "type":"POST",
                                  "data":{"_token":"<?= csrf_token() ?>"}
                                },
                        "columns":[
                                {"data":"best_title"},
                                {"data":"best_author"},

                                //{"data": 'action', name: 'action', orderable: false, searchable: false}
                            ]});
                    var x = document.getElementById("users").value;
                    $('#customSearchBox').ready(function(){
                        users.search(x).draw() ;
                    })
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
