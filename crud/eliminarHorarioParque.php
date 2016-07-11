<?php

require_once("class.php");
$tra=new Trabajo();

$codigo=($_POST["codigoHorario"]);


$sql = "delete from jnf_horario_parque where hp_codigo = ".$codigo.";";

$res=pg_exec($sql);
echo "Eliminado exitosamente";
?>
