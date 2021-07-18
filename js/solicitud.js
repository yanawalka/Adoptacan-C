$(document).ready(function () {
  console.log(idP,idH);
  idP=idP;
  idH=idH;
  $(".form-wrapper .button").click(function () {

    var button = $(this);
    var currentSection = button.parents("#seccion");
    var currentSectionIndex = currentSection.index();
    var headerSection = $(".steps li").eq(currentSectionIndex);

    razon = $.trim($("#razon").val());
    check = $("#check")[0].checked;
    nene = document.querySelector('input[name="nene"]:checked').value;
    depa = document.querySelector('input[name="depa"]:checked').value;
    perro = document.querySelector('input[name="perro"]:checked').value;
    gato = document.querySelector('input[name="gato"]:checked').value;
    guardian = document.querySelector('input[name="guardian"]:checked').value;

    if (razon.length == "" || check == false) {
      Swal.fire({
        type: "warning",
        title: "Rellene todos los campos y acepte terminos y condiciones",
      });
    } else {
      currentSection.removeClass("is-active").next().addClass("is-active");
      headerSection.removeClass("is-active").next().addClass("is-active");
    }

  });

  $(".form-wrapper .botonInicio").click(function () {


    $.ajax({
      url: "../bd/solicitud.php",
      type: "POST",
      datatype: "json",
      data: {
        idH:idH,
        idP:idP,
        nene:nene,
        depa:depa,
        perro:perro,
        gato:gato,
        guardian:guardian,
        razon:razon,
        check:check
      },
      success: function (response) {
        console.log(response)
        // Swal.fire({
        //   type: "success",
        //   title: "Su cuenta se creo con exito! Lo reenviaremos a la pagina de inicio",
        //   confirmButtonColor: "#3085d6",
        //   confirmButtonText: "Ingresar",
        // })
        
      }
    });
  });
});

