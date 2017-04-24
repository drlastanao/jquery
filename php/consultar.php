<?php
require("config.php");
$link=new mysqli($servidor, $usuario, $contra,$database) ;
$query = 'SELECT fecha,minutos FROM registros_gym where fecha>=cast(now() as date)';
$result = $link->query($query);
$minutos=0;
$fecha=0;
if ($result = $link->query($query)) {
        
    while ($line = $result->fetch_assoc()) {
        $fecha=$line["fecha"];
        $minutos=$line["minutos"];
    }
    $result->free();
}
$link->close();
?>