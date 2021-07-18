
<?php

// $conn = oci_connect('ADOPTACAN', 'pias123', '192.168.23.242:1521/ORCL');
// if (!$conn) {
//     $e = oci_error();
//     echo "Hubo error";
//     trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
// }

?>


<?php

$conn = oci_connect('ADOPTACAN', 'pias123', '172.16.1.70:1521/ORCL');
if (!$conn) {
    $e = oci_error();
    echo "Hubo error";
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

?>