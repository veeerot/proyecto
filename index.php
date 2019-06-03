<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalogo</title>
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/titulos.css">
    <link rel="stylesheet" href="./css/inicio.css">
   
    <!letra de google fonts para el menu>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <! icono de desplazamiento para el menu>
    <link rel="stylesheet" href="css/fontello.css">
    
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
        <li><a href="./index.php">Inicio <span class="icon icon-up-dir"></span></a></li>
        
       <!Lista de los catalogos>
        <li>
            <a href="#">Catálogos <span class="icon icon-up-dir"></span></a>
            <!submenu de menu princial>
        <div class="submenu">
            <div class="submenu-items">
            <p><a href="./php/artesanias.php">Artesanias</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="./php/arte_moderno.php">Arte moderno</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="./php/lugares_exoticos.php">Lugares exóticos</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="./php/cultura_urbana.php">Cultura urbana</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="./php/heavymetal_90.php">Heavy metal</a></p>
            </div> 
           
        </div>    
            
        </li>
        
        <li><a href="./php/contactenos.php">Contacto <span class="icon icon-up-dir"></span></a></li>
    </ul>
    </nav>
    <!FIN DE LA LISTA DE NAVEGACION>

    <! CUADRO DE IMAGENES>
    <h1>el MoMA catalogos</h1>
    <div class="container-gallery">
    <div class="main">
        <div class="slides">
            <img src="./img/1.jpg" alt="">
            <img src="./img/2.jpg" alt="">
            <img src="./img/3.jpg" alt="">
            <img src="./img/4.jpg" alt="">
            <img src="./img/5.jpg" alt="">
        </div>
    </div>
    <! slides, automatico>
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/jquery.slides.js"></script>
    
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
    <div >
      <br>
      <p>Cultura es todo complejo que incluye el conocimiento, el arte, las creencias, la ley, la moral, las costumbres y todos los hábitos y habilidades adquiridos por el hombre no sólo en la familia, sino también al ser parte de una sociedad como miembro que es.</p>
      <br>
      <p>Por ello, a traves de Cultura a un solo click.</p>   
      <br>      
      <p>Te ofrecemos una serie de catalogos donde puedes admirar, apreciar la cultura que te rodea, y de diferentes tipos</p>
      <p>Ademas que puedes contactarnos para darte informacion de inquietudes y curiosidades</p>
    </div>
</body>

</html>