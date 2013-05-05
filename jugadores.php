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

	public function __construct ($nombre,$nacimiento, $fecha, $edad, $pais, $liga, $club, $id)
	{
		
		$this->nombre = $nombre;
		$this->lugar = $nacimiento;
		$this->fecha = $fecha;
		$this->edad = $edad;
		$this->pais = $pais;
		$this->liga = $liga;
		$this->club = $club;
		$this->id=$id;
	}

}



	$archivo=fopen("lista_jugadores.txt","r") or
			die("El archivo no se pudo abrir.");
		
    $coincidencias[] = new StdClass;
	$i=0;
	$lineas = file('lista_jugadores.txt');
  foreach ($lineas as $numero => $linea) {
           $numero_de_linea = $numero + 1;
	
	
				$i++;


				list($nombre_completo, $lugar_nacimiento,$fecha_nacimiento,$edad,$pais_juega,$liga_juega,$club, $id) = explode( "\t", $linea);

				$arregloJugadores[] = new Jugador($nombre_completo, $lugar_nacimiento,$fecha_nacimiento,$edad,$pais_juega,$liga_juega,$club,$id);

			
}

fclose($archivo);




?>