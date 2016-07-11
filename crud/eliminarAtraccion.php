<?php
require_once("class.php");
$tra=new Trabajo();

$codigoAtraccion=($_POST["codigoA"]);


$sql = "delete from jnf_atraccion where a_codigo= '".$codigoAtraccion."';";

$res=pg_exec($sql);

?>
<a href="index.php">Volver Atras</a>;
