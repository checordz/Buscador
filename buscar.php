<?php 
header("Content-Type: text/html;charset=UTF-8");

$palabra = $_POST['palabra'];

$archivo = fopen("./jugadores.txt", "r");
$arregloJugadores = array();

/**
class Jugador
{
	private $nombre;

	public function ___construct ($nombre)
	{
		$this->nombre = $nombre;
	}
}
**/

while(!feof($archivo))
{
	echo fgets($archivo);
}

fclose($archivo);


?>