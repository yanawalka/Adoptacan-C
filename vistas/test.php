<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>

<body>


<?php echo $anios; if ($anios!=1){?> Años, <?php }else { ?> Año, <?php } echo $meses; if ($meses!=1){?> Meses, <?php }else { ?> Mes, <?php } echo $dias; if ($dias!=1){?> Dias, <?php }else { ?>Dia, <?php } ?>


</body>

</html>