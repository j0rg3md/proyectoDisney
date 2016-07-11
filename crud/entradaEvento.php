<?php
require_once("class.php");
$tra=new Trabajo();
$codigoEvento=($_POST["codigoEvento"]);
$codigoFecha=($_POST["codigoFecha"]);
$codigoVisitante=($_POST["codigo"]);

    $sql ="insert into jnf_boleto_visitante_horario_evento (horario_evento,visitante) values(".$codigoFecha.",".$codigoVisitante.");";
    $res=pg_exec($sql);
  //  echo "<h3 class='page-header'> Registro exitoso" </h3>";
?>


