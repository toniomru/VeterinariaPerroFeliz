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
  <p id="titulo">Servicios</p>

  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/higiene.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size:40px;">¿Sabías que...</h5>
        <p style="font-size:30px;">¿Sabías que la higiene diaria del perro es de vital importancia en su salud?
</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/parasitos.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size:40px;">La higiene es importante</h5>
        <p style="font-size:30px;">Una buena higiene es el primer método de prevención contra infecciones, enfermedades y parásitos y además mejora el aspecto del animal.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/cuidado.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size:40px;">Cuidados en Casa</h5>
        <p style="font-size:30px;">Tenés que saber que podés contribuir al estado de su piel, pelo, uñas, oídos, ojos y boca desde tu casa.</p>
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
<br><br>
<div class="row row-cols-1 row-cols-md-2 g-4" style="padding-left:150px; padding-bottom:20px;">
  <div class="col">
    <div class="card">
      <img src="imagenes/consulta_médica.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Servicio Veterinario</h5>
        <p class="card-text">Nuestro servicio de consulta medica incluye Vacunación, Diagnostico y preescripción de medicamentos  y Tratamiento de hormonas.</p>
        <a href="formconsulta.php" class="btn btn-primary">Ir a consulta</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imagenes/acicalamiento.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Acicalamiento</h5>
        <p class="card-text">En nuestro servicio de acicalamiento usamos los mejores productos para que tu mascota disfrute su limpieza.</p>
        <a href="formacicalamiento.php" class="btn btn-primary">Ir a Acicalamiento</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imagenes/estacionamiento.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Estacionamiento</h5>
        <p class="card-text">Como servicio complementario y debido a la alta demanda contamos con estacionamiento exclusivo para nuestros clientes.</p>
        <a href="formestacionamiento.php" class="btn btn-primary">Ir a estacionamiento</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imagenes/guardias.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Guardia</h5>
        <p class="card-text">Nuestra guardia agil es uno de nuestros puntos fuertes, contamos con profesionales al instante.</p>
        <a href="formguardia.php" class="btn btn-primary">Ir a Guardia</a>
      </div>
    </div>
  </div>
</div>
	</section>
	<section class="cajacontacto">
	
	<div class="card mb-3" style="max-width: 540px; ">
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