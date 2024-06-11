<?php
    include_once("conexion.php");
    $cod = $_GET['cod'];
    mysqli_query($conn, "DELETE FROM poject_17_usuarios WHERE cod=$cod");
    header("Location:index.php");
?>