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
  <style>
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
          <li ><a href="{{url('/')}}"> <i class=" fa fa-folder-open"></i> รายการหนังสือทั้งหมด<span class="sr-only">(current)</span></a></li>

          </ul>

        </div>

      </div>
    </nav>
  </header>
  <div class="content-wrapper">
    <div class="container">
      <section class="content-header">
        <h1>
          ค้นหาตู้หนังสือ

        </h1>
      </section>
      <section class="content">
                      <form action="{{url('/search')}}" method="PUT" role="search">

                        <div class="input-group">
                            <input type="text" class="form-control" name="q"   placeholder="ค้นหาหนังสือ"> <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <br>
                    <div class="row">
                    @if(isset($pagination))

                      @foreach ($pagination as $books)


                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="info-box" data-toggle="tooltip" title="{{ $books->best_title }}">
                                <span class="info-box-icon bg-purple"><i class="fa fa fa-book " ></i></span>

                                <div class="info-box-content">
                                <span class="info-box-text"><b> ชื่อหนังสือ:  </b>{{ $books->best_title }} </span>
                                <span class="info-box-text"><b> ผู้แต่ง:  </b>{{$books->best_author}}
                                </span>

                                    <form  action="{{url('/locationShow')}}"  method="PUT" id="form-data" >

                                                <input type="hidden" name="callno" value="{{$books->callno}}">
                                                <input type="hidden" name="best_title" value="{{$books->best_title}}">
                                                <input type="hidden" name="language_code" value="{{$books->language_code}}">

                                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa  fa-map"></i> คลิก ดูตำแหน่ง</button>
                                    </form>




                                <span class="info-box-text"><b> สถานะ:</b>
                                @if($books->item_status_code == '-')

                                   อยู่ในตู้
                                 @else

                                 ไม่ได้อยู่ในตู้

                                 @endif



                                </span>



                                 </div>
                              </div>
                            </div>


                     @endforeach
                    </div>

                  {{ $pagination->links() }}


                  @endif

                  <div class="container">
                        @if(isset($details))
                        <p> คำที่คุณค้นหา <b> {{ $query }} </b> ผลลัพธ์ :</p>
                        @foreach ($details as $books)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box" data-toggle="tooltip" title="{{ $books->best_title }}">
                            <span class="info-box-icon bg-purple"><i class="fa fa fa-book " ></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text"><b> ชื่อหนังสือ:  </b>{{ $books->best_title }} </span>
                             <span class="info-box-text"><b> ผู้แต่ง:  </b>{{$books->best_author}}
                            </span>


                        <form  action="{{url('/locationShow')}}"  method="PUT" id="form-data" >

                                    <input type="hidden" name="callno" value="{{$books->callno}}">
                                    <input type="hidden" name="best_title" value="{{$books->best_title}}">
                                    <input type="hidden" name="language_code" value="{{$books->language_code}}">
                                    <input type="hidden" name="query11" value="{{ $query }}">
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa  fa-map"></i> คลิก ดูตำแหน่ง</button>
                        </form>
                             <span class="info-box-text"><b> สถานะ:</b>
                                @if($books->item_status_code == '-')

                                   อยู่ในตู้
                                 @else

                                 ไม่ได้อยู่ในตู้

                                 @endif



                                </span>
                             </div>
                          </div>
                        </div>
                 @endforeach
                 <div class="col-md-6 col-sm-4 col-xs-12">
                        @if($details){!! $details->render() !!}

                 </div>


                        @endif
                        @elseif(isset($message))
                        <p> คำที่คุณค้นหา <b> {{ $query }} </b> ผลลัพธ์ :</p>
                        <p>{{ $message }}</p>
                        @endif
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
      <strong>Copyright &copy; 2018 <a href="">Student project</a>.</strong> KMUTNB
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
<script type="text/javascript">
    $(function(){
        $("#overlay").fadeOut();
        $(".main-contain").removeClass("main-contain");
    });
    </script>


<script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
        </script>

</body>
</html>


