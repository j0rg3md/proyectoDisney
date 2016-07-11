<?php
require_once("class.php");
$tra=new Trabajo();

$codigoArea=($_POST["codigoP"]);


$sql = "delete from jnf_restaurant where r_codigo= '".$codigoArea."';";

$res=pg_exec($sql);

?>
<a href="index.php">Volver Atras</a>;