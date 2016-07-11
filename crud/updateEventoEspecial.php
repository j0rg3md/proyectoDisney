<?php

require_once("class.php");
$tra=new Trabajo();
                 
$nombreModificar=($_POST["codigoA"]);				 
$nombre=($_POST["nombre"]);    
$descripcion=($_POST["descripcion"]);
$parque=($_POST["codigoP"]);
	

if ($nombre)
	{
		$sql= "update jnf_evento_especial set ee_nombre='".$nombre."' where ee_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($descripcion)
	{
		$sql= "update jnf_evento_especial set ee_descripcion='".$descripcion."' where ee_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($parque)
	{
		$sql= "update jnf_evento_especial set lugares='".$parque."' where ee_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
	
		
?>