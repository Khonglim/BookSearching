<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<meta name="description" content="Drag and drop table content with JavaScript"/>
		<meta name="viewport" content="width=device-width, user-scalable=no"/><!-- "position: fixed" fix for Android 2.2+ -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/header.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/redips-drag-min.js')}}"></script>

		<title>เเก้ไขตู้หนังสือ</title>

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
	border: 1px solid navy;
	height: 25px;
	width: 11px;
	text-align: center;
	font-size: 10pt;
	padding: 2px;
}

/* drag object (DIV inside table cell) */
.redips-drag {
	margin: auto;
	text-align: center;
	width: 8px;
	height: 22px;
	line-height: 35px;
	border: 2px solid SteelBlue;*
	background-color: white;
}


.map
            {
                height:744px;
                width:1341px;
                 background-image:url('https://res.cloudinary.com/nio/image/upload/v1556548769/logo/map.jpg');
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


/* toggle checkboxes at the bottom */
.checkbox {
	margin-left: 13px;
	margin-right: 14px;
	width: 13px; /* needed for IE ?! */
}


/* message cell */
.message_line {
	padding-left: 10px;
	margin-bottom: 3px;
	font-size: 10pt;
	color: #888;
}
</style>
	</head>
	<body>
		<center>

		<div  class="map" id="MapBook" >
			<div id="redips-drag">
			<br><br><br><br><br><br><br>
				<table id="table1">
					<colgroup>
						<col width="11"/>
						<col width="11"/>
						<col width="11"/>
						<col width="11"/>
						<col width="11"/>
						<col width="11"/>
					</colgroup>
					<tbody>
						<tr>
						    <td colspan="20">

                            </td>
						    <td  >
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==1 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
						    <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==2 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
				        	<td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==3 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==4 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==5 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==6 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==7 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==8 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==9 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==10 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==11 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==12 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==13 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==14 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==15 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==16 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==17 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==18 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==19 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==20 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==21 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==22 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==23 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==24 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==25 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==26 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==27 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==28 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==29 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==30 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==31 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==32 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==33 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==34 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==35 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==36 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==37 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>
                            <td>
                                @foreach ($codewold as $codewolds )
                                @if($codewolds->row == 0 && $codewolds->cell ==38 )
                            <div  class="redips-drag t1" title="infinite cloning">e</div>
                            @endif
                            @endforeach
                            </td>





						</tr>
						<tr>
                            <td colspan="19"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>





						</tr>
						<tr>
                            <td colspan="17"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>








                        </tr>
                        <tr>
                            <td colspan="15"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>





                    </tr>
                    <tr>
                        <td colspan="13"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>





                </tr>
                <tr>
                    <td colspan="10"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>




            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    </tr>
                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            </tr>
					</tbody>
                </table>
     <br><br>


				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<table id="table3">
				<colgroup><col width="100"/></colgroup>
				<tr style="background-color: #eee">
					<td id="message" class="redips-mark" title="You can not drop here">Table3</td>
				<td><div id="d1" class="redips-drag t3 redips-clone" title="infinite cloning">e</div> </td>
				<td class="redips-trash" title="Trash">ลบ</td>
				</tr>



			</table>

			</div>






		</div>

        <input type="hidden" class="form-control" id="name" name="name"   value=" {{$b}}">
			<div><input type="button" value="Save2" class="button" onclick="save('json')" title="Send content to the server (it will only show accepted parameters)"/><span class="message_line">Save content of the first table (JSON format)</span></div>.

        </center>

        <script type="text/javascript">

		/*jslint white: true, browser: true, undef: true, nomen: true, eqeqeq: true, plusplus: false, bitwise: true, regexp: true, strict: true, newcap: true, immed: true, maxerr: 14 */
/*global window: false, REDIPS: true */

/* enable strict mode */
"use strict";

// define redips_init variable
var redipsInit;


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
		// append 'd' to the element text (Clone -> Cloned)
		//rd.obj.innerHTML += 'd';
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
	table_content = REDIPS.drag.saveContent('table1', type);
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
               floor:$('input[name=name]').val()


        },
		cache: false,
		success: function (data) {
		alert("Save successfully.. ");
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
