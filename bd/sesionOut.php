<?php
session_start();
unset($_SESSION["EMAIL"]);
session_destroy();
header("Location: ../index.php");
?>