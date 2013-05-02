<?php 
require_once('./config.php');

$palabra = $_POST['palabra'];

$archivo = fopen("./jugadores.txt", "r");
$arregloJugadores = array();
$jugadoresEncontrados = array();


class Jugador
{
	private $nombre;

	public function __construct ($nombre)
	{
		$this->Nombre = $nombre;
	}
}


while(!feof($archivo))
{
	$arregloJugadores[] = new Jugador(fgets($archivo));
}

fclose($archivo);


echo "<pre>";
print_r($arregloJugadores);
echo "</pre>";

function buscar($termino)
{
	global $arregloJugadores;

	foreach ($arregloJugadores as $key => $value)
	{
		echo $termino;
		if($value->Nombre === $termino)
		{
			echo "llegue";
			global $jugadoresEncontrados;
			$jugadoresEncontrados[] = $value;
		}
	}
}

buscar($palabra);

echo "<pre>";
print_r($jugadoresEncontrados);
echo "</pre>";

?>