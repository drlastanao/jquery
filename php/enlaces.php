<?php
require("config.php");
$link=new mysqli($servidor, $usuario, $contra,$database) ;
$query = 'SELECT id,enlace,texto,clicks,categorias FROM enlaces order by clicks desc';
$result = $link->query($query);
$resultadoOrdenado = array();
if ($result = $link->query($query)) {
    while ($line = $result->fetch_assoc()) {
        $objetoEnlace = array();
  	   	$objetoEnlace["id"]=$line['id'];
	   	$objetoEnlace["enlace"]=$line['enlace'];
	   	$objetoEnlace["texto"]=$line['texto'];
        $objetoEnlace["clicks"]=$line['clicks'];
	   	$objetoEnlace["categorias"]=$line['categorias'];
	   	/// inserta el objeto con los datos de registro, dentro del arreglo general
	   	array_push($resultadoOrdenado, $objetoEnlace);
    }
    $result->free();
}
$link->close();
echo json_encode($resultadoOrdenado, JSON_UNESCAPED_UNICODE );

?>