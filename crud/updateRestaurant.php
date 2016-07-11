<?php

require_once("class.php");
$tra=new Trabajo();
                 
$nombreModificar=($_POST["codigoR"]);				 
$nombre=($_POST["nombre"]);    
$descripcion=($_POST["descripcion"]);
$tipoR=($_POST["tipoR"]);
$reservaS=($_POST["reservaS"]);
$reservaN=($_POST["reservaN"]);	
$precioMin=($_POST["precioMin"]);
$precioMax=($_POST["precioMax"]);
$area=($_POST["codigoA"]);
	
	
	

if ($nombre)
	{
		$sql= "update jnf_restaurant set r_nombre='".$nombre."' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($descripcion)
	{
		$sql= "update jnf_restaurant set r_descripcion='".$descripcion."' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	}
if ($tipoR == 1)
	{
		$sql= "update jnf_restaurant set r_tipo_restaurant='bar' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
if ($tipoR == 2)
	{
		$sql= "update jnf_restaurant set r_tipo_restaurant='cafe' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
if ($tipoR == 3)
	{
		$sql= "update jnf_restaurant set r_tipo_restaurant='pasteleria' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
if ($tipoR == 4)
	{
		$sql= "update jnf_restaurant set r_tipo_restaurant='restaurant' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
if ($reservaS)
	{
		$sql= "update jnf_restaurant set r_reserva='s' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
if ($reservaN)
	{
		$sql= "update jnf_restaurant set r_reserva='n' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
if ($precioMin)
	{
		$sql= "update jnf_restaurant set r_precio_min='".$precioMin."' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
if ($precioMax)
	{
		$sql= "update jnf_restaurant set r_precio_max='".$precioMin."' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
if ($area)
	{
		$sql= "update jnf_restaurant set area='".$area."' where r_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql);
	}
	
	
		
?>