<?php

include 'inc/conexion.php';
session_start();
$nombre_cliente;
if (!isset($_SESSION['nombre_cliente']) && !isset($_SESSION['descripcion_coche']) && !isset($_SESSION['fecha_actual'])) {
    header('Location: cotizacion_inicia.php');
    //echo 'No se ha iniciado sesion';
} else {
    $sel = $con->prepare("SELECT *from marca");
    $sel->execute();
    $res = $sel->get_result();
    $row = mysqli_num_rows($res);
}
?>