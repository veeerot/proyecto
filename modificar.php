<?php
    if(isset($_GET['modificar'])){
        $modificar_id = $_GET['modificar'];

        $consulta = "SELECT * FROM informacion WHERE id= '$modificar_id'";
        $ejecutar = mysqli_query($con, $consulta);

        $fila = mysqli_fetch_array($ejecutar);

        $nombre = $fila['nombre'];
        $correo = $fila['correo'];
        $telefono = $fila['telefono'];
        $mensaje = $fila['mensaje'];
    }
?>
<br />
<h2>Modifique sus datos</h2>
<form method="POST" action="">
<label> Nombre</label>
        <input type="text" name="nombre"  value="<?php echo $nombre; ?>"><br>
        <label> Email</label>
        <input type="text" name="correo"  value="<?php echo $correo; ?>"><br/>
        <label> Telefono</label>
        <input type="text" name="telefono"  value="<?php echo $telefono; ?>"><br/>
        <label> mensaje</label>
        <input type="text" name="mensaje"  value="<?php echo $mensaje; ?>"><br/>
        <input type="submit" name="actualizar"  value="ACTUALIZAR DATOS">
    </form>

<?php
    if(isset($_POST['actualizar'])){
        $actualizar_nombre = $_POST['nombre'];
        $actualizar_correo = $_POST['correo'];
        $actualizar_telefono = $_POST['telefono'];
        $actualizar_mensaje = $_POST['mensaje'];

        $actualizar = "UPDATE informacion SET nombre='$actualizar_nombre' , correo='$actualizar_correo' , telefono='$actualizar_telefono' , mensaje='$actualizar_mensaje' WHERE id='$modificar_id'";

        $ejecutar = mysqli_query($con, $actualizar);

        if($ejecutar){
            echo "<html>
                    <head> 
                        <script>alert('Datos actualizados!'); </script>
                        <script>window.open('../php/contactenos.php','_self');</script>
                    </head>
                    <body>
                    <body>
                </html>";    

        }
    }
?>