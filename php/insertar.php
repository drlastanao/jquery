<?php
require("config.php");
$link=new mysqli($servidor, $usuario, $contra,$database);
$query = 'insert into registros_gym (minutos) values ('.$min.')';   
$result = $link->query($query);
$link->close();
?>