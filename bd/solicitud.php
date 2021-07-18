<?php


include_once 'conexion.php';
$nene = (isset($_POST['nene'])) ? $_POST['nene'] : '';
$depa = (isset($_POST['depa'])) ? $_POST['depa'] : '';
$perro = (isset($_POST['perro'])) ? $_POST['perro'] : '';
$gato = (isset($_POST['gato'])) ? $_POST['gato'] : '';
$guardian = (isset($_POST['guardian'])) ? $_POST['guardian'] : '';
$razon = (isset($_POST['razon'])) ? $_POST['razon'] : '';
// $check = (isset($_POST['check'])) ? $_POST['check'] : '';
$idH = (isset($_POST['idH'])) ? $_POST['idH'] : '';
// $idP = (isset($_POST['idP'])) ? $_POST['idP'] : '';
$activa="S";

$idNuevo = oci_parse($conn,"SELECT ID FROM PROPIETARIOS WHERE EMAIL='$idH' ");
oci_execute($idNuevo);
$idNuevoResp=oci_fetch_assoc($idNuevo);
$idH=$idNuevoResp['ID'];

$array=[ $idH, $nene, $depa, $perro, $gato, $guardian, $razon, $guardian, $razon, $activa ];

$personal = oci_parse($conn,"INSERT INTO SOLICITUDES (ADOPTANTE_ID, NINIOS, DEPTO, OTROSPERROS, GATOS, GUARDIAN, ACTIVA ) VALUES ('$idH','$nene', '$depa', '$perro', '$gato', '$guardian', '$activa')");
oci_execute($personal);

$data=oci_fetch_assoc($personal);

// $data=oci_fetch_array($personal);
print json_encode($array);


?>