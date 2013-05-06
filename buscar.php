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
$datos = $linea;
//$linea = strtolower($linea);
//$utf = strtolower($palabra);
$utf = sanear_string($palabra);
$linea= utf8_encode($linea);
$linea = sanear_string($linea);

		$i++;
				//echo "Se ha encontrado coincidencia.";
		
				if(strpos($linea, $utf) !==FALSE )
				{
				list($nombre_completo, $lugar_nacimiento,$fecha_nacimiento,$edad,$pais_juega,$liga_juega,$club, $id) = explode( "\t", $datos);
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
		//$ID = (string)$jugador->id;
		
		//echo $ID;
    //  $argumento = urlencode(serialize($jugador));
      print "<li>";
     // print "<a href='detalle.php?id=".$key."&".$argumento."'>";
      print "<a href='detalle.php?id=".$jugador->id."'>";

      print $jugador->nombre;
      print "</a>";
      print "</li>";
    }

}



function sanear_string($string)
{

    $string = trim($string);

    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );

    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );

    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );

    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );

    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );

    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C',),
        $string
    );

 


    return $string;
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