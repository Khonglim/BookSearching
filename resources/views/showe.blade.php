












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Book KMUTNB</title>
        <style>
        .map
            {
                height:744px;
                width:1341px;
                 background-image:url('images/map.jpg');
                border: solid 1px #355681;

            }
            .book
            {
                height:52px;
                width:21px;
                background-image:url('images/bookcase.jpg');
                border: solid 1px #355681;
                margin:6px;
            }

        </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>
          <div class="collapse navbar-collapse" id="myNavbar">


          </div>
        </div>
      </nav>

<div class="container">
    <form >
        <div class="form-group">
            <button class="btn btn-success btn-submit">เพิ่ม</button>
        </div>
    </form>
    <div  class="map" id="MapBook" ></div>
<form action="{{url('/addXY')}}"  method="GET" >
    <div class="form-group">
            @foreach ($grocery as $item)
            <div id="{{$item->id}}" class="book"></div>
            <input type="text" name="position_id{{$item->id}}" id="id{{$item->id}}"    >
            <input type="text" id="x{{$item->id}}"    style="text-align:center" name="positionx{{$item->id}}"  >
            <input type="text" id="y{{$item->id}}"   style="text-align:center" name="positiony{{$item->id}}">

            @endforeach
        <button class="btn btn-success ">บันทึกตำแหน่ง</button>
    </div>


    </form>


    </div>
</body>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){
        e.preventDefault();
        var container = $(document.createElement('div')).css({
            height:'600px',
        width:'600px',
        background:'#E4E4E4',
        margin:'6px'
        });
        var positionX = $("input[name=positionX]").val();
        var positionY = $("input[name= positionY").val();

        $.ajax({
           type:'POST',
           url:'/ajaxRequest',
           data:{positionX:positionX, positionX:positionY},
           success:function(data){
            var g = document.createElement('div');
            g.id = data.id;
            g.setAttribute("class","book")

            $('body').after( g);
            window.location.reload();

           }
        });
	});

</script>
@foreach ($grocery as $item)
<script type="text/javascript">
    $(function(){
        function drag_me{{$item->id}}(name){
            $(name).css({
                position:"absolute",
                cursor:"grab",
                left:"{{$item->x}}px",
                top:"{{$item->y}}px"
            });
            $(name).mousedown(function(event){
                var locateX=event.pageX;
                var locateY=event.pageY;
                var obj_locateX=$(this).offset().left;
                var obj_locateY=$(this).offset().top;
                var diff_x=locateX-obj_locateX;
                var diff_y=locateY-obj_locateY;
                $(this).css("opacity",0.3).mousemove(function(event){
                    locateX=event.pageX;
                    locateY=event.pageY;
                    obj_locateX=$(this).offset().left;
                    obj_locateY=$(this).offset().top;
                    new_locateX=locateX-diff_x;
                    new_locateY=locateY-diff_y;

                    $(this).css({
                        left:new_locateX,
                        top:new_locateY
                    }).bind("mouseup mouseout",function(){
                        $(this).css("opacity",1);
                        $(this).unbind("mousemove");
                    });
                    if(new_locateX > 0){
                        $('#id{{$item->id}}').val({{$item->id}});
                    }

                    $('#x{{$item->id}}').val(new_locateX);
                    $('#y{{$item->id}}').val(new_locateY);
                });

            });
        }

    // การใช้งาน กำหนด selector วัตถุที่ต้องการ
    // ในตัวอย่างคือ div ที่มี id เท่ากับ myblock
    drag_me{{$item->id}}('#{{$item->id}}');
    });
    </script>


<script type="text/javascript">
    $(function(){
        function MapBook(name){
            $(name).css({
                position:"absolute",
                cursor:"grab",
                left:"74.60000228881836px",
                top:"162px"
            });

        }

    // การใช้งาน กำหนด selector วัตถุที่ต้องการ
    // ในตัวอย่างคือ div ที่มี id เท่ากับ myblock
    MapBook('#MapBook ');
    });
    </script>


@endforeach
<script >
        function disableselect(e){
        return false
        }

        function reEnable(){
        return true
        }

        //if IE4+
        document.onselectstart=new Function ("return false")

        //if NS6
        if (window.sidebar){
        document.onmousedown=disableselect
        document.onclick=reEnable
        }
        </script>


</html>

