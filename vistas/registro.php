<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body >

    <div class="container">
        <div class="wrapper">
            <ul class="steps">
                <li class="is-active">Paso 1</li>
                <li>Paso 2</li>
            </ul>
            <form class="form-wrapper">
                <fieldset class="section is-active">
                    <h3 class=" titulos mt-5">Datos Generales</h3>
                    <h6 class="subtitulo text-secondary">Estos datos te van a servir para iniciar sesion y verificar el
                        estado de tu tramite.. ACORDATELOS!!</h6>
                    <div class="mt-5">
                        <input class="inputN" type="text" name="name" id="name" placeholder="Nombre">
                        <input class="inputN" type="text" name="apellido" id="apellido" placeholder="Apellido">
                        <input class="inputN" type="text" name="dni" id="dni" placeholder="D.N.I">
                        <input class="inputN" type="text" name="email" id="email" placeholder="Email">
                        <input class="inputN" type="text" name="domicilio" id="domicilio" placeholder="Domicilio">
                        <input class="inputN w-50 border-0 bg-light" type="number" name="celular" id="celular" placeholder="Celular">
                        <input class="inputN" type="password" name="password" id="password" placeholder="Contraseña" minlength="5">
                        <input class="inputN" type="password" name="passwordR" id="passwordR" placeholder="Repita contraseña" minlength="5">


                        <div class="button">Next</div>
                    </div>
                </fieldset>

                <fieldset class="section">
                <div class="registroCentrado">
                    <h3 class="titulos ">Ya casi terminamos</h3>
                    <h5 class="mb-1 text-secondary ">Todos tus datos fueron correctos</h5>
                    <h6 class="mb-5 text-secondary ">Para crear la cuenta presiona en el boton!</h6>
                    <h6 class="mb-5 text-secondary ">Te redireccionara a la pantalla principal</h6>
                    <a class="btn btn-danger botonInicio" id="botonInicio" href="../index.php">Crear cuenta</a>
                </div>
                </fieldset>


                <!-- <fieldset class="section">
                    <h3 class="titulos">Datos habitacionales</h3>
                    <h6 class="subtitulo text-secondary mb-5">Estos datos son importantes para nosotros ya que con ellos
                        vamos a buscar a la mascota que mejor se adapte a vos!!</h6>

                    <div class="row cf mt-4">
                        <h5 class="text-muted mb-4">Posee niños?</h5>
                        <div class="four col">
                            <input type="radio" value="si" name="nene" id="nene1" checked><label for="nene1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" value="no" name="nene" id="nene2"><label for="nene2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>

                    <div class="row cf mt-2">
                        <h5 class="text-muted mb-4">Vive en departamento?</h5>
                        <div class="four col">
                            <input type="radio" name="depa" value="si" id="depa1" checked><label for="depa1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" name="depa" value="no" id="depa2"><label for="depa2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>

                    <div class="row cf mt-2">
                        <h5 class="text-muted mb-4">Tiene otros perros?</h5>
                        <div class="four col">
                            <input type="radio" name="perro" value="si" id="perro1" checked><label for="perro1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" name="perro" value="no" id="perro2"><label for="perro2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>

                    <div class="row cf mt-2">
                        <h5 class="text-muted mb-4">Tiene gatos?</h5>
                        <div class="four col">
                            <input type="radio" name="gato" value="si" id="gato1" checked><label for="gato1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" name="gato" value="no" id="gato2"><label for="gato2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>

                    <div class="row cf mt-2">
                        <h4 class="text-muted mb-4">Necesita un perro guardian?</h4>
                        <div class="four col">
                            <input type="radio" value="si" name="guardian" id="guardian1" checked><label
                                for="guardian1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" value="no" name="guardian" id="guardian2"><label for="guardian2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>
                        <br>
                    <div class="button">Next</div>
                </fieldset> -->
                <!-- <fieldset class="section">
                    <h3>Choose a Password</h3>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
                    <input class="submit button" type="submit" value="Sign Up">
                </fieldset> -->

            </form>
        </div>
    </div>
    <script src="../anexos/bootstrap\js\bootstrap.min.js"></script>
    <script src="../anexos/jquery/jquery-3.3.1.min.js"></script>
    <script src="../anexos/popper/popper.min.js"></script>

    <script src="../anexos/sweet_alert2\sweetalert2.all.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    
    
        <script src="../js/registro.js"></script>
</body>

</html>