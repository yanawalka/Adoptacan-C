$('#formLogin').submit(function (e) {

  e.preventDefault();
  var usuario = $.trim($("#usuario").val());
  var clave = $.trim($("#clave").val());


  if (usuario.length == "" || clave == "") {
    Swal.fire({
      type: 'warning',
      title: 'Ingrese Usuario y/o clave',
    });
    return false;
  } else {

    $.ajax({
      url: "../bd/sesionIn.php",
      type: "POST",
      datatype: "json",
      data: { usuario: usuario, clave: clave },
      success: function (data) {

        data = JSON.parse(data);


        if (data === false) {

          Swal.fire({
            type: 'error',
            title: 'Usuario y/o clave incorrectas',
            
          });
          window.location.href = "../sesion.php" 
        } else {
          Swal.fire({
            type: 'success',
            title: '¡Conexión exitosa!',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ingresar'
          }).then((data) => {
            if (data.value) {
                window.location.href = "../index.php";                          
            }
          })
        }
      }
    });
  }
})