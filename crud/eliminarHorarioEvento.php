<?php
require_once("class.php");
$tra=new Trabajo();

$codigoHorario=($_POST["horario"]);
$count = count($codigoHorario);

         for ($i = 0; $i < $count; $i++) {
          $sql = "delete from jnf_horario_evento where he_codigo = ".$codigoHorario[$i].";";
          $res=pg_exec($sql);
        }

echo "Eliminado exitosamente";
?>
