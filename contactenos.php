<!DOCTYPE html>
<html lang="en">
<?php
//CONEXION A LA BASE DE DATOS---------------------------------//
    //variable de conexion
    $con = mysqli_connect("localhost","root","","catalogo") or die("error en la conexxion");
    
    ?>
<head>
    <meta charset="UTF-8">
    <title>contactenos</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/titulos.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <!letra de google fonts para el menu>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <! icono de desplazamiento para el menu>
    <link rel="stylesheet" href="../css/fontello.css">
    
</head>
<! cuerpo de la pagina>
<body>
<!encabezado, logotipos y etc>
<div class= "portada"><h2><br>Cultura a solo un   <strong>click</strong><br></h2>

</div>
  <br>
  <br>
    <!LISTA DEL MENU DE NAVEGACION>
  <br>
    <div class="navegacion">
    <nav>
    <ul>
        <!lista del menu y enlaces>
        <li><a href="../index.php">Inicio <span class="icon icon-up-dir"></span></a></li>
        
       <!Lista de los catalogos>
        <li>
            <a href="#">Catálogos <span class="icon icon-up-dir"></span></a>
            <!submenu de menu princial>
        <div class="submenu">
            <div class="submenu-items">
            <p><a href="../php/artesanias.php">Artesanias</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="../php/arte_moderno.php">Arte moderno</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="..php/lugares_exoticos.php" >Lugares exóticos</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="..php/cultura_urbana.php" >Cultura urbana</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="..php/heavymetal_90.php" >Heavy metal</a></p>
                
        </div>    
            
        </li>
        
        <li><a href="../php/contactenos.php">Contacto <span class="icon icon-up-dir"></span></a></li>
    </ul>
    </nav>
    <!FIN DE LA LISTA DE NAVEGACION>
   
    <! CUADRO DE IMAGENES>
    <h1>Deslice hacia abajo</h1>
    <div class="container-gallery">       
    <div class="main">
        <div class="slides">
            <img src="../img/1.jpg" alt="">
            <img src="../img/2.jpg" alt="">
            <img src="../img/3.jpg" alt="">
            <img src="../img/4.jpg" alt="">
            <img src="../img/5.jpg" alt="">
        </div>
    </div>
    <! slides, automatico>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/jquery.slides.js"></script>
    
    <script>
     $(function(){
        $(".slides").slidesjs({
    play: {
      active: true, //Genera los botones de play y stpo
        
      effect: "slide",// Puede ser  "slide" o"fade".
        
      interval: 5000,// Intervalo en milisegundos
        
      auto: true,// Puede cambiarse el estado a true y al abrir la pagina comienza automaticamente
        
      swap: true,// Muestra el boton de play y stop
        
      pauseOnHover: false,// [booleano] hace una pausa en una presentación de diapositivas en reproducción
        
      restartDelay: 2500, // [número] retraso de reinicio en la presentación inactiva
        
    }
  });
});
    </script>
         <!contactenos--------------------->

           <div>
        <h1> Contactenos</h1>
            <h2>Por favor, deja tus datos </h2>
            <br>
        <form method="POST" action="../php/contactenos.php">
            <label> Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre"><br/>
            <label> Email</label>
            <input type="text" name="correo" placeholder="Correo electronico"><br/>
            <label> Telefono</label>
            <input type="text" name="telefono" placeholder="Telefono"><br/>
            <label> mensaje</label>
            <input type="text" name="mensaje" placeholder="mensaje"><br/>
            <input type="submit" name="insert" placeholder="INSERTAR DATOS">
    
        </form>    
    </div>    
    <?php
    
//recogiendo los campos de las variables declaradas
        if(isset($_POST['insert'])){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $mensaje = $_POST['mensaje'];

            $insertar= "INSERT INTO informacion (nombre,correo,telefono,mensaje) VALUES ( '$nombre' , '$correo' , '$telefono' , '$mensaje')";
            // ejectar consukta
            $ejecutar = mysqli_query($con, $insertar);
            //validcion
            
                if($ejecutar){
                    echo "<html>
                            <head> 
                                <script>alert('Datos insertados!'); </script>
                                <script>window.open('../php/contactenos.php','_self');</script>
                            </head>
                            <body>
                            <body>
                        </html>";    
        
                }
        }
    ?>
    <!tabla para mostrar datos, no aplicable en esta actividad>
                <!--<!div style="text-align:center;">
                <br/><table border-radius=5px, border=1>
                    <tr><th>Id</th><th>Nombre</th><th>Correo</th><th>Telefono</th><th>mensaje</th>
                    </tr>
                    ?php
                        $consulta = "SELECT * FROM informacion";
                        $ejecutar = mysqli_query($con, $consulta);
                        $i = 0;
                        while ($fila = mysqli_fetch_array($ejecutar)){
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $correo = $fila['correo'];
                            $telefono = $fila['telefono'];
                            $mensaje = $fila['mensaje'];
                            $i++;
                    ?>
                    <tr>
                        <td>?php echo $id; ?></td>
                        <td>?php echo $nombre; ?></td>
                        <td>?php echo $correo; ?></td>
                        <td>?php echo $telefono; ?></td>
                        <td>?php echo $mensaje; ?></td>
                        <td><a href="contactenos.php?modificar=?php echo $id; ?>">Modificar</a></td>
                        <td><a href="contactenos.php?eliminar=?php echo $id; ?>">Eliminar</a></td>
                    </tr>
                        ?php } ?>
                </table>
                        </div>>
    <?php
    // incluir archivos
    if(isset($_GET['modificar'])){
        include("../php/modificar.php");
    
    }
    ?>
     <?php
    // incluir archivos
    if(isset($_GET['eliminar'])){
       
        $eliminar_id = $_GET['eliminar'];
        
        $eliminar = "DELETE FROM informacion WHERE id='$eliminar_id'";
       
        $ejecutar= mysqli_query($con, $eliminar);
        
        if($ejecutar){
            echo "<script>alert('Datos elminados!')</script>";
            echo "<script>window.open('../php/contactenos.php','_self')</script>";
        }

    }
    ?>

         
</body>

</html>