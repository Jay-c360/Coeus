<?php 
	include("../php/persona.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Servicios</title>
	<link rel="stylesheet" href="./css/estilos.css">
</head>
<body>

	<header>
		<div class="container">
				<span class="open-slide">
			<a href="#" onclick="OpenSlideMenu()">
				<svg Width="30" height="30">
					<path d="M0,5 30,5" stroke="#fff"
					stroke-width="5"/>
					<path d="M0,14 30,14" stroke="#fff"
					stroke-width="5"/>
					<path d="M0,23 30,23" stroke="#fff"
					stroke-width="5"/>
				</svg>
			</a>
		</span>

		<!-----------------------SideMenu-------------->

	<div id="side-menu" class="side-nav">
		<a href=# class="btn-close" onclick="CloseSlideMenu()">&times;</a>
		<a href="">Prestamos</a>
		<a href="">Entregas Tardias</a>
		<a href="">Multas</a>
		<a href="">Gestion Prestamos</a>
		<a href="">Facturacion</a>
	</div>

			<div id="branding">
				<h1><span class="highlight">Coeus</span></h1>
			</div> 
			<nav>
				<ul>
				<li ><a href="index.html">Inicio</a></li>
				<li class="current"><a href="libros.php">Libros</a></li>
				<li ><a href="servicios.html">Servicios</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="formulario">
		<h2>Registro de Personas</h2>
		<form action=" " method="POST">
			<p>
			<label> Primer Nombre</label>
			<input type="text" name="p_nombre">
			</p>
			<p>
			<label> Segundo Nombre</label>
			<input type="text" name="s_nombre">
			</p>
			<p>
			<label>Primer Apellido</label>
			<input type="text" name="p_apellido">
			</p>
			<p>
			<label>Segundo Apellido</label>
			<input type="text" name="s_apellido">
			</p>
			<p>
			<label>Correo Electronico</label>
			<input type="email" name="correo">
			</p>
			<p>
			<label>Numero de Identidad</label>
			<input type="int" name="num_cedula">
			</p>
			<p class="full">
			<label>Fecha de Nacimiento</label><br>
			<input type="date" name="fecha_nacimiento">
			</p>
			<p class="full">
			<button type="submit" name="submit">Registrar</button>
			</p>
		</form>
	</div> 

		<?php 


	if(isset($_POST['submit']))
	{
		$_POST['p_nombre'];
		$_POST['s_nombre'];
		$_POST['p_apellido'];
		$_POST['s_apellido'];
		$_POST['correo'];
		$_POST['num_cedula'];
		$_POST['fecha_nacimiento'];

		$persona = new persona($_POST['p_nombre'],
							  $_POST['s_nombre'],
							  $_POST['p_apellido'],
							  $_POST['s_apellido'],
							  $_POST['correo'],
							  $_POST['num_cedula'],
							  $_POST['fecha_nacimiento']);

		$persona->RegistrarPersona();

	}

 ?>

	<footer>
		<p>Coeus, Copyright &copy; 2018</p>
	</footer>
	<script src="script.js"></script>
</body>
</html> 
