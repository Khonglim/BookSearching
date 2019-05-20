<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<meta name="description" content="Drag and drop table content with JavaScript"/>
		<meta name="viewport" content="width=device-width, user-scalable=no"/><!-- "position: fixed" fix for Android 2.2+ -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


          <script type="text/javascript" src="{{asset('js/header.1.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/redips-drag-min.js')}}"></script>

		<title>แสดงตู้หนังสือ</title>

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
            <br><br><br><br><br><br><br><br>



				<table id="table1">

					<tbody>
                            <tr>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                              <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 0 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>


                                  </tr>


                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 1 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 2 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 3 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 4 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 5 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>


                                  </tr>
                                  <tr>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==0 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==1 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==2 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==3 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==4 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==5 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==6 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==7 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==8 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==9 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==10 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==11 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==12 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==13 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==14 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==15 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==16 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==17 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==18 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==19 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==20 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==21 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==22 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==23 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==24 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==25 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==26 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==27 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==28 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==29 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==30 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==31 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==32 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==33 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==34 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==35 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==36 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==37 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==38 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==39 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==40 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==41 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==42 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==43 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==44 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==45 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==46 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==47 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==48 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==49 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>
                                    <td> @foreach ($bookshelf as $bookshelfs ) @if($bookshelfs->row == 6 && $bookshelfs->cell ==50 ) <div  class="redips-drag t1" title="infinite cloning">{{	$bookshelfs->id_shelf}}</div>  @endif   @endforeach  </td>

                                  </tr>

					</tbody>
                </table>






			</div>






		</div>






	</body>
</html>
