<?php
//Recibiendo usuario y pas 
$usu=$_REQUEST['usu'];
$pas=$_REQUEST['pas'];


$cnx=new PDO("mysql:host=localhost;dbname=microneg","root","qwertyas1234");
$res=$cnx->query("select * from cliente where nom_user='$usu' and pass='$pas'");

$datos=array();

foreach ($res as $row) {
    $datos[]=$row;
}
echo json_encode($datos);
?>