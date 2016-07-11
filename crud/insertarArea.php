<?php

require_once("class.php");
$tra=new Trabajo();

$nombre=($_POST["nombre"]);
$descripcion=($_POST["descripcion"]);
$parque=($_POST["codigoP"]);


$sql= "insert into jnf_area (ar_nombre,ar_descripcion,lugares) values ('".$nombre."','".$descripcion."','".$parque."');";
$res=pg_exec($sql);

?>