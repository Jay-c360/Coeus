<?php 

include("persona.php");


	
	class cliente 
	{
		
		protected $id_cliente;
		protected $fecha_registro;

		public function __construct($id_cliente,$fecha_registro){
			$this->id_cliente = $id_cliente;
			$this->fecha_registro = $fecha_registro;
		}

		public function getId_cliente(){
		return $this->id_cliente;
	}

	public function setId_cliente($id_cliente){
		$this->id_cliente = $id_cliente;
	}

	public function getFecha_registro(){
		return $this->fecha_registro;
	}

	public function setFecha_registro($fecha_registro){
		$this->fecha_registro = $fecha_registro;
	} 

	public function RegistrarCliente(){
		$persona = new persona;
		$persona
	}
	

	}

 ?>