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
  <p id="titulo">Servicio Veterinario</p>
  <br>
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/vacunación.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Vacunación</h5>
        <p style="color:black; font-weight:bold;">¡Protege a tu amigo! Vacunación completa para tu mascota. En perro feliz entendemos lo importante que es la salud y el bienestar de tu mascota, es por eso que ofrecemos servicio completo de vacunación.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/medicamentos.png" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Diagnóstico y prescripción de medicamentos:</h5>
        <p style="color:black; font-weight:bold;">El veterinario, tras establecer el diagnóstico ( las posibles causas que afectan a tu mascota), se elaborará la prescripción adecuado para la pronta recuperación de tu mascota </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/hormonas.png" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Tratamiento de hormonas:</h5>
        <p style="color:black; font-weight:bold;">Tu perro ya es grande y necesita levantar la libido te ofrecemos nuestro tratamiento de hormonas patentado para que vuelva a ser el perro del antes .</p>
      </div>
    </div>
  
  <div class="carousel-item">
   <img src="imagenes/cirugía.png" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Cirugías</h5>
        <p style="color:black; font-weight:bold;">Cuidado quirúrgico para tu mascota. Contamos con especialistas médicos capacitados para abordar una amplia gama de necesidades quirúrgicas para tu perro.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="imagenes/castración.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black; font-weight:bold;">Castración/ esterilización:</h5>
        <p style="color:black; font-weight:bold;">Tomar relaciones responsables en relación a la salud de tu mascota es fundamental. Contamos con equipos veterinarios equipados con tecnología moderna para garantizar una correcta castración y esterilización.</p>
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