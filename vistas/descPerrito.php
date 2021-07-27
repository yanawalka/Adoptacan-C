<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desc. Animal</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/descPerrito.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>


    <?php
    include '../bd/conexion.php';
    session_start();

    
    $idP = $_GET['IDperrito'];
    $idH = $_SESSION["EMAIL"];

    
    $personal = oci_parse($conn,"SELECT p.ID,p.MESTIZO, p.OTROSPERROS, p.APODO, p.GATOS, p.PORTE, p.SEXO, p.DEPTO, p.FECHANAC,p.CASTRADO, p.GUARDIAN ,r.NOMBRE, p.FOTO, f_get_edad(p.ID, sysdate) EDAD FROM PERROS p INNER JOIN RAZAS r ON p.RAZA_ID=r.ID WHERE p.ID='$idP'");
    oci_execute($personal);
    while ($fila = oci_fetch_array($personal, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
        $anios=substr($fila['EDAD'], 2,1);
        $meses=substr($fila['EDAD'], 4,2);
        $dias=substr($fila['EDAD'], 7,2);

        if($fila['PORTE']=="P"){
            $porte=20;
        }
        if($fila['PORTE']=="M"){
            $porte=40;
        }
        if($fila['PORTE']=="G"){
            $porte=70;
        }
        if($fila['PORTE']=="GI"){
            $porte=100;
        }

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
                        <a class="nav-link active" id="btnNav" aria-current="page" href="../index.php#contacto">Quienes
                            somos/Contacto?</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link " id="btnNav" aria-current="page" href="../index.php#adopcion">Como adoptar?</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link " id="btnNav" aria-current="page" href="../index.php#cuidados">Cuidados</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class=" nav-link " id="btnNav" aria-current="page" href="../index.php#castracion">Castraciones</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col">

            <ul class="navbar-nav mb-2  mb-lg-0">

                <?php if ($_SESSION["EMAIL"]==null) {
                ?>
                <li class="nav-item me-5">
                    <a class="nav-link active"  href="#">Iniciar Sesion</a>
                </li>
                <li class="nav-item pt-3">
                    <a class="btn btn-danger btn-sm" href="registro.php" role="button"">Registrate</a>
                </li>

                <?php } else{ ?>
                <li class="nav-item me-5">
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
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="http://servicios.municipalidadsalta.gob.ar/adopciones-caninas/sisadoptacan/public/images/canes/<?php print $fila['FOTO']?>" alt="Foto-Perrito" width="250">
                                <div class="mt-3">
                                    <h4><?php echo $fila['APODO']; ?></h4>
                                    <p class="text-secondary mb-1">Raza: <?php if($fila['MESTIZO']=='S'){echo "Mestizo/";} echo $fila['APODO']; ?></p>

                                    <?php if ($fila['SEXO']=="M"){?>
                                    <h4 class="text-primary">MACHO</h4> <?php } else {?> <h4 class="text-danger">
                                        HEMBRA</h4>
                                    <?php ;} ?>
                                </div>

                                    <script> function vamos(){
                                    
                                    usuario="<?php echo  $_SESSION["EMAIL"];?>"

                                    if (usuario === ""){
                                            alert("Debe iniciar sesion")
                                    }else{window.location.href = "solicitud.php?idP=<?php echo $idP ?>";}
                                    
                                }    
                                    </script>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-warning mt-3 ms-4" onclick="vamos()" >Formulario de adopcion</button>
                    <!-- <div class="card mt-3">
                        <?php // echo $fila['HISTORIA'];?>
                    </div> -->
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row ms-3 justify-content-center align-items-center">
                                <div class="col-sm-3  align-middle">
                                    <h6 class="mb-0 align-middle">EDAD:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary text-center fw-bolder">
                                    <?php echo $anios; if ($anios!=1){?> Años, <?php }else { ?> Año,
                                    <?php } echo $meses; if ($meses!=1){?> Meses, <?php }else { ?> Mes,
                                    <?php } echo $dias;?> Dias
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center align-items-center ms-3">
                                <div class="col-sm-3  align-middle ">
                                    <h6 class="">Guardian: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php if($fila['GUARDIAN'] == "S"){echo "<p class='p-3 mb-2 bg-success text-center text-white fw-bolder'>Si</p>";}else{echo "<p class='p-3 mb-2 bg-danger text-white text-center fw-bolder'>No</p>";}  ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center align-items-center ms-3">
                                <div class="col-sm-3  align-middle ">
                                    <h6 class="mb-0">Castrado: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php if($fila['CASTRADO'] == "S"){echo "<p class='p-3 mb-2 bg-success text-center text-white fw-bolder'>Si</p>";}else{echo "<p class='p-3 mb-2 bg-danger text-white text-center fw-bolder'>No</p>";}  ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center align-items-center ms-3">
                                <div class="col-sm-3  align-middle ">
                                    <h6 class="mb-0">Puede vivir en departamento: </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php if($fila['DEPTO'] == "S"){echo "<p class='p-3 mb-2 bg-success text-center text-white fw-bolder'>Si</p>";}else{echo "<p class='p-3 mb-2 bg-danger text-white text-center fw-bolder'>No</p>";}  ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center align-items-center ms-3">
                                <div class="col-sm-3  align-middle ">
                                    <h6 class="mb-0">Puede convivir con gatos:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php if($fila['GATOS'] == "S"){echo "<p class='p-3 mb-2 bg-success text-center text-white fw-bolder'>Si</p>";}else{echo "<p class='p-3 mb-2 bg-danger text-white text-center fw-bolder'>No</p>";}  ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center align-items-center ms-3">
                                <div class="col-sm-3  align-middle ">
                                    <h6 class="mb-0">Tolera a otros perros:</h6>
                                </div>

                                <div class="col-sm-9 text-secondary">
                                    <?php if($fila['OTROSPERROS'] == "S"){echo "<p class='p-3 mb-2 bg-success text-center text-white fw-bolder'>Si</p>";}else{echo "<p class='p-3 mb-2 bg-danger text-white text-center fw-bolder'>No</p>";}  ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i
                                            class="material-icons text-info mr-2">Muchos mas </i> DETALLES</h6>
                                    <small>TAMAÑO</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: <?php echo $porte ?>%" aria-valuenow="<?php echo $porte ?>"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php }?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script type="text/javascript" src="../js/tarjeta.js"></script>
</body>

</html>