$(document).ready(function () {

    $.ajax({
        url:'consTarjeta.php',
        method:"POST",
        data:{
            numero:20,
        }
    }).done(function(response){
        // alert(response);
    })










})