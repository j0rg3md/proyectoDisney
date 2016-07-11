<?php

require_once("class.php");
$tra=new Trabajo();

$codigoParque=($_POST["codigoParque"]);
$hora_inicio=($_POST["hora_inicio"]);
$hora_fin=($_POST["hora_fin"]);
$dia=($_POST["dia"]);
$periodo=($_POST["periodo"]);

$sql ="insert into jnf_horario_parque (hp_hora_inicio,hp_hora_fin,hp_dia,hp_periodo,lugares) values(
'".$hora_inicio."','".$hora_fin."','".$dia."','".$periodo."',".$codigoParque.");";

$res=pg_exec($sql);
?>
