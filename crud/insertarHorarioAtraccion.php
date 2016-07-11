<?php
require_once("class.php");
$tra=new Trabajo();

$codigoAtraccion=($_POST["codigoAtraccion"]);
$hora_inicio=($_POST["hora_inicio"]);
$hora_fin=($_POST["hora_fin"]);
$dia=($_POST["dia"]);

$sql ="insert into jnf_horario_atraccion (ho_hora_inicio,ho_hora_fin,ho_dia,atraccion) values(
'".$hora_inicio."','".$hora_fin."','".$dia."',".$codigoAtraccion.");";

$res=pg_exec($sql);
?>
