<?php 
		
		
		class Conexion

		{
			private $connString='host=localhost user=postgres dbname=coeus password=1234';
			protected $dbcon; 
			protected $stat;

			public function __construct()
			{
				$this->dbcon = pg_connect($this->connString);
				$this->stat = pg_connection_status($this->dbcon);

			}

			public function consulta($sql)
			{
				$query = pg_query($this->dbcon,$sql);
				/*if(!$query)
				{
					echo "No se pudo ejecutar la consulta";
				}else
				{
					echo "Consulta realizada";
				}*/
			}
			
		}
		
	
/*
		$dbconn = pg_connect('host=localhost user=postgres dbname=coeus password=1234');
		

		$stat = pg_connection_status($dbconn);

	

			if ($stat === PGSQL_CONNECTION_OK)
			{
				echo "Estado de Conexion:ok";
			}else
			{
				echo "No se a Podido Conectar";
			} 

		function EjecutarConsulta($sql)
		{
				global $dbconn;
				$query = pg_query($dbconn,$sql);

		} 

		function EjecutarConsultaFila($sql)
		{
			global $dbconn;
			$query = pg_query($dbconn,$sql);
			$fila = pg_fetch_array($query);
			return $fila;
		}
*/

 ?>