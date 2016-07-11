<?php
require_once("class.php");
$tra=new Trabajo();
$dias=($_POST["dias"]);
$feha_estimada_visita=($_POST["fecha_estimada_visita"]);
$hotel=($_POST["hotel"]);
$expira=($_POST["expira"]);
$fecha_inicio_hotel=($_POST["fecha_inicio_hotel"]);
$fecha_fin_hotel=($_POST["fecha_fin_hotel"]);

    $sql ="insert into jnf_visitante (v_nombre,v_apellido,v_segundo_nombre,v_fecha_nac,v_genero,v_codigo_postal,v_correo,v_direccion,lugar,representante) values (
    '".$nombre."','".$apellido."','".$segundoNombre."','".$fecha_nacimiento."','".$genero."',".$codigoPostal.",'".$correo."','".$direccion."',".$pais.",(SELECT (MAX(v_codigo)-".$i.") representante FROM jnf_visitante));";
    $res=pg_exec($sql);

?>
