<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artesanias</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/titulos.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <!Icono de circulo de mas o plus que gira>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!letra de google fonts para el menu>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <! icono de desplazamiento para el menu>
    <link rel="stylesheet" href="../css/fontello.css">
    <!para que se vea en dispositiosmoviles>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
            <p><a href="../php/lugares_exoticos.php" >Lugares exóticos</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="../php/cultura_urbana.php" >Cultura urbana</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="../php/heavymetal_90.php" >Heavy metal</a></p>
          
                
        </div>    
            
        </li>
        
        <li><a href="../php/contactenos.php">Contacto <span class="icon icon-up-dir"></span></a></li>
    </ul>
    </nav>
    <!FIN DE LA LISTA DE NAVEGACION>
    <!contactenos de seleccion de imagenes>
    <form action="">
       
       <h1>Seleccionar Imagen</h1>
       <input type="text" placeholder="Titulo" class="title-image">
       <img src="../img/s2.jpg" class="image-select">
       <input type="button" value="Cargar Imagen" class="load-image">
       <input type="file" class="seleted">
       <input type="button" value="Cargar" class="upload">
       
   </form>
  
    <! INICIO DE GALARIA>

    <div class="shape"></div>
    <h1> Galeria de Artesanias</h1>
    <!Para crear diferentes figuras, para almacenar imagenes y texto >
    <div class="container-gallery">
        <div class="gallery">
            <!Crear una figura>
            <!figure contiene la imagen>
                <figure><h1>Tejidos</h1><img src="../img/s1.jpg"></figure>
                <figure><h1>Puntullismo</h1><img src="../img/s2.jpg"></figure>
                <figure><h1>Tigre</h1><img src="../img/s3.jpg"></figure>
                <figure><h1>Alfareros</h1><img src="../img/s4.jpg"></figure>
                <figure><h1>jarrones</h1><img src="../img/s5.jpg"></figure>
                <figure><h1>Virguenes</h1><img src="../img/s6.jpg"></figure>
                /
            </div>
            <p>las creaciones realizadas por los artesanos (una persona que realiza trabajos manuales). Es un tipo de arte en el que se trabaja fundamentalmente con las manos, moldeando diversos objetos con fines comerciales o meramente artísticos o creativos. Una de las características fundamentales de este trabajo es que se desarrolla sin la ayuda de máquinas o de procesos automatizados. Esto convierte a cada obra artesanal en un objeto único e incomparable, lo que le da un carácter sumamente especial.</p>
        
        </div>
    </div> 
        <i class="fas fa-plus btn-show"></i>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/script.js"></script>   
</body>

</html>
    </body>

</html>