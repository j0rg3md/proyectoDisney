<?php
require_once("class.php");
$tra=new Trabajo();
$codigoAtraccion=($_POST["codigoAtraccion"]);
$codigoFecha=($_POST["codigoFecha"]);
$codigoVisitante=($_POST["codigo"]);
$cantidad=($_POST["cantidad"]);
$hora=($_POST["hora"]);


    $sql ="insert into jnf_boleto_entrada_rapida (ber_fecha,ber_hora_inicio,ber_cantidad,atraccion) values(
  (select ho_dia from jnf_horario_atraccion where ho_codigo = '".$codigoFecha."'),'".$hora."',".$cantidad.",".$codigoAtraccion.");";
    $res=pg_exec($sql);

    $sql1= "insert into jnf_visitante_boleto_entrada_rapida (visitante,boleto_entrada_rapida) values (
    ".$codigoVisitante.",(select max(ber_codigo) from jnf_boleto_entrada_rapida));";
    $res1 = pg_exec($sql1);
?>
