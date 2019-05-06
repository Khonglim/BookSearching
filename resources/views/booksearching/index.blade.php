<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
    <a href="javascript:void(0);" class="reorder_link" id="saveReorder">เปลี่ยนต่ำแหน่ง</a>
    <div id="reorderHelper" class="light_box" style="display:none;">1. Drag photos to reorder.<br>2. Click 'Save Reordering' when finished.</div>
    <div class="">


                    <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                 <ul class=" reorder-photos-list">
                                        @if(!empty($codewold))
                                                @foreach ($codewold as$codewolds )

                                                <li id="image_li_{{$codewolds->id}}" class="ui-sortable-handle">
                                                        <a href="javascript:void(0);" style="float:none;" class="image_link">
                                                            <img src="images/{{$codewolds->file_name}}" alt="">

                                                        </a>

                                                    </li>
                                                @endforeach
                                          
                                        @endif
                                </ul>
                                <td>Doe</td>
                                <td>john@example.com</td>
                              </tr>
                              <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                              </tr>
                              <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                              </tr>
                            </tbody>
                          </table>


        </table>

    </div>
</div>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
$(document).ready(function(){

    $('.reorder_link').on('click',function(){
        $("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
        $('.reorder_link').html('save reordering');
        $('.reorder_link').attr("id","saveReorder");
        $('#reorderHelper').slideDown('slow');
        $('.image_link').attr("href","javascript:void(0);");
        $('.image_link').css("cursor","move");

        $("#saveReorder").click(function( e ){
            if( !$("#saveReorder i").length ){
                $(this).html('').prepend('<img src="images/refresh-animated.gif"/>');
                $("ul.reorder-photos-list").sortable('destroy');
                $("#reorderHelper").html("Reordering Photos - This could take a moment. Please don't navigate away from this page.").removeClass('light_box').addClass('notice notice_error');

                var h = [];
                $("ul.reorder-photos-list li").each(function() {
                    h.push($(this).attr('id').substr(9));
                });

                $.ajax({
                    type: "POST",
                    url: "/codexworld",
                    data: {ids: " " + h + " "},
                    success: function(){
                        window.location.reload();
                    }
                });
                return false;
            }
            e.preventDefault();
        });
    });
});
</script>
</body>
</html>
