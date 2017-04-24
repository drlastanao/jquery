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

echo $arcount[3]." veces este mes  ".number_format($arminutos[3]/$arcount[3],0)." min de media <br>";
echo $arcount[2]." veces este año  ".number_format($arminutos[2]/$arcount[2],0)." min de media <br>";
echo $arcount[1]." veces ".number_format($arminutos[1]/$arcount[1],0)." min de media total <br>";
echo "Datos desde ".$arfecha[1];

$link->close();


?>