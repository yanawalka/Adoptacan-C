$(document).ready(function () {
  let nombre;
  let apellido;
  let dni;
  let celular;
  let domicilio;
  let email;
  let pass;

  $(".form-wrapper .button").click(function () {

    let opcion = 2;
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $(".steps li").eq(currentSectionIndex);
    nombre = $("#name").val();
    apellido = $("#apellido").val();
    dni = $("#dni").val();
    celular = $("#celular").val();
    domicilio = $("#domicilio").val();
    email = $("#email").val();
    pass = $("#password").val();
    passR = $("#passwordR").val();
    // nene = document.querySelector('input[name="nene"]:checked').value;
    // depa = document.querySelector('input[name="depa"]:checked').value;
    // perro = document.querySelector('input[name="perro"]:checked').value;
    // gato = document.querySelector('input[name="gato"]:checked').value;
    // guardian = document.querySelector('input[name="guardian"]:checked').value;

    $.ajax({
      url: "../bd/registroLogica.php",
      type: "POST",
      datatype: "json",
      data: {
        opcion: opcion,
        dni: dni,
        email: email,
      },
      success: function (response) {
        console.log(response);
        data = JSON.parse(response);
        if (
          pass === "" ||
          passR === "" ||
          nombre === "" ||
          email === "" ||
          dni === "" ||
          celular === "" ||
          domicilio === "" ||
          apellido === ""
        ) {
          Swal.fire({
            type: "warning",
            title: "Rellene todos los campos",
          });
        } else {
          if ((data === false) & (email !== "") & (dni !== "")) {
            if (pass === passR) {
              currentSection
                .removeClass("is-active")
                .next()
                .addClass("is-active");
              headerSection
                .removeClass("is-active")
                .next()
                .addClass("is-active");
            } else {
              Swal.fire({
                type: "warning",
                title: "las contraseñas deben coincidir",
              });
            }
          } else {
            Swal.fire({
              type: "warning",
              title: "El dni y/o email ya existen en la base de datos",
            });
          }
        }
      },
    });
    $(".form-wrapper").submit(function (e) {
      e.preventDefault();
    });

    // if (currentSectionIndex === 2) {
    //   $(document).find(".form-wrapper .section").first().addClass("is-active");
    //   $(document).find(".steps li").first().addClass("is-active");
    // }
  });

  $(".form-wrapper .botonInicio").click(function () {
    let opcion = 1;

    $.ajax({
      url: "../bd/registroLogica.php",
      type: "POST",
      datatype: "json",
      data: {
        opcion: opcion,
        nombre: nombre,
        apellido: apellido,
        dni: dni,
        celular: celular,
        domicilio: domicilio,
        email: email,
        pass: pass,
        // nene:nene,
        // depa:depa,
        // perro:perro,
        // gato:gato,
        // guardian:guardian
      },
      success: function () {
          Swal.fire({
            type: "success",
            title: "Su cuenta se creo con exito! Lo reenviaremos a la pagina de inicio",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Ingresar",
            })
        }
    });
  });
});
