<?php

require_once("class.php");
$tra=new Trabajo();

$nombre=($_POST["nombre"]);
$descripcion=($_POST["descripcion"]);
$tipoR=($_POST["tipoR"]);
$reservaS=($_POST["reservaS"]);
$reservaN=($_POST["reservaN"]);
$precioMin=($_POST["precioMin"]);
$precioMax=($_POST["precioMax"]);
$area=($_POST["codigoA"]);
//$tipoCocina=($_POST["tipoCocina"]);

if ($reservaS)
	{
		if ($tipoR == 1)
			{
				$sql= "insert into jnf_restaurant (r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area) values ('".$nombre."','".$descripcion."','bar','s','".$precioMin."','".$precioMax."','".$area."');";
				$res=pg_exec($sql);
			} else 
				if ($tipoR == 2)
					{
						$sql= "insert into jnf_restaurant (r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area) values ('".$nombre."','".$descripcion."','cafe','s','".$precioMin."','".$precioMax."','".$area."');";
						$res=pg_exec($sql);
					} else 
						if ($tipoR == 3)
							{
								$sql= "insert into jnf_restaurant (r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area) values ('".$nombre."','".$descripcion."','pasteleria','s','".$precioMin."','".$precioMax."','".$area."');";
								$res=pg_exec($sql);
							} else 
								if ($tipoR == 4)
									{
										$sql= "insert into jnf_restaurant (r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area) values ('".$nombre."','".$descripcion."','restaurant','s','".$precioMin."','".$precioMax."','".$area."');";
										$res=pg_exec($sql);
									}
		
	} else 
	
	if ($reservaN)
	{
		if ($tipoR == 1)
			{
				$sql= "insert into jnf_restaurant (r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area) values ('".$nombre."','".$descripcion."','bar','n','".$precioMin."','".$precioMax."','".$area."');";
				$res=pg_exec($sql);
			} else 
				if ($tipoR == 2)
					{
						$sql= "insert into jnf_restaurant (r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area) values ('".$nombre."','".$descripcion."','cafe','n','".$precioMin."','".$precioMax."','".$area."');";
						$res=pg_exec($sql);
					} else 
						if ($tipoR == 3)
							{
								$sql= "insert into jnf_restaurant (r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area) values ('".$nombre."','".$descripcion."','pasteleria','n','".$precioMin."','".$precioMax."','".$area."');";
								$res=pg_exec($sql);
							} else 
								if ($tipoR == 4)
									{
										$sql= "insert into jnf_restaurant (r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area) values ('".$nombre."','".$descripcion."','restaurant','n','".$precioMin."','".$precioMax."','".$area."');";
										$res=pg_exec($sql);
									}
									
			$rest = $tra->get_RestauranteCocina($nombre);
			echo $nombre;
			$sql1= "insert into jnf_tipo_comida (tc_nombre,restaurant) values ('".$tipoCocina."',".$rest["r_codigo"].");";
				echo $rest["r_codigo"];
			 $res1=pg_exec($sql1);
		
	}

?>