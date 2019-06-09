<!DOCTYPE html>
<html lang="th">
<head>
  <title>Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('images/favicon.jpg')}}" type="image/x-icon"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <style>
        body{
          font-family: 'Kanit', sans-serif;

        }
</style>
</head>
<body>

<div class="container">
  <div class="page-header">
    <h1>ขออภัยไม่พบข้อมูลในระบบ </h1>
  </div>

@if( $querys != '' )
<form action="{{url('/search')}}" method="PUT" role="search">
    <div class="input-group">
        <input type="hidden" class="form-control" name="q"  value="{{$querys}}">
            <button type="submit" class="btn btn-danger">
                ย้อนกลับ
            </button>

    </div>
</form>
@else
<a href="{{url('/')}}"  class="btn btn-danger">ย้อนกลับ</a>



@endif


</div>

</body>
</html>
