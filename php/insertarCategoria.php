<?php
require("config.php");

$categoria=$_REQUEST['categoria'];

$link=new mysqli($servidor, $usuario, $contra,$database);
$query = 'insert into categorias (txtcategoria) values ("'.$categoria.'")';   
$result = $link->query($query);
$link->close();
header('Location: ../enlaces.html');

?>