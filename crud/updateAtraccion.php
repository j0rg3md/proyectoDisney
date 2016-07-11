<?php

require_once("class.php");
$tra=new Trabajo();
                 
$nombreModificar=($_POST["codigoA"]);				 
$nombre=($_POST["nombre"]);    
$descripcion=($_POST["descripcion"]);
$estaturaM=($_POST["estaturaM"]);    
$duracion=($_POST["duracion"]);
$magicS=($_POST["magicS"]);
$magicN=($_POST["magicN"]);
$entradaS=($_POST["entradaS"]);
$entradaN=($_POST["entradaN"]);
$capacidad=($_POST["capacidad"]);
$areaParque=($_POST["codigoAP"]);
	

if ($nombre)
	{
		$sql= "update jnf_atraccion set a_nombre='".$nombre."' where a_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($descripcion)
	{
		$sql= "update jnf_atraccion set a_descripcion='".$descripcion."' where a_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($estaturaM)
	{
		$sql= "update jnf_atraccion set a_estatura_minima='".$estaturaM."' where a_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}	
if ($duracion)
	{
		$sql= "update jnf_atraccion set a_duracion='".$duracion."' where a_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($capacidad)
	{
		$sql= "update jnf_atraccion set a_capacidad='".$capacidad."' where a_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($magicS)
	{
		$sql= "update jnf_atraccion set a_extra_magic_hour='".$magicS."' where a_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	} else 
		if ($magicN)
			{
				$sql= "update jnf_atraccion set a_extra_magic_hour='".$magicN."' where a_codigo='".$nombreModificar."';";	
				$res=pg_exec($sql); 
			}
if ($entradaS)
	{
		$sql= "update jnf_atraccion set a_entrada_rapida='".$entradaS."' where a_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	} else 
		if ($entradaN)
			{
				$sql= "update jnf_atraccion set a_entrada_rapida='".$entradaN."' where a_codigo='".$nombreModificar."';";	
				$res=pg_exec($sql); 
			}
if ($areaParque)
	{
		$sql= "update jnf_atraccion set area='".$areaParque."' where a_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}		
		
?>