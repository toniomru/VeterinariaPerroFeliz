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
  <p id="titulo">Contacto</p>
  <div class="formulario">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre y Apellido</label>
  <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Juan Perez">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Consulta</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<input type="submit">


<img src="imagenes/perrocontacto.jpg"></img>
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