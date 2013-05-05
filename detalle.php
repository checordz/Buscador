<?php

require_once('./jugadores.php');

$id = $_GET['id'];


//$dato = $arregloJugadores[0]->nombre;

echo $arregloJugadores[$id]->nombre."<br />";
echo $arregloJugadores[$id]->lugar."<br />";
echo $arregloJugadores[$id]->edad."<br />";
echo $arregloJugadores[$id]->fecha."<br />";
echo $arregloJugadores[$id]->pais."<br />";
echo $arregloJugadores[$id]->liga."<br />";
echo $arregloJugadores[$id]->club."<br />";
echo "<a href='Home.php'>Ir al buscador</a>";
?>