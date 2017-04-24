<?php
require("config.php");
$arminutos=array();
$arfecha=array();
$arcount=array();

$link=new mysqli($servidor, $usuario, $contra,$database);

function consulta($link,$query,$contador,&$arfecha,&$arminutos,&$arcount)
{
$result = $link->query($query);
if ($result = $link->query($query)) {
    while ($line = $result->fetch_assoc()) {
        $arfecha[$contador]=$line["fecha"];
        $arminutos[$contador]=$line["minutos"];
        $arcount[$contador]=$line["count"];
    }
    $result->free();
}
}


$query = 'select min(fecha) fecha,count(*) count,sum(minutos) minutos from registros_gym';
consulta($link,$query,1,$arfecha,$arminutos,$arcount);

$query = "select min(fecha) fecha,count(*) count,sum(minutos) minutos from registros_gym where fecha>='".date("Y")."-01-01'";
consulta($link,$query,2,$arfecha,$arminutos,$arcount);

$query = "select min(fecha) fecha,count(*) count,sum(minutos) minutos from registros_gym where fecha>='".date("Y")."-".date("m")."-01'";
consulta($link,$query,3,$arfecha,$arminutos,$arcount);

echo $arcount[3]." veces este mes con una media de ".$arminutos[3]/$arcount[3]." minutos <br>";
echo $arcount[2]." veces este año con una media de ".($arminutos[2]/$arcount[2])." minutos <br>";
echo $arcount[1]." veces con una media de ".$arminutos[1]/$arcount[1]." minutos <br>";
echo "Datos desde ".$arfechas[1];

$link->close();


?>