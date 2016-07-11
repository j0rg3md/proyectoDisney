<?php

require_once("class.php");
$tra=new Trabajo();

$nombre=($_POST["nombre"]);
$descripcion=($_POST["descripcion"]);
$estaturaM=($_POST["estaturaM"]);
$duracion = ($_POST["duracion"]);
$magic = ($_POST["magic"]);
$entrada = ($_POST["entrada"]);
$capacidad = ($_POST["capacidad"]);
$area = ($_POST["codigoA"]);
$condiciones = ($_POST["condiciones"]);
$categoria = ($_POST["categoria"]);
$edad_recomendada = ($_POST["edad_recomendada"]);
	
$sql ="insert into jnf_atraccion (a_nombre,a_descripcion,a_estatura_minima,a_duracion,a_extra_magic_hour,a_entrada_rapida,a_capacidad,area) values (
'".$nombre."','".$descripcion."','".$estaturaM."','".$duracion."','".$magic."','".$entrada."','".$capacidad."','".$area."');";
$res=pg_exec($sql);


for($i=0; $i<count($condiciones); $i++){
		$sql1 = "insert into jnf_cond_atraccion (atraccion,condicion) values(
		(select max (a_codigo) from jnf_atraccion),(select cc_codigo from jnf_condiciones_caracteristicas where cc_caracteristica = '".$condiciones[$i]."')); ";
		$res1 = pg_exec($sql1);
}

for($i=0; $i<count($categoria); $i++){
		$sql1 = "insert into jnf_categoria_atraccion (atraccion,categoria) values(
		(select max (a_codigo) from jnf_atraccion),(select c_codigo from jnf_categoria where c_nombre = '".$categoria[$i]."')); ";
		$res1 = pg_exec($sql1);
}

for($i=0; $i<count($edad_recomendada); $i++){
		$sql2 = "insert into jnf_edad_recomendada_atraccion (atraccion,edad_recomendada) values(
		(select max (a_codigo) from jnf_atraccion),(select er_codigo from jnf_edad_recomendada where er_tipo = 
		'".$edad_recomendada[$i]."')); ";
		$res2 = pg_exec($sql2);
}		


?>