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
</head>
<body class="hold-transition skin-purple  layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand">BookSearching</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"> <i class=" fa fa-folder-open"></i> รายการทั้งหมด <span class="sr-only">(current)</span></a></li>
            <li><a href="#"> <i class=" fa  fa-cubes "></i>   สืบค้นตามประเภท</a></li>
            <li><a href="#"> <i class=" fa  fa-users "></i>    สืบค้นตามผู้แต่ง</a></li>
            <li><a href="#"> <i class=" fa  fa-newspaper-o "></i> สืบค้นตามปีพิมพ์</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="content-wrapper">
    <div class="container">
      <section class="content-header">
        <h1>
          ค้นหาหนังสือบนชั้นวาง   คำที่คุณค้นหา  {{$k}}
        </h1>
      </section>
      <section class="content">
            <table id="example" class=" table table-hover table-striped">
                    <thead>
                            <tr>
                                <td class="col-md-1 text-center">#</td>
                                <td class="col-md-1"></td>
                                <td class="col-md-10">ชื่อเรื่อง</td>
                                <td>ตำแหน่ง</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $i=1; ?>
         @foreach ( $output as  $outputs)
         <?php  $e=explode("|",$outputs->call_number);
                       $cut=substr($e[1],1);
                       $c=explode(".", $cut);
         ?>
         @if (preg_match("/^[ก-๙]+$/", $outputs->best_author))
                      ok
            @endif
                 <tr>
                     <td >
                         {{$i++}}
                     </td>
                     <td>
                            <i class="fa fa-book fa-4x text-primary"></i>
                     </td>
                     <td>
                     <h4 class="media-heading">{{ $outputs->best_title}}</h4>
                            <strong>ผู้แต่ง</strong> :{{ $outputs->best_author}} <br/>
                            <strong>ปีที่พิมพ์ </strong>:{{ $outputs->publish_year}} <br>
                            <strong>หมวด </strong> :{{ $c[0]}}
                     </td>
                     <td>
                        <a  class="btn btn-primary btn-xs">     <i class="fa  fa-search-plus fa-4x " data-toggle="modal" data-target="#myModal{{ $outputs->id}}"  ></i> </a>
                            <div class="modal fade" id="myModal{{ $outputs->id}}" role="dialog">
                                <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                        <div class="modal-body">



                                                <a href="{{'locationShow/'.$c[0]}}" class="btn btn-primary btn-xs"><i class="fa fa-search"></i></a>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>

                                    </div>
                                  </div>

                     </td>
                 </tr>
         @endforeach

                    </tbody>
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
                    var users = $('#example').DataTable({
                        "dom": "t",
                        "scrollY":        "500px",
                        "scrollCollapse": true,
                         "paging":        false,


                    });
                    var x = document.getElementById("users").value;
                    $('#customSearchBox').ready(function(){
                        users.search(x).draw() ;
                    })
                } );

        </script>

</body>
</html>
