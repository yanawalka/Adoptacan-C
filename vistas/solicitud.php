<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
    <link rel="stylesheet" href="../anexos/sweet_alert2\sweetalert2.min.css">
    <link rel="stylesheet" href="../css/solicitud.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php 
session_start();

if($_SESSION['EMAIL'] == null){
    header("Location: ../index.php");
}

$idP = $_GET['idP'];
$idH = $_SESSION['EMAIL'];
?>
    <script type="text/javascript">
    idP = "<?php echo $idP;?>";
    idH = "<?php echo $idH;?>";
    </script>
    <!-- NAVBAR -->
    <nav class="navegador navbar navbar-expand-lg sticky-top navbar-dark ">
        <div class="container-fluid row">
            <div class="col ">
                <img src="../src/logoMuni.png" width="87px" height="55px">
                <a class="navbar-brand ms-5" href="../index.php">ADOPTACAN</a>
            </div>

            <div class=" col-sm-8">
                <ul class="navbar-nav ms-2 mb-2 mb-lg-0">

                    <li class="nav-item me-5">
                        <a class="nav-link active" id="btnNav" aria-current="page" href="../index.php#contacto">Quienes
                            somos/Contacto?</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link " id="btnNav" aria-current="page" href="../index.php#adopcion">Como
                            adoptar?</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link " id="btnNav" aria-current="page" href="../index.php#cuidados">Cuidados</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class=" nav-link " id="btnNav" aria-current="page"
                            href="../index.php#castracion">Castraciones</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col">

            <ul class="navbar-nav mb-2  mb-lg-0">

                <?php if ($_SESSION["EMAIL"]===null) {
                ?>
                <li class="nav-item me-5">
                    <a class="nav-link active" href="#">Iniciar Sesion</a>
                </li>
                <li class="nav-item pt-3">
                    <a class="btn btn-danger btn-sm" href="registro.php" role="button"">Registrate</a>
                </li>

                <?php } else{ ?>
                <li class=" nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION["EMAIL"];?></a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger btn-sm" href="../bd/sesionOut.php" role="button">
                        Cerrar Sesión
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>



    <div class="container">
        <div class="wrapper">
            <ul class="steps">
                <li class="is-active">Paso 1</li>
                <li>Paso 2</li>
                <li>Paso 2</li>
            </ul>

            <form class="form-wrapper" id="solicitud">

                <fieldset class="section is-active" id="seccion">
                    <div class="container-sm mt-5">
                        <h1 class="d-flex justify-content-start">Solicitud de adopcion</h1>
                        <div class="mb-3 ">
                            <label for="razon" class="form-label d-flex justify-content-start">Por que quiere
                                adoptar?</label>
                            <textarea class="form-control d-flex justify-content-start" id="razon" rows="3"
                                name="razon"></textarea>

                        </div>
                        <h4 class="d-flex justify-content-start">Lea atentamente los terminos y condiciones de uso</h4>
                        <div class="form-floating">
                            <textarea name="terminos" class="form-control" id="terminos" readonly
                                style="height:200px"></textarea>
                            <label for="terminos" class="text-start">ACEPTO EN ADOPCION LA MASCOTA CON LAS
                                CARACTERISTICAS QUE SE DETALLAN ANTERIORMENTE. ADEMAS, AUTORIZO
                                A
                                LA DIRECCION GRAL.,DE BIENESTAR ANIMAL Y TENENCIA RESPONSABLE A CONCURRIR A MI DOMICILIO
                                PARTICULAR A VERIFICAR EN LAS CONDICIONES
                                EN LAS QUE SE ENCUENTRA EL ANIMAL QUE ADOPTE.</label>
                        </div>
                        <div class="mb-3">
                            <div class=" ms-4 mt-4 form-check d-flex justify-content-start">
                                <input class="form-check-input" type="checkbox" value="1" id="check" name="check">
                                <label class="form-check-label" for="check">
                                    Acepto terminos y condiciones
                                </label>
                            </div>

                        </div>
                        <div class="button">Next</div>
                    </div>
                </fieldset>


                <fieldset class=" section " id="seccion">
                    <h3 class="titulos">Datos habitacionales</h3>
                    <h6 class="subtitulo text-secondary mb-5">Estos datos son importantes para nosotros ya que con ellos
                        vamos a buscar a la mascota que mejor se adapte a vos!!</h6>

                    <div class="row cf mt-4">
                        <h5 class="text-muted mb-4">Posee niños?</h5>
                        <div class="four col">
                            <input type="radio" value="1" name="nene" id="nene1" checked><label for="nene1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" value="-1" name="nene" id="nene2"><label for="nene2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>

                    <div class="row cf mt-2">
                        <h5 class="text-muted mb-4">Vive en departamento?</h5>
                        <div class="four col">
                            <input type="radio" name="depa" value="S" id="depa1" checked><label for="depa1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" name="depa" value="N" id="depa2"><label for="depa2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>

                    <div class="row cf mt-2">
                        <h5 class="text-muted mb-4">Tiene otros perros?</h5>
                        <div class="four col">
                            <input type="radio" name="perro" value="S" id="perro1" checked><label for="perro1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" name="perro" value="-" id="perro2"><label for="perro2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>

                    <div class="row cf mt-2">
                        <h5 class="text-muted mb-4">Tiene gatos?</h5>
                        <div class="four col">
                            <input type="radio" name="gato" value="S" id="gato1" checked><label for="gato1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" name="gato" value="-" id="gato2"><label for="gato2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>

                    <div class="row cf mt-2">
                        <h4 class="text-muted mb-4">Necesita un perro guardian?</h4>
                        <div class="four col">
                            <input type="radio" value="S" name="guardian" id="guardian1" checked><label for="guardian1">
                                <h4>SI</h4>
                            </label>
                        </div>
                        <div class="four col">
                            <input type="radio" value="N" name="guardian" id="guardian2"><label for="guardian2">
                                <h4>NO</h4>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="button">Next</div>
                </fieldset>

                <fieldset class="section " id="seccion">
                    <div class="registroCentrado">
                        <h3 class="titulos ">Ya casi enviaste tu solicitud</h3>
                        <h5 class="mb-1 text-secondary ">Nos vamos a estar comunicar con vos</h5>
                        <h6 class="mb-5 text-secondary ">Te redireccionaremos a la pantalla principal</h6>
                        <a class="btn btn-danger botonInicio" id="botonInicio" href="../index.php">Enviar Solicitud</a>
                    </div>
                </fieldset>



            </form>
        </div>
    </div>




    <script src="../anexos/bootstrap\js\bootstrap.min.js"></script>
    <script src="../anexos/jquery/jquery-3.3.1.min.js"></script>
    <script src="../anexos/popper/popper.min.js"></script>

    <script src="../anexos/sweet_alert2\sweetalert2.all.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="../js/solicitud.js"></script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>