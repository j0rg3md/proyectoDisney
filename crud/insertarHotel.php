<?php

require_once("class.php");
$tra=new Trabajo();

$nombre=($_POST["nombre"]);
$descripcion=($_POST["descripcion"]);
$direccion=($_POST["direccion"]);
$fecha_fundacion = ($_POST["fecha_fundacion"]);
$tipo = "hotel";
$lugares = ($_POST["codigoP"]);





$sql ="insert into jnf_lugares (lu_nombre,lu_descripcion,lu_direccion,lu_fecha_fundado,lu_tipo,lugares) values ('".$nombre."','".$descripcion."','".$direccion."','".$fecha_fundacion."','".$tipo."','".$lugares."');";

$res=pg_exec($sql);

?>
