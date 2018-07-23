<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Coeus</title>
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
		<button class="dropdown-btn"><a href="">Registro</a> 
    		<i class="fa fa-caret-down"></i>
  					</button>
  			<div class="dropdown-container">
   				 <a href="empleado.php">Empleado</a>
    			 <a href="cliente.php">Cliente</a>
             </div>
	</div>

			<div id="branding">
				<h1><span class="highlight">Coeus</span></h1>
			</div> 
			<nav>
				<ul>
				<li class="current"><a href="index.html">Inicio</a></li>
				<li><a href="libros.php">Libros</a></li>
				<li><a href="servicios.html">Servicios</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	
	<div class="formulario">
		<h2>Registro de Empleados</h2>
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
			<p>
			<label>Fecha de Nacimiento</label><br>
			<input type="date" name="fecha_nacimiento">
			</p>
			<p>
			<label>Fecha de Ingreso</label><br>
			<input type="date" name="fecha_ingreso">
			</p>
			<p class="full">
			<button type="submit" name="submit">Registrar</button>
			</p>
		</form>
	</div> 

	

	<footer>
		<p>Coeus, Copyright &copy; 2018</p>
	</footer>

	<script src="script.js"></script>
	
</body>
</html>