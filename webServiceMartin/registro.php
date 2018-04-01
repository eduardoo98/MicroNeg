<?php
include('funciones.php');
$nombre=$_GET['nom_user'];
$contraseña=$_GET['pass'];
$email=$_GET['email'];
$telefono=$_GET['telefono'];
$dir=$_GET['direccion'];

ejecutarSQLCommand("INSERT INTO `Cliente` (`nom_user`,`pass`,`email`,`telefono`,`direccion`) values('$nombre','$contraseña','$email','$telefono','$dir')
    ON DUPLICATE KEY UPDATE 
    `nom_user`='$nombre',`pass`='$contraseña',`email`='$email',`telefono`='$telefono',`direccion`='$dir'");
?>