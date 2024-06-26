<?php
include_once("conexion.php"); 
?>
<!DOCTYPE html>
<html lang="es">
    <head>    
        <title>Sistema de Gestión de Usuarios</title>
        <link href="../../assets/img/logo.png" rel="icon">
        <link href="../../assets/img/logo-grande.png" rel="apple-touch-icon">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
            <img src="../../assets/img/logo-grande.png" alt="Logo">
            <div id="barrabuscar">
                <form method="POST">
                    <input style="background: #2BAF16;" type="submit" value="Buscar" name="btnbuscar">
                    <input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270; Ingresar nombre de usuario">
                </form>
            </div>
            <tr>
                <th colspan="5">
                    <h1 style="color: #F0F0F8;">LISTAR USUARIOS</h1>
                </th>
                <th>
                    <a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a>
                </th>
            </tr>
            <tr>
                <th>Nro</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acción</th>
            </tr>
            <?php 
            if (isset($_POST['btnbuscar'])) {
                $buscar = $_POST['txtbuscar'];
                $queryusuarios = mysqli_query($conn, "SELECT cod, nom, correo, tel FROM poject_17_usuarios WHERE nom LIKE '".$buscar."%'");
            } else {
                $queryusuarios = mysqli_query($conn, "SELECT * FROM poject_17_usuarios ORDER BY cod ASC");
            }
            
            $numerofila = 0;
            while ($mostrar = mysqli_fetch_array($queryusuarios)) {    
                $numerofila++;
                echo "<tr>";
                echo "<td>".$numerofila."</td>";
                echo "<td>".$mostrar['cod']."</td>";
                echo "<td>".$mostrar['nom']."</td>";
                echo "<td>".$mostrar['correo']."</td>";    
                echo "<td>".$mostrar['tel']."</td>";  
                echo "<td style='width:26%'>
                        <a style='background: #F15931;' href=\"editar.php?cod=$mostrar[cod]\">Modificar</a> | 
                        <a style='background: #E32B2B;' href=\"eliminar.php?cod=$mostrar[cod]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nom]?')\">Eliminar</a>
                    </td>";           
                echo "</tr>";
            }
            ?>
        </table>
        <script>
            function abrirform() {
                document.getElementById("formregistrar").style.display = "block";
            }

            function cancelarform() {
                document.getElementById("formregistrar").style.display = "none";
            }
        </script>
        <div class="caja_popup" id="formregistrar">
            <form action="agregar.php" class="contenedor_popup" method="POST">
                <table>
                    <tr>
                        <th colspan="2">Nuevo usuario</th>
                    </tr>
                    <tr> 
                        <td>Nombre</td>
                        <td><input type="text" name="txtnombre" required></td>
                    </tr>
                    <tr> 
                        <td>Correo</td>
                        <td><input type="email" name="txtcorreo" required></td>
                    </tr>
                    <tr> 
                        <td>Teléfono</td>
                        <td><input type="number" name="txttelefono" required></td>
                    </tr>
                    <tr> 	
                        <td colspan="2">
                            <button style="background: #E32B2B;" type="button" onclick="cancelarform()">Cancelar</button>
                            <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>