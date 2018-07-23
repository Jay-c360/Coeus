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
		echo $_POST['p_nombre'];
		echo $_POST['s_nombre'];
		echo $_POST['p_apellido'];
		echo $_POST['s_apellido'];
		echo $_POST['correo'];
		echo $_POST['num_cedula'];
		echo $_POST['fecha_nacimiento'];
	}

 ?>

	<footer>
		<p>Coeus, Copyright &copy; 2018</p>
	</footer>
	
</body>
</html> 
