<?php
include_once 'conexion.php';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$dni = (isset($_POST['dni'])) ? $_POST['dni'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$celular = (isset($_POST['celular'])) ? $_POST['celular'] : '';
$clave = (isset($_POST['pass'])) ? $_POST['pass'] : '';
// $clave = MD5($clave);
$domicilio = (isset($_POST['domicilio'])) ? $_POST['domicilio'] : '';
$origenalta = "WEB";




switch ($opcion) {
    case 1:$personal = oci_parse($conn,"INSERT INTO PROPIETARIOS (NOMBRES, APELLIDO, DNI, EMAIL, CELULAR, CLAVE, DOMICILIO, ORIGENALTA ) VALUES ('$nombre','$apellido', '$dni', '$email', '$celular', '$clave', '$domicilio', '$origenalta')");
        oci_execute($personal);
        $data=oci_fetch_assoc($personal);  
    break;

    case 2:$personal = oci_parse($conn,"SELECT DNI, EMAIL FROM PROPIETARIOS WHERE DNI='$dni' AND EMAIL='$email'");
    // case 2:$personal = oci_parse($conn,"SELECT DNI, EMAIL FROM PROPIETARIOS ");
        oci_execute($personal);
        $data=oci_fetch_assoc($personal);
    break;
}
// $personal = oci_parse($conn,"INSERT INTO PROPIETARIOS (NOMBRES, APELLIDO, DNI, EMAIL, CELULAR, CLAVE, DOMICILIO ) VALUES ('$nombre','$apellido', '$dni', '$email', '$celular', '$clave', '$domicilio')");
// oci_execute($personal);

// $data=oci_fetch_array($personal);
print json_encode($data);



?>