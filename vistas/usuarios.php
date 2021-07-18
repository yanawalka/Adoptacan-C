<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/usuarios.css">
</head>

<body>


    <?php
    include '../bd/conexion.php';
    
    session_start();
    $sesion=$_SESSION["EMAIL"];
    echo $_SESSION["EMAIL"];
?>

    <nav class="navegador navbar navbar-expand-lg sticky-top navbar-dark ">
        <div class="container-fluid row">
            <div class="col ">
                <img src="../src/logoMuni.png" width="87px" height="55px">
                <a class="navbar-brand ms-5" href="../index.php">ADOPTACAN</a>
            </div>

            <div class=" col-sm-8">
                <ul class="navbar-nav ms-2 mb-2 mb-lg-0">

                    <li class="nav-item me-5">
                        <a class="nav-link active" id="btnNav" aria-current="page" href="#contacto">Quienes
                            somos/Contacto?</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link " id="btnNav" aria-current="page" href="#adopcion">Como adoptar?</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link " id="btnNav" aria-current="page" href="#cuidados">Cuidados</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class=" nav-link " id="btnNav" aria-current="page" href="#castracion">Castraciones</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col">

            <ul class="navbar-nav mb-2  mb-lg-0">

                <?php if ($_SESSION["EMAIL"]===null) {
                ?>
                <li class="nav-item me-5">
                    <a class="nav-link active" href="sesion.php">Iniciar Sesion</a>
                </li>
                <li class="nav-item pt-3">
                    <a class="btn btn-danger btn-sm" href="registro.php" role="button"">Registrate</a>
                </li>

                <?php } else{ ?>
                <li class=" nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION["EMAIL"];?></a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger btn-sm" href="bd/sesionOut.php" role="button">
                        Cerrar Sesión
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>


    <?php 

$personal = oci_parse($conn,"SELECT * FROM PROPIETARIOS p WHERE p.EMAIL='$sesion'");
oci_execute($personal);
while ($fila = oci_fetch_array($personal, OCI_ASSOC+OCI_RETURN_NULLS)) {

?>

    <div class="container">
        <hr>
        <div class="row">

            <div class="col">

                <p class="card-text"><?php  echo $fila['EMAIL'] ?> </p>
                <p class="card-text"><?php  echo $fila['CELULAR'] ?> </p>
                <p class="card-text"><?php  echo $fila['DNI'] ?> </p>
                <p class="card-text"><?php  echo $fila['DOMICILIO'] ?> </p>

            </div>


            <div class="col d-flex justify-content-end">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../src/marito.png" alt="Card image cap">
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title text-success text-center">
                            <?php echo $fila['APELLIDO']." "; echo $fila["NOMBRES"];?>
                        </h5>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>












    <?php } ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script type="text/javascript" src="../js/usuarios.js"></script>

</body>

</html>