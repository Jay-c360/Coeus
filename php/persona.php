<?php 

include("conexion.php"); 


class persona
{ 

	protected $id_persona = 8;
	protected $p_nombre; 
	protected $s_nombre;
	protected $p_apellido;
	protected $s_apellido;
	protected $correo;
	protected $num_cedula;
	protected $fecha_nacimiento;
 


		public function __construct($p_nombre,$s_nombre,$p_apellido,$s_apellido,$correo,$num_cedula,$fecha_nacimiento){
			$this->p_nombre = $p_nombre;
			$this->s_nombre = $s_nombre;
			$this->p_apellido = $p_apellido;
			$this->s_apellido = $s_apellido;
			$this->correo = $correo;
			$this->num_cedula = $num_cedula;
			$this->fecha_nacimiento = $fecha_nacimiento;
		}
	


				 public function getP_nombre(){
			  return $this->p_nombre;
			 }

			 public function setP_nombre($p_nombre){
			  $this->p_nombre = $p_nombre;
			 }

			 public function getS_nombre(){
			  return $this->s_nombre;
			 }

			 public function setS_nombre($s_nombre){
			  $this->s_nombre = $s_nombre;
			 }

			 public function getP_apellido(){
			  return $this->p_apellido;
			 }

			 public function setP_apellido($p_apellido){
			  $this->p_apellido = $p_apellido;
			 }

			 public function getS_apellido(){
			  return $this->s_apellido;
			 }

			 public function setS_apellido($s_apellido){
			  $this->s_apellido = $s_apellido;
			 }

			 public function getCorreo(){
			  return $this->correo;
			 }

			 public function setCorreo($correo){
			  $this->correo = $correo;
			 }

			 public function getNum_cedula(){
			  return $this->num_cedula;
			 }

			 public function setNum_cedula($num_cedula){
			  $this->num_cedula = $num_cedula;
			 }

			 public function getFecha_nacimiento(){
			  return $this->fecha_nacimiento;
			 }

			 public function setFecha_nacimiento($fecha_nacimiento){
			  $this->fecha_nacimiento = $fecha_nacimiento;
			 } 


			 public function RegistrarPersona(){
			 	$conexion = new conexion;
			 	$sql = "INSERT INTO persona(id_persona,p_nombre, s_nombre, p_apellido, s_apellido, correo,num_cedula,fecha_nacimiento)
					VALUES ($this->id_persona,'$this->p_nombre','$this->s_nombre','$this->p_apellido','$this->s_apellido','$this->correo','$this->num_cedula','$this->fecha_nacimiento');";
				$conexion->consulta($sql);
				if(!$conexion->consulta($sql))
				{
					echo "error";
				}else{
					echo "wow";
					return $this->id_persona++;
				}
			 }


	
}


 ?>