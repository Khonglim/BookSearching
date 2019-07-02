$(document).ready(function() {
    $("#btn-add").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/bookdelete',
            data: {
                shelf: $("#frmAddTask input[name=shelf]").val(),
                floor: $("#frmAddTask input[name=floor]").val(),
            },

            dataType: 'json',
            success: function(data) {
                $('#frmAddTask').trigger("reset");
                $("#frmAddTask .close").click();
                alert("ลบตู้สำเร็จ!!");
                window.location.reload();
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
    });
});

function addTaskForm() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#addTaskModal').modal('show');
    });
}

$(document).ready(function() {
    $("#btn-change").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var isChecked ;
        if ($("#checkBox").is(":checked")) {
            isChecked=1;
        } else {
            isChecked=0;
        }
        $.ajax({
            type: 'POST',
            url: '/categorych',
            data: {
                checkBox: isChecked,
                floor_id: $("#frmMain input[name=floor_id]").val(),
                shelf: $("#frmMain input[name=shelf]").val(),
                floor_id2: $("#frmMain select[name=floor_id2]").val(),
                shelf2: $("#frmMain input[name=shelf2]").val(),
                shelf3: $("#frmMain input[name=shelf3]").val(),
                floor_id3: $("#frmMain select[name=floor_id3]").val(),
                floor_id4: $("#frmMain select[name=floor_id4]").val(),
                shelf4: $("#frmMain input[name=shelf4]").val(),
                call_b: $("#frmMain input[name=call_b]").val(),


            },

            dataType: 'json',
            success: function(data) {
                $('#frmMain').trigger("reset");
                $("#frmMain .close").click();
                $("#divErrorMessages").empty();
                $("#showsseces").show();
            /* clear old results, then display the new results */
            $("#divResults").empty().append("บันทึกสำเร็จ");
            window.setTimeout(function(){location.reload()},3000)
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors2').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-task-errors2').append('<li>' + value + '</li>');
                });
                $("#add-error-bag2").show();
            }
        });
    });
});


function changeShelfForm() {
    $(document).ready(function() {
        $("#add-error-bag2").hide();
        $('#changeShelfModal').modal('show');
    });
}


$(function () {
    $("#checkBox").click(function () {
        if ($(this).is(":checked")) {
            $("#shelf2").attr("disabled", "disabled");
            $("#shelf2").val(" ");

            $("#floor_id2").attr("disabled", "disabled");
            $("#floor_id2").val(" ");

            $("#call_b").attr("disabled", "disabled");
            $("#call_b").val(" ");


            $("#shelf").attr("disabled", "disabled");
            $("#shelf").val(" ");

            $("#floor_id").attr("disabled", "disabled");
            $("#floor_id").val(" ");



            $("#cattalog").attr("disabled", "disabled");
            $("#cattalog").val(" ");



            $("#shelf3").removeAttr("disabled");
            $("#shelf3").focus();

            $("#floor_id3").removeAttr("disabled");
            $("#floor_id3").focus();

            $("#shelf4").removeAttr("disabled");
            $("#shelf4").focus();

            $("#floor_id4").removeAttr("disabled");
            $("#floor_id4").focus();
        } else {
            $("#shelf2").removeAttr("disabled");
            $("#shelf2").focus();

            $("#floor_id2").removeAttr("disabled");
            $("#floor_id2").focus();

            $("#call_b").removeAttr("disabled");
            $("#call_b").focus();

            $("#shelf").removeAttr("disabled");
            $("#shelf").focus();

            $("#floor_id").removeAttr("disabled");
            $("#floor_id").focus();

            $("#cattalog").removeAttr("disabled");
            $("#cattalog").focus();

            $("#floor_id3").attr("disabled", "disabled");
            $("#floor_id3").val(" ");

            $("#shelf3").attr("disabled", "disabled");
            $("#shelf3").val(" ");

            $("#floor_id4").attr("disabled", "disabled");
            $("#floor_id4").val(" ");

            $("#shelf4").attr("disabled", "disabled");
            $("#shelf4").val(" ");


        }
    });
});
function resutName(strCusName)
{
            frmMain.floor_id.value = strCusName.split("|")[0];
            frmMain.shelf.value = strCusName.split("|")[1];
            frmMain.call_b.value = strCusName.split("|")[2];


}
