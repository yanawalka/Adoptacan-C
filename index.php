<?php 
session_start();
//Si nadie inció sesión vuelve a la pag de Login
// if ($_SESSION["EMAIL"] === null){
// 	header("Location: vistas/registro.php");
// }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>Inicio</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>

    <nav class="navegador navbar navbar-expand-lg sticky-top navbar-dark ">
        <div class="container-fluid row">
            <div class="col ">
                <img src="src/logoMuni.png" width="87px" height="55px">
                <a class="navbar-brand ms-5" id="btnNav1" href="index.php">ADOPTACAN</a>
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
                    <a class="nav-link active" id="btnNav" href="vistas/sesion.php">Iniciar Sesion</a>
                </li>
                <li class="nav-item pt-3">
                    <a class="btn btn-danger btn-sm" href="vistas/registro.php" role="button"">Registrate</a>
                </li>

                <?php } else{ ?>
                <li class=" nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="vistas/usuarios.php"><?php echo $_SESSION["EMAIL"];?></a>
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

    <br>
    <br>
    <!-- CAROUSEL -->
    <div class="container mt-1 d-none d-lg-block">
        <div id="carouselExampleIndicators" class="carousel slide shadow-sm mb-5 bg-body rounded"
            data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-dark"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-dark"
                    aria-label="Slide 3"></button>
            </div>


            <div class="carousel-inner p-3">

                <div class="carousel-item active ">
                    <div class="row">
                        <div class="col">
                            <div class="textoCarou">
                                <h3 class=" mt-3 ms-3 ">Como adoptar?</h3>
                            </div>
                            <div>
                                <h5 class=" mt-3 ms-3 text-muted">Solo tenes que estar registrado, seleccionar un
                                    cachorro en
                                    la
                                    seccion de adopcion y listo!</h5>
                            </div>
                            <a class="btn btn-danger mt-3 ms-4 botonSlides" href="#adopcion">Seccion de adopcion</a>
                        </div>
                        <div class="col">
                            <img class="float-end" src="src/caschi1.jpg " alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <div class="textoCarou">
                                <h3 class=" mt-3 ms-3 ">Como cuidar a mi primer perro?</h3>
                            </div>
                            <div>
                                <h5 class=" mt-3 ms-3 text-muted">Aprende de nuestros veterinarios!</h5>
                            </div>
                            <a class="btn btn-danger mt-3 ms-4" href="#cuidados">Cuidados</a>
                        </div>
                        <div class="col">
                            <img class="float-end" src="src/caschi2.jpg " alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <div class="textoCarou3">
                                <h3 class=" mt-3 ms-3 ">Adonde estamos?</h3>
                                <h4 class=" mt-1 ms-3 ">Lavalle 542, Salta Capital</h4>
                            </div>
                            <div>
                                <h5 class=" mt-3 ms-3 text-muted">Podes llamarnos: 0387-437-3490</h5>
                            </div>

                            <a class="btn btn-danger mt-3 ms-4" href="#contacto">Contacto</a>
                        </div>
                        <div class="col">
                            <iframe class="mb-4"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14487.797661430404!2d-65.4034815!3d-24.7971856!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39c35341c85af917!2sHospital%20P%C3%BAblico%20de%20Mascotas!5e0!3m2!1ses-419!2sar!4v1624375258306!5m2!1ses-419!2sar"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <button class=" carousel-control-prev botonNext h-25" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon iconoCarousel" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next botonNext h-25" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon iconoCarousel" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <!-- NOSOTROS -->
    <a name="contacto" id="contacto"></a>
    <div class="nosotros mt-5">
        <div class="tarjNosotros">
            <div class="shadow-sm  shadow-lg p-3 mb-5 pb-3 bg-body rounded">
                <h1 class=" row nombre requisitos text-center mb-1 pt-2 fw-normal"> <i> Hospital de Mascotas de la
                        Ciudad</i></h1>
                <hr class="mb-4">
                <div class="row">
                    <div class="col">
                        <h3 class=" text-secondary ps-3 pb-2 pt-3 fw-lighter ">Donde estamos?</h3>
                        <iframe class=" ms-3"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14487.797661430404!2d-65.4034815!3d-24.7971856!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39c35341c85af917!2sHospital%20P%C3%BAblico%20de%20Mascotas!5e0!3m2!1ses-419!2sar!4v1624375258306!5m2!1ses-419!2sar"
                            width="70%" height="80%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col ">
                        <h3 class=" text-secondary ps-1 pb-2 pt-3 fw-lighter text-center">Como funciona el hospital?
                        </h3>
                        <p class="text-center">En el Hospital Municipal de Salud Animal se brinda atención primaria a
                            mascotas
                            y, dependiendo del
                            caso, se realizan cirugías de menor y mediana complejidad.</p>

                        <p class="text-center"> En la actualidad cuenta con 11 médicos veterinarios afectados a los
                            distintos
                            turnos y un profesional en
                            los Centros Integradores Comunitarios con consultorios ubicados en los barrios Unión (zona
                            norte) y
                            Constitución (zona este).</p>

                        <p class="text-center"> Cabe recordar que el Hospital brinda atención primaria de salud animal y
                            dependiendo del caso, cirugías
                            de menor y mediana complejidad. En cuadros graves se dispone el traslado a la Facultad de
                            Ciencias
                            Agrarias y Veterinarias de la Universidad Católica de Salta.</p>

                        <p class="text-center"> El nosocomio cuenta con dos consultorios, un quirófano donde se pueden
                            realizar
                            tres cirugías
                            simultáneas, sala de internación con capacidad para ocho animales, sala de guardia y salas
                            de
                            espera
                            en
                            las instalaciones ubicadas en Lavalle 542.</p>

                        <p class="text-center"> IMPORTANTE: La atención de mascotas es para personas carentes de
                            recursos de
                            la
                            ciudad y se exige el
                            certificado para evitar un posible mal uso de los recursos por parte de quienes pueden
                            costear
                            la
                            atención.</p>
                    </div>

                </div>
                <div class="turnos text-center mt-5">
                    <p class="bg-secondary fs-4 text-white">Los turnos se darán por orden de llegada a partir de las 8 y
                        se atenderá con los profesionales veterinarios desde 8.30 a 12.30. Se darán 30 turnos por
                        jornada</p>
                </div>
                <div class="row mt-5 pt-4">
                    <p class="requisitos text-center fs-1">Telefono: 0387-4373490</p>
                    <p class="text-secondary text-center fs-1">Direccion: Lavalle 542, Salta Capital</p>
                </div>

            </div>
        </div>
    </div>


    <!-- ADOPCION -->
    <a name="adopcion" id="adopcion"></a>


    <div class="tarjNosotros mt-5">
        <div class="shadow-sm  shadow-lg p-3 mb-5 pb-3 bg-body rounded">
            <h1 class="mt-2  mb-1 ms-3 fw-normal requisitos  text-center"> <i>¿Como adoptar?</i></h1>
            <h4 class="text-muted text-center ps-3 pb-2 pt-3 fw-lighter"> Si cumplis con los requisitos selecciona al perrito que mas te guste y envianos la solicitud</h4>
            <hr class="mb-4">
            <div class="row">

                <div class="col" >
                    <h3 class=" requisitos ps-3 pb-3 pt-3 fw-lighter">REQUISITOS</h3>
                    <ul class="text-secondary p-1 text-right ps-5 fs-4">
                        <li class="pb-5">Fotocopia de tu DNI</li>
                        <li class="pb-5">Fotocopia de un impuesto que verifique donde vivis</li>
                        <li class="pb-5">Firmar un contrato de adopcion que te damos acá!</li>
                    </ul>
                </div>
                <div class="col d-none d-lg-block"><img src="src/caschi3.jpg" class="img-fluid ms-5" style="height:300px widht:500px"></div>
            </div>
        </div>
    </div>


    <!-- ADOPCION -->
    <a name="adopcion" id="adopcion"></a>

    <div id="adopcion">
        <br>
        <!-- REQUISITOS -->
        <div class="  shadow-sm  shadow-lg p-3 mb-5 bg-body rounded">

            <div class="container">
            <a name="perritos" id="perritos"></a>
                <div class="row row-cols-1 row-cols-md-4 g-4">

                    <?php   
    include 'bd/conexion.php';
      $personal = oci_parse($conn,"SELECT p.ID, p.APODO, p.SEXO, p.FOTO , p.FECHANAC ,r.NOMBRE FROM PERROS p INNER JOIN RAZAS r ON p.RAZA_ID=r.ID WHERE ROWNUM <= 8 AND IDPROPIETARIO IS NULL ");
      oci_execute($personal);
      while ($fila = oci_fetch_array($personal, OCI_ASSOC+OCI_RETURN_NULLS)) {
  ?>
                    <!-- ####TARJETA#### -->
                    <div class="col">
                        <!-- <div class="card" style="width: 18rem;"> -->
                        <div class="card h-100 border border-light border-5" style="width: 18rem;">
                            <img class="card-img-top" src="http://servicios.municipalidadsalta.gob.ar/adopciones-caninas/sisadoptacan/public/images/canes/<?php print $fila['FOTO']?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php  print $fila['APODO']?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php print $fila['NOMBRE']?></h6>
                                <?php if ($fila['SEXO']=="M"){?>

                                <h4 class="text-primary">MACHO</h4>

                                <?php } else {?> <h4 class="text-danger">HEMBRA</h4> <?php ;} ?>

                                <p class="card-text h-10">Nacio el dia: <?php print $fila['FECHANAC']?></p>
                                <a class="btn btn-warning"
                                    href="vistas/descPerrito.php?<?php echo "IDperrito=".$fila['ID'] ?>">+Info y Solicitud</a>

                            </div>
                        </div>
                    </div>
                    <?php	} ?>
                </div>
            </div>
        </div>
    </div>
    </div>





    <!-- CUIDADOS -->
    <div class="cuidados">


        <a name="cuidados" id="cuidados"></a>
        <div class="container">
            <div class="preguntas">
                <h1 class="mt-2  mb-4 ms-3 fw-normal text-white fw-bold  text-center"> <i>¿Como cuidar a tu mascota?</i>
                </h1>
                <div class="cuidadosDropdowns">
                    <p class="border-0">
                        <button class="botonesCuidados" type="button" data-bs-toggle="collapse" data-bs-target="#valor1"
                            aria-expanded="false" aria-controls="valor1">
                            <span class="material-icons icono float-start ms-3">pets</span> Recomendaciones para cuidar
                            la
                            nutricion de tu mascota <span class="material-icons icono float-end me-3">pets</span>
                        </button>
                    </p>
                    <div class="collapse" id="valor1">
                        <div class="card card-body mb-3">
                            <h4 class="icono">¿Qué es un alimento balanceado y por qué es tan importante para mi
                                mascota?</h4>
                            <p>Un alimento balanceado es aquel alimento que aporta la energía y los nutrientes
                                necesarios
                                para mantener a los animales con la salud adecuada, de acuerdo con el estilo de vida que
                                lleven y la etapa de crecimiento en que se encuentren.
                                Es muy importante que tu perro ingiera alimento balanceado ya que en él encontrará la
                                fuente
                                para mantenerse en buen estado, activo y tan alegre como a vos te gusta verlo.
                                Los nutrientes que forman el alimento son: proteínas, hidratos de carbono, grasa,
                                minerales,
                                vitaminas y agua. Pero sólo aportan energía al animal las proteínas, hidratos de carbono
                                y
                                las grasas. Si bien los minerales, vitaminas y el agua no aportan energía, son
                                fundamentales
                                para el normal funcionamiento corporal.</p>
                            <br>
                            <h5 class="icono">Algunos consejos de alimentación</h5>
                            <ul>
                                <li>Serví cada ración de comida en un recipiente limpio e irrompible, ideal si es de
                                    acero
                                    inoxidable.</li>
                                <li>Una alfombrita antideslizante debajo del tazón ayudará a tu perro a no mover el
                                    comedero
                                    mientras come.</li>
                                <li>Quitá todo resto de alimento que haya dejado sin comer después de 30 minutos
                                    aproximadamente.</li>
                                <li>Asegurate de que siempre tenga suficiente agua fresca disponible</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="cuidadosDropdowns">
                    <p class="border-0">
                        <button class="botonesCuidados" type="button" data-bs-toggle="collapse" data-bs-target="#valor2"
                            aria-expanded="false" aria-controls="valor2">
                            <span class="material-icons icono float-start ms-3">pets</span> ¿Como mantener correctamente
                            su
                            higiene? <span class="material-icons icono float-end me-3">pets</span>
                        </button>
                    </p>
                    <div class="collapse" id="valor2">
                        <div class="card card-body mb-3">
                            <h4 class="icono">Estos son los 5 tips a los que debés prestar atención para lograr una
                                correcta higiene
                                de tu
                                perro:</h4>

                            <h5 class="icono">El Baño.</h5>
                            <p>El mantener limpia y saludable a tu mascota es algo de lo que debés asegurarte con la
                                ayuda
                                de tu veterinario, ya que la frecuencia del baño depende de su raza, su tamaño, su edad,
                                del
                                lugar donde vive y del estilo de vida que lleve.
                                Como recomendaciones generales para tener en cuenta, te aconsejamos consultar a tu
                                veterinario desde qué fecha podés bañar a tu cachorro, y cuál es la rutina de baño
                                recomendable.
                                Recordá no bañar ¡NUNCA! a tu mascota con productos para humanos. Los productos
                                perfumados,
                                con colorantes, esencias o conservantes pueden provocarle alergias, por lo que debes
                                higienizarlo con jabón neutro o shampoo para mascotas.</p>
                            <br>

                            <h5 class="icono">El Cepillado</h5>
                            <p>Sea tu mascota de pelo corto o de pelo largo, es aconsejable cepillarlo periódicamente
                                desde
                                temprana edad para estimular el recambio del pelaje, logrando así tenerlo brillante,
                                sano y
                                eliminar las partículas de polvo que puedan quedarle atrapadas.
                                Tené en cuenta que los perros cambian su pelo en otoño y en primavera, por lo que es
                                bueno
                                cepillarlo diariamente para ayudar al recambio y reducir la cantidad de pelo que pierde
                                por
                                tu casa.</p>
                            <br>

                            <h5 class="icono">Las Orejas</h5>
                            <p>Es muy importante mantenerle limpias las orejas a tu mascota para evitar la proliferación
                                de
                                microorganismos en la zona.
                                Dependiendo de la raza, es aconsejable realizar una buena limpieza una a dos veces por
                                semana con el producto que tu veterinario te recomiende, manteniendo la zona limpia,
                                seca y
                                aireada.
                                Esta limpieza ayuda a prevenir la otitis y es muy importante en las razas que poseen las
                                orejas caídas.</p>
                            <br>

                            <h5 class="icono">El Corte de Uñas</h5>
                            <p>El largo de las uñas es algo de lo que debés tomar especial atención si tu mascota vive
                                en un
                                departamento, no se encuentra asiduamente al aire libre o lleva una vida sedentaria que
                                no
                                le permita desgastar sus uñas fácilmente.
                                Más allá de lastimarte o lastimar a otras personas, es importante el cuidado de las uñas
                                de
                                tu mascota para protegerlo de sí mismo, ya que no deben superar un largo que le impida
                                andar
                                con facilidad.
                                Es recomendable que sea un veterinario quien realice el corte de uñas.</p>
                            <br>

                            <h5 class="icono">Los Dientes</h5>
                            <p>Un buen cuidado de la dentadura de tu mascota no es sólo una cuestión estética, sino que
                                también ayudará a prevenir problemas de salud importantes.
                                Debido a que la limpieza de sus dientes puede tornarse muy difícil, es fundamental
                                llevarla
                                a cabo desde cachorro. Al igual que en las personas, debe realizarse desde muy pequeños
                                para
                                lograr la menor resistencia y crear así una rutina. Además, es recomendable que el
                                veterinario controle regularmente la boca de tu mascota para realizar una limpieza
                                profunda
                                en caso de que sea necesaria.
                                Un cepillado habitual y productos especiales, pueden ayudar a mantener su boca en un
                                excelente estado, lo que ayudará a prevenir del sarro y enfermedades como gingivitis,
                                que
                                puedan provocar la caída de los dientes.
                                Tu perro utiliza sus dientes no sólo para comer sino también para llevar cosas y jugar.
                                Un dato triste pero real nos indica que el 80% de los perros mayores de 3 años sufren
                                enfermedades en los dientes y encías. No tratarlo puede ocasionar dolor en tu perro, la
                                posibilidad de pérdida de la pieza dentaria y hasta infecciones.</p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="cuidadosDropdowns">
                    <p class="border-0">
                        <button class="botonesCuidados" type="button" data-bs-toggle="collapse" data-bs-target="#valor3"
                            aria-expanded="false" aria-controls="valor3">
                            <span class="material-icons icono float-start ms-3">pets</span> Recomentaciones importantes!
                            <span class="material-icons icono float-end me-3">pets</span>
                        </button>
                    </p>
                    <div class="collapse" id="valor3">
                        <div class="card card-body mb-3">
                            <h4 class="icono">Consejos para perros sanos y felices</h4>

                            <h5 class="icono">Vacunarlo es protegerlo.</h5>
                            <p>Es muy importante cumplir con todas las vacunas de tu perro en tiempo y forma, para
                                prevenir
                                enfermedades mortales. Respetar esta reglamentación no es un tema menor, sino todo lo
                                contrario, ya que ayudará a proteger a tu mascota. Las vacunas ayudan a prevenir
                                enfermedades tales como: Moquillo, Hepatitis infecciosa, Parvovirosis, Leptospirosis,
                                Coronavirus, Parainfluenza, Rabia, etc.</p>
                            <h6 class="icono">Tabla de vacunacion</h6>
                            <p>(Esta tabla es solo una referencia, se recomienda consultar con su veterinario)</p>
                            <img src="src/cuadrovacunacion.png" alt="" height="390px" width="590px">
                            <br>

                            <h5 class="icono">Pulgas y Garrapatas, un problema conocido</h5>
                            <p>Es común ver a tu perro rascándose, pero si lo hace de forma excesiva puede que presente
                                un
                                problema de pulgas. La mejor manera de mantener a tu mascota libre de pulgas es
                                implementar
                                un Programa Integrado de Control de Pulgas: El tratamiento debe ser tanto sobre el
                                animal
                                como sobre el ambiente en el cual éste habita.</p>
                            <ul>
                                <li>Las pulgas tienden a encontrarse en ambientes mullidos: tratá alfombras, almohadas,
                                    ropa
                                    y parquet. La garrapata se encuentra más comúnmente en ambientes abiertos, como
                                    campos o
                                    jardines.</li>
                                <li>Si tenés otra mascota, también deberían tomarse recaudos para prevenir su contagio.
                                </li>
                                <li>Si vivís en un área donde las garrapatas son un problema debés examinar regularmente
                                    a
                                    tu perro por estos parásitos, especialmente en los meses más calurosos cuando las
                                    garrapatas son más activas.</li>
                            </ul>
                            <p>En caso de encontrar alguno de estos parásitos, contactate inmediatamente con tu
                                veterinario
                                para que te aconseje la mejor forma de proceder.</p>
                            <br>

                            <h5 class="icono">Ejercicios para mantener en forma y cuidar la salud de tu mascota</h5>
                            <p>Los ejercicios y caminatas son muy importantes para nuestros amigos caninos tanto como
                                para
                                nosotros. Es imprescindible que tu perro tenga una rutina de ejercicios adecuada con su
                                condición física, dependiendo de la raza, su tamaño, el estilo de vida que lleve, etc.
                                Antes
                                de comenzar con la rutina de ejercicios, es importante procurar el estado de salud de la
                                mascota y obtener la aprobación y supervisión de un veterinario.</p>
                            <br>

                            <h5 class="icono">Cómo cuidar la estética de tu mascota</h5>
                            <p>No sólo los ejercicios y las caminatas diarias son necesarias para que tu perro esté
                                saludable, también es muy importante cuidar la higiene dental de tu mascota, cepillarle
                                el
                                pelo regularmente y mantenerlo tan limpio y saludable por dentro como por fuera.</p>
                            <br>

                        </div>
                    </div>
                </div>

                <div class="cuidadosDropdowns">
                    <p class="border-0">
                        <button class="botonesCuidados" type="button" data-bs-toggle="collapse" data-bs-target="#valor4"
                            aria-expanded="false" aria-controls="valor4">
                            <span class="material-icons icono float-start ms-3">pets</span> ¿Que debo tener en cuenta
                            para
                            adoptar un cachorro? <span class="material-icons icono float-end me-3">pets</span>
                        </button>
                    </p>
                    <div class="collapse" id="valor4">
                        <div class="card card-body mb-3">
                            <h5 class="icono">Qué considerar antes de tener un perro.</h5>
                            <p>El espacio disponible, el tiempo que hay que dedicar a su ejercicio y cuidado, y los
                                costos
                                asociados a su alimentación, al veterinario y a los arreglos vacacionales. También debés
                                tener en cuenta las horas que el cachorro va a permanecer solo y si preferís que pase la
                                mayor parte del tiempo adentro o afuera.</p>
                            <p>Estas decisiones van a determinar qué raza de perro es más conveniente para vos.</p>
                            <br>

                            <h5 class="icono">Eligiendo tu perro</h5>
                            <p>Averiguá sobre las distintas razas para encontrar la más adecuada para vos y tu familia.
                                O
                                también podés decidir tener un adorable y cariñoso cachorrito sin raza que está ansioso
                                por
                                ser adoptado en un refugio, éstos generalmente los entregan desparasitados y con las
                                vacunas
                                al día. En todo caso, es siempre una buena idea llevar a tu nuevo amigo a un veterinario
                                para un examen de salud completo y para obtener más información para su cuidado.</p>
                            <br>

                            <h5 class="icono">Consultando al Veterinario</h5>
                            <ul>
                                <li>Si estás pensando en tener un perro, visitá a un veterinario para que te asesore
                                    sobre
                                    qué tipo de perro es mejor para tu hogar, ya que cada raza tiene necesidades
                                    especiales.
                                </li>
                                <li>Tu veterinario va a ser tu fuente de información más confiable y precisa: consultale
                                    sobre las medidas de prevención para evitar posibles enfermedades, pulgas y demás;
                                    sobre
                                    los productos del hogar que son tóxicos y que te dé sus consejos para los primeros
                                    días
                                    del perrito en tu casa.</li>
                            </ul>
                            <br>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" text-center mt-5">
                <p class="bg-secondary fs-4 text-white">La informacion detallada anteriormente fue consultada en <a
                        href="www.pedigree.com.ar">www.pedigree.com.ar</a></p>
            </div>
        </div>

    </div>

    <!-- CASTRACION -->
    <a name="castracion" id="castracion"></a>
    <div class="castracion">
        <div class="tarjNosotros mt-5">
            <div class="shadow-sm  shadow-lg p-3 mb-5 pb-3 bg-body rounded">
                <h1 class="mt-2  mb-1 ms-3 fw-normal requisitos  text-center"> <i>Castraciones</i></h1>
                <hr class="mb-4">
                <div class="row">

                    <div class="col ">
                        <h3 class=" requisitos ps-3 pb-2 pt-3 fw-lighter">Beneficios</h3>
                        <ul class="text-secondary p-1 text-right ps-5">

                            <li class="pb-3">
                                <p> <span class="requisitos fw-bold">A las personas: </span> evita crías no deseadas,
                                    mordeduras, peleas, maullidos
                                    nocturnos y problemas con los vecinos.</p>
                            </li>


                            <li class="pb-3">
                                <p> <span class="requisitos fw-bold">A los animales: </span>en hembras evitará tumores
                                    de mamas, de ovarios, infecciones de útero,
                                    embarazo psicológico (o pseudogestación) y problemas en parto. En machos evitará
                                    cáncer
                                    de próstata, de testículos y enfermedades de transmisión sexual como la brucelosis.
                                </p>
                            </li>


                            <li class="pb-3">
                                <p> <span class="requisitos fw-bold">A la sociedad:</span> menor cantidad de animales
                                    sueltos y por lo tanto menos accidentes,
                                    mordeduras, roturas de bolsas de residuos y menos contaminación (orina y materia
                                    fecal).
                                    Una sola perra y su descendencia en 7 años puede producir alrededor de 5500
                                    cachorros.
                                    La tenencia responsable de animales implica alimentarlos, darles la sanidad
                                    correspondiente, protegerlos, no dejarlos deambular libremente por la vía pública ni
                                    abandonarlos en la misma, además de impedir su reproducción indiscriminada.</p>
                            </li>
                        </ul>

                        <div class="turnos text-center mt-5">
                            <p class="bg-secondary fs-4 text-white">Los vecinos pueden acceder a los servicios gratuitos
                                de castración y vacunación en los consultorios externos ubicado en los Centros
                                Integradores de los barrios Unión y Constitución.</p>
                        </div>


                    </div>
                    <div class="col d-none d-lg-block">
                        <h3 class=" requisitos ps-3 pb-2 pt-3 fw-lighter">Condiciones pre quirurgicas del animal</h3>
                        <ul class="text-secondary p-1 text-right ps-5">

                            <li class="pb-3">
                                <p> </p>
                            </li>

                            <li class="pb-3">
                                <p>Edad para castrar a partir de los 5 meses (según criterio del profesional) </p>
                            </li>

                            <li class="pb-3">
                                <p>El animal debe venir con collar y correa, bozal en caso de ser agresivo, acompañados
                                    por un mayor de edad </p>
                            </li>

                            <li class="pb-3">
                                <p>Ayuno de 12 hs de sólidos y líquidos </p>
                            </li>

                            <li class="pb-3">
                                <p>Traer el animal limpio y con una manta para el postquirurgico. </p>
                            </li>

                            <li class="pb-3">
                                <p>Felinos deben venir en un bolso transportador. </p>
                            </li>

                            <li class="pb-3">
                                <p> El animal debe estar en buenas condiciones de higiene.</p>
                            </li>

                            <li class="pb-3">
                                <p>No deben estar en celo o preñadas </p>
                            </li>

                            <li class="pb-3">
                                <p>En caso de haber parido se debe esperar 60 días como mínimo en perras y 45 días en
                                    gatas.</p>
                            </li>

                            <li class="pb-3">
                                <p>Sea Responsable, Castre y Vacune! </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis veritatis odit illum molestiae ab eos quam voluptatum, deserunt sed quo iste sint quos maiores tempore beatae perspiciatis numquam ut sunt! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, quos cupiditate ut dignissimos recusandae quam, maiores, culpa ipsum qui beatae velit accusantium molestias. Ipsum alias expedita quam, sed commodi vitae. -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="js/tarjeta.js"></script>

</body>

</html>