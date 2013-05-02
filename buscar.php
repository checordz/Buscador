<?php 
echo "busqueda.php";

<<<<<<< HEAD
echo "esto es una prueba";


$palabra = $_POST['palabra'];

=======
$archivo = fopen("./jugadores", "w+");
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
>>>>>>> buscar.php

?>