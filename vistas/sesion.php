<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="card">
                    
                        <form onsubmit="event.preventDefault()" id="formLogin" class="box" action="" method="post">
                            <h1>Iniciar Sesion</h1>
                            <p class="text-muted"> Ingrese su susuario y contraseña!</p>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Email">
                            <input type="password" name="clave" id="clave" class="form-control"
                                placeholder="Contraseña">
                            <input type="submit" name="submit" class="btn-dark btn-lg " value="INGRESAR!">
                            <a class="forgot text-muted" href="registro.php">Registrarse</a>

                        </form>
                    </div>
                </div>
            </div>
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
    <script src="../js/sesion.js"></script>
</body>

</html>