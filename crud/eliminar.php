<?php
require_once("class.php");
$tra=new Trabajo();

$codigoParque=($_POST["codigoP"]);


$sql = "delete from jnf_lugares where lu_codigo= '".$codigoParque."';";

$res=pg_exec($sql);

?>
<a href="index.php">Volver Atras</a>;

