

$("#insert_button").click(function(){
    iname=$("#iname").val();
    ibirthdate=$("#ibirthdate").val();
    iemail=$("#iemail").val();

    requestData = {
        iname: iname,
        ibirthdate: ibirthdate,
        iemail: iemail
    };

    $.ajax({
        type: "POST",
        url: "backend/insert.php",
        data: JSON.stringify(requestData),
        dataType: "json",
        contentType: "application/json;charset=utf-8",
        success: function(data) {

            alert(data[0]);
            window.location.href="";

        },
        error: function(error) {
            console.error("Error:", error);
        }
    });

});

$(".update_button").click(function(){
    uname=$("#uname").val();
    ubirthdate=$("#ubirthdate").val();
    uemail=$("#uemail").val();

    $.ajax({
        type: "POST",
        url: "backend/update.php",
        data: JSON.stringify({
            personid:personid,
            uname: uname,
            ubirthdate: ubirthdate,
            uemail: uemail
        }),
        dataType: "json",
        contentType: "application/json;charset=utf-8",
        success: function(data) {
            alert(data[0]);
            window.location.href="";
        },
        error: function(error) {
            console.error("Error:", error);
        }
    });

});



$('.delete_button').click(function(){
    personid = $(this).attr('id');
    if (confirm("Are you sure you want to delete?") == false) {
        return false;
    }

    $.ajax({
        type: "POST",
        url: "backend/delete.php",
        data: JSON.stringify({personid:personid}),
        dataType: "json",
        contentType: "application/json;charset=utf-8",
        success: function(data) {
            alert(data[0]);
            window.location.href="";
        },
        error: function(error) {
            console.error("Error:", error);
        }
    });
})

$('.edit_button').click(function(){
    personid = $(this).attr('id');
    $('#uname').val($(this).attr("name1"));
    $('#ubirthdate').val($(this).attr("birthdate"));
    $('#uemail').val($(this).attr("email"));
})


