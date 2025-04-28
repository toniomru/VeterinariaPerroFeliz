<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--Boostrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<!--Boostrap CSS-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos3.css">

	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">
</head>
 
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<div class="container">
	<header>
  <a href="unidad3.php"><p class="actividades">Actividades</p></a>


	<nav>
  <a href="index.php"><div id="logo"></div></a>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
  <p id="titulo">Acicalamiento</p>
  <br>
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/lavado.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Lavado a mano</h5>
        <p style="color:black; font-weight:bold;">Sabemos que usted quiere lo mejor para su mascota por eso le ofrecemos el mejor tratamiento de lavado a mano, con productos patentados, atendido por el mejor personal especializado.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/pedicura.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Pedicura</h5>
        <p style="color:black; font-weight:bold;"> Hacemos  lima de uñas para cortar con suavidad las uñas de tus mascotas, de manera rápida y sencilla en cualquier lugar sin el dolor causado por un cortauñas tradicional. Permite mantener las uñas de las patas de tu mascota suaves al tacto.
</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/pulgas.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Baño y tratamiento contra pulgas</h5>
        <p style="color:black; font-weight:bold;">Tu perro no puede deshacerse de las pulgas? veni y traelo a PerroFelizy lo vamos a atender en nuestro módulo sanitario donde también le hacemos una limpieza  
.</p>
      </div>
    </div>
  
  <div class="carousel-item">
   
      <img src="imagenes/corteclean.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Corte de pelo</h5>
        <p style="color:black; font-weight:bold;">Por que su perro merece verse bien, le ofrecemos un cambio de look en nuestras instalaciones con los mejores cuidados, contamos con un ambiente adecuado para que su perro se relaje y tenga el mejor trato,sin uso de sedantes.</p>
      </div>
    </div>
    <div class="carousel-item">
    
      <img src="imagenes/teñido.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Teñido de pelo</h5>
        <p style="color:black; font-weight:bold;">¡Un pelaje brillante para tu mascota! El pelaje de tu mascota es reflejo de su salud y bienestar en general. Brindamos servicios de restauración y revitalización de pelo.
</p>
      </div>
    </div>
    <div class="carousel-item">
    
      <img src="imagenes/dental.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Limpieza dental</h5>
        <p style="color:black; font-weight:bold;">¡Tu perro también puede sonreír! la salud bucal es un factor importante por eso con nuestro  barniz protector patentado para que tenga dientes más blancos y frescos con olor a menta y para él tiene sabor a alimento, además esto no es tóxico para tu perro, que esperas para probarlo? traelo  está  a garantizarlo.</p>
      </div>
    </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



 
	
	</section>
	<section class="cajacontacto">
	
	<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="imagenes/perro4.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Contacto</h5>
        <p class="card-text"><br><img src="imagenes/logogmail.png" width="20px">grupo4@gmail.com<br><br><img src="imagenes/logowpp.png" width="20px"> 3816991467<br><br>	<img src="imagenes/logoweb.png" width="20px"> veterinariaperrofeliz.com</p>
        
      </div>
    </div>
  </div>
</div>

<div class="redes">
  <a href=""><img src="imagenes/facebook.png" width="100px" ></img></a>
  <a href=""><img src="imagenes/wpp.png" width="100px" ></img></a>
  <a href=""><img src="imagenes/instagram.png" width="100px" ></img></a>
  </div>
	<footer>
	<a href="">Grupo 4- Organizacion empresarial y modelo de negocios</a>
	</footer>
 
</div>
</body>
</html>