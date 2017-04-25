<?php
require("config.php");

$link=new mysqli($servidor, $usuario, $contra,$database);

$enlace=$_REQUEST['enlace'];
$texto=$_REQUEST['texto'];
$categorias=$_REQUEST['categorias'];

$query = 'insert into enlaces (enlace,texto,categorias) values ("'.$enlace.'","'.$texto.'","'.$categorias.'")';   
$result = $link->query($query);
$link->close();
header('Location: ../enlaces.html');

?>