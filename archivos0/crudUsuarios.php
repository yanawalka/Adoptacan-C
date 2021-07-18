<?php
include_once 'conexion.php';


// Recepción de los datos enviados mediante POST desde el JS   


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        // $consulta = "INSERT INTO personas (nombre, usuario, email, clave, idRol) VALUES('$nombre', '$usuario', '$email', '$clave', '$idRol') ";			
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute(); 


        // $consulta = "SELECT id, nombre, usuario, email, clave, idRol FROM personas ORDER BY id DESC LIMIT 1";
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();
        // $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        // break;
    case 2: //modificación
        // $consulta = "UPDATE personas SET nombre='$nombre', usuario='$usuario', email='$email', clave='$clave' WHERE id='$id' ";		
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();        
        
        // $consulta = "SELECT id, nombre, usuario, email, clave FROM personas WHERE id='$id' ";       
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();
        // $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        // break;        
    case 3://baja
        // $consulta = "DELETE FROM personas WHERE id='$id' ";		
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();                           
        // break;        

    case 4:    

        $personal = oci_parse($conn,"SELECT ID FROM PERROS ");
        oci_execute($personal);      
        $data = oci_fetch_array($personal, OCI_ASSOC+OCI_RETURN_NULLS)  
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;