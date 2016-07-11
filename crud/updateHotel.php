<?php

require_once("class.php");
$tra=new Trabajo();
                 
$nombreModificar=($_POST["codigoH"]);				 
$nombre=($_POST["nombre"]);    
$descripcion=($_POST["descripcion"]);
$direccion=($_POST["direccion"]);    
$fechaf=($_POST["fecha_fundacion"]);
$parque=($_POST["codigoP"]);
	

if ($nombre)
	{
		$sql= "update jnf_lugares set lu_nombre='".$nombre."' where lu_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($descripcion)
	{
		$sql= "update jnf_lugares set lu_descripcion='".$descripcion."' where lu_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}	
if ($direccion)
	{
		$sql= "update jnf_lugares set lu_direccion='".$direccion."' where lu_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($fechaf)
	{
		$sql= "update jnf_lugares set lu_fecha_fundado='".$fechaf."' where lu_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($parque <> 0)
	{
		$sql= "update jnf_lugares set lugares='".$parque."' where lu_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}


?>
<td><a href="index.php">Volver Atras</a></td>