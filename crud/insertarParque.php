<?php

require_once("class.php");
$tra=new Trabajo();

$nombre=($_POST["nombre"]);
$descripcion=($_POST["descripcion"]);
$direccion=($_POST["direccion"]);
$fecha_fundacion = ($_POST["fecha_fundacion"]);
$tipo = "parque";
$lugar = ($_POST["lugar"]);





$sql ="insert into jnf_lugares (lu_nombre,lu_descripcion,lu_direccion,lu_fecha_fundado,lu_tipo,lugar) values ('".$nombre."','".$descripcion."','".$direccion."','".$fecha_fundacion."','".$tipo."',(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') );";

$res=pg_exec($sql);

?>
