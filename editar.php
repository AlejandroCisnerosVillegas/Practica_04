<?php 
    include_once("conexion.php");
    include_once("index.php");
    $codigo = $_GET['cod'];
    $querybuscar = mysqli_query($conn, "SELECT * FROM poject_17_usuarios WHERE cod=$codigo");
    while ($mostrar = mysqli_fetch_array($querybuscar)) {
        $codigo = $mostrar['cod'];
        $nombre = $mostrar['nom'];
        $correo = $mostrar['correo'];
        $telefono = $mostrar['tel'];
    }
?>
<html>
    <head>    
        <meta charset="UTF-8">
        <title>Sistema de Gestión de Usuarios</title>
        <link href="../../assets/img/logo.png" rel="icon">
        <link href="../../assets/img/logo-grande.png" rel="apple-touch-icon">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="caja_popup2" id="formmodificar">
        <form method="POST" class="contenedor_popup">
            <table>
                <tr><th colspan="2">Modificar usuario</th></tr>
                <tr> 
                    <td>Código</td>
                    <td><input type="text" name="txtcodigo" value="<?php echo $codigo;?>" required></td>
                </tr>
                <tr> 
                    <td>Nombre</td>
                    <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
                </tr>
                <tr> 
                    <td>Correo</td>
                    <td><input type="text" name="txtcorreo" value="<?php echo $correo;?>" required></td>
                </tr>
                <tr> 
                    <td>Teléfono</td>
                    <td><input type="text" name="txttelefono" value="<?php echo $telefono;?>" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a style='background: #E32B2B;' href="index.php">Cancelar</a>
                        <input style='background: #F15931;' type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este usuario?');">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </body>
</html>
<?php
    if (isset($_POST['btnmodificar'])) {    
        $codigo1 = $_POST['txtcodigo'];
        $nombre1 = $_POST['txtnombre'];
        $correo1 = $_POST['txtcorreo'];
        $telefono1 = $_POST['txttelefono']; 
        $querymodificar = mysqli_query($conn, "UPDATE poject_17_usuarios SET nom='$nombre1', correo='$correo1', tel='$telefono1' WHERE cod=$codigo1");
        echo "<script>window.location= 'index.php'</script>";
    }
?>