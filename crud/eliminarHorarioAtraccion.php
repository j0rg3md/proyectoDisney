<?php

require_once("class.php");
$tra=new Trabajo();

$codigoHorario=($_POST["codigoHorario"]);


$sql = "delete from jnf_horario_atraccion where ho_codigo = ".$codigoHorario.";";

$res=pg_exec($sql);
echo "Eliminado exitosamente";
?>
