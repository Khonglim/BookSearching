<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BookSearching</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="expires" content="never" />
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('asset/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('asset/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('asset/dist/css/AdminLTE.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('asset/dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
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

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
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

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"> <i class=" fa fa-folder-open"></i> รายการทั้งหมด <span class="sr-only">(current)</span></a></li>
            <li><a href="#"> <i class=" fa  fa-cubes "></i>   สืบค้นตามประเภท</a></li>
            <li><a href="#"> <i class=" fa  fa-users "></i>    สืบค้นตามผู้แต่ง</a></li>
            <li><a href="#"> <i class=" fa  fa-newspaper-o "></i> สืบค้นตามปีพิมพ์</a></li>
          </ul>

        </div>

      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          ค้นหาหนังสือบนชั้นวาง

        </h1>
      <!--   <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol> -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title" >หอสมุดกลางยินดีตอนรับ</h3>
            </div>
            <div class="box-body">

                <div  ALIGN="center">
                    <img src="{{ asset('images/logo.jpg') }}" alt="">
                </div>


                      <form action="{{url('/bookshow')}} "method="POST" id="form-data" enctype="multipart/form-data" files="true">
                        @csrf
                        <div class="form-group">
                                <label for="usr">   </label>
                                <input type="text"  name="book" class="form-control" id="book" required  placeholder="">
                              </div>
                              <div  ALIGN="center">   <button type="submit" class="btn btn-primary">ค้นหา</button>  </div>
                      </form>

                </div>
                </div>

            </div>
            <!-- /.box-body -->
          </div>




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
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('asset/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('asset/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('asset/dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('asset/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('asset/easyAutocomplete-1.3.5/jquery.easy-autocomplete.js') }}"></script>
<script src="{{ asset('asset/easyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js') }}"></script>
<script  type="text/javascript">
      $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
    $('#example').DataTable( {
        "scrollY":        "500px",
        "scrollCollapse": true,
        "paging":         false,


    } );
</script>




</body>
</html>


