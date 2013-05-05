<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>
	</title>
	<link rel="stylesheet" href="listado.css">
</head>
<body>
	<div id="wrapper">

		<div id="buscador">

			<div id="buscador-form">
				<form>
					<input type="text" name placeholder="Escribe algo">
					<input type="submit" value="Buscar">
				</form>
			</div>
			<div id="listado">
				<ul>

<?php 
require_once('./config.php');
header('Content-Type: text/html; charset=iso-8859-1');

$palabra = $_POST['palabra'];


$arregloJugadores = array();
$jugadoresEncontrados = array();





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
		$this->id = $id;
	}
}




$archivo=fopen("jugadores.txt","r") or
die("El archivo no se pudo abrir.");

$coincidencias[] = new StdClass;
$i=0;
$lineas = file('jugadores.txt');
foreach ($lineas as $numero => $linea) {
	$numero_de_linea = $numero + 1;


	$i++;
				//echo "Se ha encontrado coincidencia.";

	if(strpos($linea, $palabra))
	{
		list($nombre_completo, $lugar_nacimiento,$fecha_nacimiento,$edad,$pais_juega,$liga_juega,$club, $id) = explode( "\t", $linea);
		$arregloJugadores[] = new Jugador($nombre_completo, $lugar_nacimiento,$fecha_nacimiento,$edad,$pais_juega,$liga_juega,$club, $id);
	}



				//echo $nombre_completo.$lugar_nacimiento.$fecha_nacimiento.$edad.$pais_juega.$liga_juega.$club;
		//$jugador = "$apellido $nombre";
				//echo "Linea $numero_de_linea: $linea<br>";

  // echo "Linea $numero_de_linea: $linea<br>";
}

fclose($archivo);
echo "<pre>";
//print_r($arregloJugadores);
echo "</pre>";

mostrar($arregloJugadores);




function mostrar($Jugadores){


	foreach ($Jugadores as $key => $jugador)
	{
    //  $argumento = urlencode(serialize($jugador));
		print "<li>";
     // print "<a href='detalle.php?id=".$key."&".$argumento."'>";
		print "<a href='detalle.php?id=".$jugador->id."'>";

		print $jugador->nombre;
		print "</a>";
		print "</li>";
	}

}



?>

</ul>
</div>
<div id="footer">

</div>

</div>
</div>
</body>

</html>