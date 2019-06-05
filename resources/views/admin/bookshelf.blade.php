<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<meta name="description" content="Drag and drop table content with JavaScript"/>
		<meta name="viewport" content="width=device-width, user-scalable=no"/><!-- "position: fixed" fix for Android 2.2+ -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<title>ปรับตำแหน่งตู้หนังสือ</title>
		<style>
		/*

Darko Bunic
http://www.redips.net/
Apr, 2017.

*/

body {
	font-family: arial;
	margin: 0px;
}



/* table */
div#redips-drag table {

	border-collapse: collapse;
	margin: 7px;
}

/* table cells */
div#redips-drag td {
/*	border: 1px solid navy;*/
	height: 80px;
	width: 40px;
	text-align: center;
	font-size: 10pt;

}

/* drag object (DIV inside table cell) */
.redips-drag {
	margin: auto;
	text-align: center;
	width: 35px;
	height: 75px;
	line-height: 35px;
	border: 2px solid SteelBlue;*
	background-color: white;
}


.map
            {
                height:1080px;
                width: 1920px;
                 background-image:url('https://res.cloudinary.com/nio/image/upload/v1557385715/logo/map.jpg');
                border: solid 1px #355681;


            }

		/* "Click" button */
.button {
	margin-bottom: 2px;
	background-color: #6A93D4;
	color: white;
	border-width: 1px;
	width: 44px;
	padding: 0px;
}
.input {
    text-align: center;
}

/* toggle checkboxes at the bottom */

/* message cell */
.message_line {
	padding-left: 10px;
	margin-bottom: 3px;
	font-size: 10pt;
	color: #888;
}
p.indent{
    padding-left: 1em

    }
</style>
	</head>
	<body>
		<div  class="map" id="MapBook" >
                <div id="redips-drag">
                                @include('partials.book_delete')
                                <table id="table3">
                                        <colgroup><col width="100"/></colgroup>
                                        <tr style="background-color: #eee">
                                            <td><a href="{{url('/home')}}" class=" btn btn-primary">ย้อนกลับ</a></td>
                                            <td id="message" class="redips-mark" title="You can not drop here">Table3</td>
                                        <td><div id="d1" class="redips-drag t3 redips-clone" title="infinite cloning"> <input type="text" style="width: 31px"   class="input"     value="N"/>    </div> </td>
                                        <td></td>
                                        <td>
                                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">บันทึก</button>
                                        <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">ยืนยันการบันทึก</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                      <p>ต้องการบันทึก.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <input type="button" value="ใช่" class="btn btn-success" onclick="save('json')" />
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        </td>
                                        <td></td>
                                        <td>

                                            <input type=button value="รีเซตการวาง" class="btn btn-warning" onClick="javascript:location.reload();">


                                        </td>
                                        <td></td>
                                        <td>
                                                <a onclick="event.preventDefault();addTaskForm();" href="#" class="btn btn-danger" data-toggle="modal"> <span>ลบตู้</span></a>
                                        </td>
                                        <td></td>
                                        </tr>
                                    </table>




            <br><br><br><br>
           <input type="hidden" name="shelf"  >

				<table id="table1">
					<tbody>
                            <tr>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div> @endif @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div> @endif @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif  @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif  @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif  @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif  @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif  @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif  @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif  @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif  @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>


                                  </tr>


                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning"> <input type="text" style="width: 31px"   class="input" value="{{$bookshelfs->id_shelf}}"   readonly> </div>  @endif   @endforeach  </td>

                                  </tr>

					</tbody>
                </table>






			</div>






		</div>

              <input type="hidden" class="form-control" id="name" name="name"   value=" {{$b}}">
              <input type="hidden" class="form-control" id="name" name="language_code"   value="tha">

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <script type="text/javascript" src="{{asset('js/header.js')}}"></script>
              <script type="text/javascript" src="{{asset('js/redips-drag-min.js')}}"></script>
              <script type="text/javascript" src="{{asset('js/book.js')}}"></script>

        <script type="text/javascript">

		/*jslint white: true, browser: true, undef: true, nomen: true, eqeqeq: true, plusplus: false, bitwise: true, regexp: true, strict: true, newcap: true, immed: true, maxerr: 14 */
/*global window: false, REDIPS: true */

/* enable strict mode */
"use strict";

// define redips_init variable
var redipsInit


// redips initialization
redipsInit = function () {
	// reference to the REDIPS.drag library and message line
	var	rd = REDIPS.drag,
		msg = document.getElementById('message');
	// how to display disabled elements
	rd.style.borderDisabled = 'solid';	// border style for disabled element will not be changed (default is dotted)
	rd.style.opacityDisabled = 60;		// disabled elements will have opacity effect
	// initialization
	rd.init();
	// only "smile" can be placed to the marked cell
	rd.mark.exception.d8 = 'smile';
	// prepare handlers
	rd.event.clicked = function () {
		msg.innerHTML = 'Clicked';
	};
	rd.event.dblClicked = function () {
		msg.innerHTML = 'Dblclicked';
	};
	rd.event.moved  = function () {
		msg.innerHTML = 'Moved';
	};
	rd.event.notMoved = function () {
		msg.innerHTML = 'Not moved';
	};
	rd.event.dropped = function () {
		msg.innerHTML = 'Dropped';
	};
	rd.event.switched = function () {
		msg.innerHTML = 'Switched';
	};
	rd.event.clonedEnd1 = function () {
		msg.innerHTML = 'Cloned end1';
	};
	rd.event.clonedEnd2 = function () {
		msg.innerHTML = 'Cloned end2';
	};
	rd.event.notCloned = function () {
		msg.innerHTML = 'Not cloned';
	};
	rd.event.deleted = function (cloned) {
		// if cloned element is directly moved to the trash
		if (cloned) {
			// set id of original element (read from redips property)
			// var id_original = rd.obj.redips.id_original;
			msg.innerHTML = 'Deleted (c)';
		}
		else {
			msg.innerHTML = 'Deleted';
		}
	};
	rd.event.undeleted = function () {
		msg.innerHTML = 'Undeleted';
	};
	rd.event.cloned = function () {
		// display message
		msg.innerHTML = 'Cloned';

	};
	rd.event.changed = function () {
		// get target and source position (method returns positions as array)
		var pos = rd.getPosition();
		// display current row and current cell
		msg.innerHTML = 'Changed: ' + pos[1] + ' ' + pos[2];
	};


};


// toggles trash_ask parameter defined at the top
function toggleConfirm(chk) {
	if (chk.checked === true) {
		REDIPS.drag.trash.question = 'Are you sure you want to delete DIV element?';
	}
	else {
		REDIPS.drag.trash.question = null;
	}
}


// toggles delete_cloned parameter defined at the top
function toggleDeleteCloned(chk) {
	REDIPS.drag.clone.drop = !chk.checked;
}


// enables / disables dragging
function toggleDragging(chk) {
	REDIPS.drag.enableDrag(chk.checked);
}


// function sets drop_option parameter defined at the top
function setMode(radioButton) {
	REDIPS.drag.dropMode = radioButton.value;
}


// show prepared content for saving
function save(type) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	// define table_content variable
	var table_content;
	// prepare table content of first table in JSON format or as plain query string (depends on value of "type" variable)
	table_content = table_content = mySaveContent('table1', type);
	// if content doesn't exist
	if (!table_content) {
		alert('Table is empty!');
	}
	// display query string
	else if (type === 'json') {

	$.ajax({
		type: 'POST',
		url: '/bookshelf',
		data: {table_contents:table_content,
               floor:$('input[name=name]').val(),
               language_code:$('input[name=language_code]').val()


        },
		cache: false,
		success: function (data) {
        alert("บันทึกเสร็จสมบูรณ์");
        location.reload();
        },
        error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-task-errors').append('<li>' + value + '</li>');
                });
                $("#add-error-bag").show();
            }
	});
		//window.open('/my/multiple-parameters-json.php?p=' + table_content, 'Mypop', 'width=350,height=260,scrollbars=yes');
		//window.open('multiple-parameters-json.php?p=' + table_content, 'Mypop', 'width=360,height=260,scrollbars=yes');
	}
	else {
		//window.open('/my/multiple-parameters.php?' + table_content, 'Mypop', 'width=350,height=160,scrollbars=yes');
		window.open('multiple-parameters.php?' + table_content, 'Mypop', 'width=360,height=260,scrollbars=yes');
	}
}


function mySaveContent (tbl, type) {
    var query = '',      // define query parameter
        tbl_start,       // table loop starts from tbl_start parameter
        tbl_end,         // table loop ends on tbl_end parameter
        tbl_rows,        // number of table rows
        cells,           // number of cells in the current row
        tbl_cell,        // reference to the table cell
        cn,              // reference to the child node
        id, r, c, d, i,  // variables used in for loops
        inputField,      // input field reference inside DIV element
        JSONarray,       // array of values for JSON object
        JSONobj = [],    // prepare JSON object
        pname = REDIPS.drag.saveParamName; // set parameter name (default is 'p')
    // if input parameter is string, then set reference to the table
    if (typeof(tbl) === 'string') {
        tbl = document.getElementById(tbl);
    }
    // tbl should be reference to the TABLE object
    if (tbl !== undefined && typeof(tbl) === 'object' && tbl.nodeName === 'TABLE') {
        // define number of table rows
        tbl_rows = tbl.rows.length;
        // iterate through each table row
        for (r = 0; r < tbl_rows; r++) {
            // set the number of cells in the current row
            cells = tbl.rows[r].cells.length;
            // iterate through each table cell
            for (c = 0; c < cells; c++) {
                // set reference to the table cell
                tbl_cell = tbl.rows[r].cells[c];
                // if cells is not empty (no matter is it allowed or denied table cell)
                if (tbl_cell.childNodes.length > 0) {
                    // cell can contain many DIV elements
                    for (d = 0; d < tbl_cell.childNodes.length; d++) {
                        // set reference to the child node
                        cn = tbl_cell.childNodes[d];
                        // childNode should be DIV with containing drag class name
                        // and yes, it should be uppercase
                        if (cn.nodeName === 'DIV' && cn.className.indexOf('drag') > -1) {
                            // prepare query string
                            query += pname + '[]=' + cn.id + '_' + r + '_' + c;
                            // initialize JSONarray array
                            JSONarray = [cn.id, r, c];
                            // try to find input elements inside DIV element
                            inputField = cn.getElementsByTagName('input');
                            // loop goes through all found input elements
                            for (i = 0; i < inputField.length; i++) {
                                query += '_' + inputField[i].value;
                                JSONarray.push(inputField[i].value);
                            }
                            // add '&' to the data set
                            query += '&';
                            // push values for DIV element as Array to the Array
                            JSONobj.push(JSONarray);
                        }
                    }
                }
            }
        }
        // prepare query string in JSON format (only if array is not empty)
        if (type === 'json' && JSONobj.length > 0) {
            query = JSON.stringify(JSONobj);
        }
        else {
            // cut last '&' from query string
            query = query.substring(0, query.length - 1);
        }
    }
    // return prepared parameters (if tables are empty, returned value could be empty too)
    return query;
};





























// add onload event listener
if (window.addEventListener) {
	window.addEventListener('load', redipsInit, false);
}
else if (window.attachEvent) {
	window.attachEvent('onload', redipsInit);
}














		</script>
	</body>
</html>
