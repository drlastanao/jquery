<?php
require("config.php");
$link=new mysqli($servidor, $usuario, $contra,$database) ;
$query = 'SELECT id,txtcategoria FROM categorias order by id asc';
$result = $link->query($query);
$resultadoOrdenado = array();
if ($result = $link->query($query)) {
    while ($line = $result->fetch_assoc()) {
        $objetoCategoria = array();
  	   	$objetoCategoria["id"]=$line['id'];
	   	$objetoCategoria["txtcategoria"]=$line['txtcategoria'];
	   	/// inserta el objeto con los datos de registro, dentro del arreglo general
	   	array_push($resultadoOrdenado, $objetoCategoria);
    }
    $result->free();
}
$link->close();
echo json_encode($resultadoOrdenado, JSON_UNESCAPED_UNICODE );

?>