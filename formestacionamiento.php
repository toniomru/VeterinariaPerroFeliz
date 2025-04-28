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
 
<div class="container">
	<header>
  <a href="unidad3.php"><p class="actividades">Actividades</p></a>


	<nav>
  <a href="index.php"><div id="logo"></div></a>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
  <p id="titulo">Estacionamiento</p>
  
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
  
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="imagenes/estacionamiento.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size:30px;">Estacionamiento</h5>
        <p style="font-size:20px;">Contamos con un amplio estacionamiento que es seguro para que tu única preocupación sea tu mejor amigo y no en donde vas a estacionar tu auto.</p>
      </div>
    </div>
  
  </div>
  
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