
<?php
class Trabajo
{
	private $conexion;
	private $lugares;
	private $atracciones;
	private $parques;
	private $areas;
	private $eliminarAtraccion;
	private $area;
	private $eventoEspecial;
	private $eliminarEventoEspecial;
	private $restaurantes;
	private $eliminarRestaurant;
	private $hoteles;
	private $eliminarHotel;
	private $Restaurantes;
	
	




	public function __construct()
	{
		$this->conexion=pg_connect("host='localhost' port='5432' dbname='disney' user='postgres' password='1234'");
		$this->n=array();
	}




function get_lugares()
	{
		$query = "select lu_codigo,lu_nombre from jnf_lugares where lu_tipo = 'parque';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->lugares[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->lugares;
	}
	
	function get_atracciones($nombreP)
	{
		
		$query = "select a_nombre, a_duracion, a_extra_magic_hour, a_entrada_rapida,a_capacidad,a_estatura_minima from jnf_atraccion, jnf_area, jnf_lugares where area=ar_codigo and jnf_area.lugares=lu_codigo and lu_codigo='".$nombreP."';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=0; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->atracciones[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->atracciones;
	}
	
	function get_parques()
	{
		$query = "select lu_nombre, lu_descripcion, lu_direccion, lu_fecha_fundado, (select l_nombre from jnf_lugar where jnf_lugares.lugar=l_codigo) ubicacion
		 from jnf_lugar, jnf_lugares
		 where jnf_lugares.lugar=l_codigo and lu_tipo='parque';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=0; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->parques[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->parques;
	}
	
	function get_area()
	{
		$query = "select ar_codigo, ar_nombre || ' - ' || lu_nombre areas from jnf_area,jnf_lugares where jnf_area.lugares=lu_codigo and lu_tipo='parque';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->areas[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->areas;
	}
	
	function get_eliminarAtraccion()
	{
		$query = "select a_codigo,a_nombre from jnf_atraccion;";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->eliminarAtraccion[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->eliminarAtraccion;
	}
	
	function get_areas($nombreP)
	{
		$query = "select ar_nombre, ar_descripcion from jnf_area, jnf_lugares where jnf_area.lugares=lu_codigo and lu_codigo='".$nombreP."';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=0; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->area[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->area;
	}
	
	function get_eventosEspeciales($nombreP)
	{
		$query = "select ee_nombre,ee_descripcion,ee_precio,ee_fecha_culminacion,ee_duracion 
				from jnf_evento_especial, jnf_lugares 
				where jnf_evento_especial.lugares=lu_codigo and lu_codigo='".$nombreP."';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=0; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->eventoEspecial[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->eventoEspecial;
	}
	
	function get_eliminarEventoEspecial()
	{
		$query = "select ee_codigo,ee_nombre || ' - ' || lu_nombre eventos 
				from jnf_evento_especial,jnf_lugares 
				where jnf_evento_especial.lugares=lu_codigo and lu_tipo='parque';;";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->eliminarEventoEspecial[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->eliminarEventoEspecial;
	}
	
	function get_restaurantes($nombreP)
	{
		$query = "select r_nombre,r_descripcion,r_tipo_restaurant,r_reserva,r_precio_min,r_precio_max,area from jnf_restaurant, jnf_area,jnf_lugares where jnf_restaurant.area=ar_codigo and jnf_area.lugares=lu_codigo and lu_codigo='".$nombreP."';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=0; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->restaurantes[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->restaurantes;
	}
	
	function get_eliminarRestaurant()
	{
		$query = "select r_codigo,r_nombre from jnf_restaurant;";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->eliminarRestaurant[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->eliminarRestaurant;
	}
	
	function get_RestauranteCocina($nombre)
	{
		$query = "select r_codigo from jnf_restaurant where and r_nombre = '".$nombre."' ;";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->Restaurantes=$line;
		 }
		

		$this->conexion=null;
		return $this->Restaurantes;
	}
	
	function get_hoteles($nombreP)
	{
		$query = "select h.lu_nombre,h.lu_descripcion,h.lu_direccion,h.lu_fecha_fundado ,h.lu_tipo
				from jnf_lugares h, jnf_lugares p
				where h.lu_tipo='hotel' and h.lugares='".$nombreP."' and h.lugares=p.lu_codigo
				
				union 

				select r.lu_nombre,r.lu_descripcion,r.lu_direccion,r.lu_fecha_fundado,r.lu_tipo  
				from jnf_lugares r, jnf_lugares p
				where r.lu_tipo='resort' and r.lugares='".$nombreP."' and r.lugares=p.lu_codigo;"; 
			
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=0; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->hoteles[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->hoteles;
	}
	
	function get_eliminarHotel()
	{
		$query = "select lu_codigo,lu_nombre from jnf_lugares where lu_tipo = 'hotel';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->eliminarHotel[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->eliminarHotel;
	}
	
	
	
//PARTE DE MARIN// 

	private $parque;
	private $paises;
	private $monto;
	private $codigoV;
	private $pais;
	private $fechas;
	private $fechaEvento;
	private $fechaParque;
	private $horario;
	private $horarioEvento;
	private $EventoEspecialPago;
	private $evento;
	private $atraccion;
	private $hotelHoteles;
	private $atraccionAtracciones;
	private $rangoEvento;
	private $rangoAtraccion;
	private $horas;
	private $consultaHorario;
	
	function get_consulta_horarios_evento($fecha,$codigoEvento)
		{
					$query = "select he_codigo,he_hora_inicio,he_hora_fin from jnf_horario_evento where he_dia = '".$fecha."' and lugares = ".$codigoEvento.";";

					$result = pg_query($query) or die ("Fallo del query ". pg_last_error());

					$rows = pg_num_rows($result);

			for ($i=1; $i <= $rows ; $i++){
				if(!$result)
				{
					echo "ERROR No se encontraron resultados";
					exit;
				}else{
				 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
				 $this->consultaHorario[$i]=$line;
			 }
			}
		$this->conexion=null;
		return $this->consultaHorario;
		}
	
	function get_horario_parque($fecha,$codigoParque)
		 	{
		 				$query = "select hp_codigo,hp_hora_inicio,hp_hora_fin from jnf_horario_parque where hp_dia = '".$fecha."' and lugares = ".$codigoParque.";" ;
		 				$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		 				$rows = pg_num_rows($result);

		 				if(!$result)
		 				{
		 					echo "ERROR No se encontraron resultados";
		 					exit;
		 				}else{
		 				 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
		 				 $this->horas=$line;
		 			 }

					 	$this->conexion=null;
							return $this->horas;
			}


	function get_parque()
	{
		$query = "select lu_codigo,lu_nombre from jnf_lugares where lu_tipo = 'parque';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;
		$rows = pg_num_rows($result);

		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->parque[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->parque;
	}
	
	function get_paises()
	{
		$query = "select l_codigo,l_nombre from jnf_lugar where l_tipo = 'pais';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;
		$rows = pg_num_rows($result);

		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->paises[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->paises;
	}
	
	function get_tarifas($dias,$fecha_nacimiento)
	{
			if ($fecha_nacimiento > date("Y/m/d", strtotime('-10 year')) )
				{ // menos de 10 años
						$query = "select * from jnf_tarifa where t_dias = '".$dias."' and t_clase = 'niño';";
				}else   $query = "select * from jnf_tarifa where t_dias = '".$dias."' and t_clase = 'adulto';";

		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);



			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->monto=$line;
		 }


		$this->conexion=null;
		return $this->monto;
	}
	
	function get_codigo_visitante()
	{

		$query = "select (max(v_codigo)) representante from jnf_visitante;";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;
		$rows = pg_num_rows($result);;

			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->codigoV=$line;
				 }
	

		$this->conexion=null;
		return $this->codigoV;
	}
	
	function get_pais($pais)
	{
		$query = "select l_nombre from jnf_lugar where l_codigo = '".$pais."';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;
		$rows = pg_num_rows($result);;
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->pais=$line;
		 }
			$this->conexion=null;
			return $this->pais;
	}
	
	function get_fecha_atraccion($atraccion)
	{
				$query = "select ho_codigo,ho_dia from jnf_horario_atraccion where atraccion = '".$atraccion."';";
				$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

				$rows = pg_num_rows($result);

						for ($i=1; $i <= $rows ; $i++){
								if(!$result)
								{
									echo "ERROR No se encontraron resultados";
									exit;
								}else{
			 						$line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 						$this->fechas[$i]=$line;
		 					}
						}
		$this->conexion=null;
		return $this->fechas;
	}

	function get_fecha_evento($evento)
	{
				$query = "select distinct (he_dia) fecha from jnf_horario_evento where lugares = '".$evento."' order by he_dia;";
				$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

				$rows = pg_num_rows($result);

						for ($i=1; $i <= $rows ; $i++){
								if(!$result)
								{
									echo "ERROR No se encontraron resultados";
									exit;
								}else{
									$line = pg_fetch_array($result,null,PGSQL_ASSOC);
									$this->fechaEvento[$i]=$line;
							}
						}
		$this->conexion=null;
		return $this->fechaEvento;
	}
	
	function get_fecha_parque($codigoParque)
	{
				$query = "select max(hp_dia) ultimo_dia,min(hp_dia) primer_dia from jnf_horario_parque where lugares ='".$codigoParque."' ;";
				$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

				$rows = pg_num_rows($result);

						
								if(!$result)
								{
									echo "ERROR No se encontraron resultados";
									exit;
								}else{
									$line = pg_fetch_array($result,null,PGSQL_ASSOC);
									$this->fechaParque=$line;
							
						}
		$this->conexion=null;
		return $this->fechaParque;
	}

	function get_horario_atraccion($fecha,$codigoAtraccion)
		{
					$query = "select ho_codigo,ho_hora_inicio hora_inicio,ho_hora_fin hora_fin  from jnf_horario_atraccion where ho_dia = '".$fecha."' and atraccion = ".$codigoAtraccion." ;";

					$result = pg_query($query) or die ("Fallo del query ". pg_last_error());

					$rows = pg_num_rows($result);


								if(!$result)
						{
							echo "ERROR No se encontraron resultados";
							exit;
							}else{
						 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
						 	 $this->horario=$line;
			 		 }

							$this->conexion=null;
							return $this->horario;
					}
		
		function get_horarios_evento($fecha)
		{
					$query = "select he_codigo,he_hora_inicio||' - '||he_hora_fin horario from jnf_horario_evento where he_dia = '".$fecha."';";

					$result = pg_query($query) or die ("Fallo del query ". pg_last_error());

					$rows = pg_num_rows($result);

			for ($i=1; $i <= $rows ; $i++){
				if(!$result)
				{
					echo "ERROR No se encontraron resultados";
					exit;
				}else{
				 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
				 $this->horarioEvento[$i]=$line;
			 }
			}
		$this->conexion=null;
		return $this->horarioEvento;
		}
		
		function get_EventoEspecial_Pago()
	{
		$query = "select ee_codigo,ee_nombre || ' - ' || lu_nombre eventos
				from jnf_evento_especial,jnf_lugares
				where jnf_evento_especial.lugares=lu_codigo and lu_tipo='parque' and ee_precio is not null;;";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->EventoEspecialPago[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->EventoEspecialPago;
	}
	
	function get_evento()
			{
			$query = "select ee_codigo,ee_nombre || ' - ' || lu_nombre eventos
					from jnf_evento_especial,jnf_lugares
					where jnf_evento_especial.lugares=lu_codigo and lu_tipo='parque';";
			$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

			$rows = pg_num_rows($result);


			for ($i=1; $i <= $rows ; $i++){
				if(!$result)
				{
					echo "ERROR No se encontraron resultados";
					exit;
				}else{
				 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
				 $this->evento[$i]=$line;
			 }
			}

			$this->conexion=null;
			return $this->evento;
			}
			
	function get_atraccion()
			{
			$query = "select a_nombre from jnf_atraccion";
			$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

			$rows = pg_num_rows($result);


			for ($i=1; $i <= $rows ; $i++){
				if(!$result)
				{
					echo "ERROR No se encontraron resultados";
					exit;
				}else{
				 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
				 $this->atraccion[$i]=$line;
			 }
			}

			$this->conexion=null;
			return $this->atraccion;
			}
			
	function get_hotel_hoteles()
	{ //hotel
		$query = "select lu_codigo,lu_nombre||' - '||lu_tipo hotel from jnf_lugares where lu_tipo = 'hotel' or lu_tipo = 'resort';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->hotelHoteles[$i]=$line;
		 }
		}	#$i++}

		$this->conexion=null;
		return $this->hotelHoteles;
	}
	
	function get_atraccion_atracciones()
	{ //atracciones
		$query = "select a_codigo,a_nombre||' - '||ar_nombre||' - '||lu_nombre atraccion from jnf_atraccion,jnf_lugares,jnf_area 
				where jnf_area.lugares=lu_codigo and jnf_atraccion.area = ar_codigo and lu_tipo = 'parque' and a_entrada_rapida = 's';";
		$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

		$rows = pg_num_rows($result);


		for ($i=1; $i <= $rows ; $i++){
			if(!$result)
			{
				echo "ERROR No se encontraron resultados";
				exit;
			}else{
			 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
			 $this->atraccionAtracciones[$i]=$line;
		 }
		}	#$i++

		$this->conexion=null;
		return $this->atraccionAtracciones;
	}
	
	function get_rango_fecha_evento($evento)
	{
				$query = "select max(he_dia) ultimo_dia,min(he_dia) primer_dia from jnf_horario_evento group by lugares having  lugares =".$evento.";";
				$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

				$rows = pg_num_rows($result);


								if(!$result)
								{
									echo "ERROR No se encontraron resultados";
									exit;
								}else{
									$line = pg_fetch_array($result,null,PGSQL_ASSOC);
									$this->rangoEvento=$line;
							}

		$this->conexion=null;
		return $this->rangoEvento;
	}
	
	function get_rango_fecha_atraccion($codigoAtraccion)
		{
					$query = "select max(ho_dia) ultimo_dia,min(ho_dia) primer_dia from jnf_horario_atraccion where atraccion =".$codigoAtraccion." ;";
					$result = pg_query($query) or die ("Fallo del query ". pg_last_error());;

					$rows = pg_num_rows($result);

					if(!$result)
					{
						echo "ERROR No se encontraron resultados";
						exit;
					}else{
					 $line = pg_fetch_array($result,null,PGSQL_ASSOC);
					 $this->rangoAtraccion=$line;
				 }
				 $this->conexion=null;
		 		return $this->rangoAtraccion;
			}

	
}
?>

