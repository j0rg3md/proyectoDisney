<?php

require_once("class.php");
$tra=new Trabajo();
                 
$nombreModificar=($_POST["codigoA"]);				 
$nombre=($_POST["nombre"]);    
$descripcion=($_POST["descripcion"]);
$parque=($_POST["codigoP"]);
	

if ($nombre)
	{
		$sql= "update jnf_area set ar_nombre='".$nombre."' where ar_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($descripcion)
	{
		$sql= "update jnf_area set ar_descripcion='".$descripcion."' where ar_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($parque)
	{
		$sql= "update jnf_area set lugares='".$parque."' where ar_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
	
		
?>