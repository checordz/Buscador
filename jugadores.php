<?php 


$arregloJugadores = array();
$jugadoresEncontrados = array();



$id = 0;

class Jugador
{
/*	private $nombre;
	private $lugar;
	private $fecha;
	private $edad;
	private $pais;
	private $liga;
	private $club;*/

	public function __construct ($nombre,$nacimiento, $fecha, $edad, $pais, $liga, $club)
	{
		
		$this->nombre = $nombre;
		$this->lugar = $nacimiento;
		$this->fecha = $fecha;
		$this->edad = $edad;
		$this->pais = $pais;
		$this->liga = $liga;
		$this->club = $club;
	}
}



	$archivo=fopen("jugadores_prueba.txt","r") or
			die("El archivo no se pudo abrir.");
		
    $coincidencias[] = new StdClass;
	$i=0;
	$lineas = file('jugadores_prueba.txt');
  foreach ($lineas as $numero => $linea) {
           $numero_de_linea = $numero + 1;
	
	
				$i++;


				list($nombre_completo, $lugar_nacimiento,$fecha_nacimiento,$edad,$pais_juega,$liga_juega,$club) = explode( "\t", $linea);

				$arregloJugadores[] = new Jugador($nombre_completo, $lugar_nacimiento,$fecha_nacimiento,$edad,$pais_juega,$liga_juega,$club);

			
}

fclose($archivo);




?>