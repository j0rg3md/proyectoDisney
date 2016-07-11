<?php
require_once("class.php");
$tra=new Trabajo();

$codigoEvento=($_POST["codigoEvento"]);
$hora_inicio=($_POST["hora_inicio"]);
$hora_fin=($_POST["hora_fin"]);
$dia=($_POST["dia"]);

$sql ="insert into jnf_horario_evento (he_hora_inicio,he_hora_fin,he_dia,lugares) values(
'".$hora_inicio."','".$hora_fin."','".$dia."',".$codigoEvento.");";

$res=pg_exec($sql);
?>
