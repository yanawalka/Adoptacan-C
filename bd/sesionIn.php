<?php

session_start();

include 'conexion.php';
  
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : '';


$personal = oci_parse($conn,"SELECT p.EMAIL, p.CLAVE FROM PROPIETARIOS p WHERE EMAIL='$usuario' AND CLAVE='$clave'");
oci_execute($personal);

$data=oci_fetch_assoc($personal);


   if ($otro!==false){     
      
    $_SESSION['EMAIL'] = $usuario;
    
 }else{    
    
      $_SESSION['EMAIL'] = null;
   }

print json_encode($data); //enviar el array final en formato json a JS
$conexion = null;
?>