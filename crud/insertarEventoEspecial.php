<?php

require_once("class.php");
$tra=new Trabajo();

$nombre=($_POST["nombre"]);
$descripcion=($_POST["descripcion"]);
$precio=($_POST["precio"]);
$duracion = ($_POST["duracion"]);
$parque = ($_POST["codigoP"]);

$sql = "insert into jnf_evento_especial (ee_nombre,ee_descripcion,ee_precio,ee_duracion,lugares) values ('".$nombre."','".$descripcion."','".$precio."','".$duracion."','".$parque."')";

$res=pg_exec($sql);

?>