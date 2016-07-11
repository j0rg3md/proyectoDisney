<?php
require_once("class.php");
$tra=new Trabajo();

$codigoParque=($_POST["codigoP"]);


$sql = "delete from jnf_evento_especial where ee_codigo= '".$codigoParque."';";

$res=pg_exec($sql);

?>
<a href="index.php">Volver Atras</a>;
