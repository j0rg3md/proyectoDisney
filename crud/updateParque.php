<?php

require_once("class.php");
$tra=new Trabajo();
                 
$nombreModificar=($_POST["codigoP"]);				 
$nombre=($_POST["nombre"]);    
$descripcion=($_POST["descripcion"]);
$direccion=($_POST["direccion"]);    
$fechaf=($_POST["fecha_fundacion"]);
$lugar=($_POST["lugar"]);
	

if ($nombre <> "" and $descripcion <> "" and $direccion <> "" and $fechaf <> "" and $lugar <> "")
	{
		$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_descripcion='".$descripcion."', lu_direccion='".$direccion."', lu_fecha_fundado='".$fechaf."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
		$res=pg_exec($sql); 
	} else 
		if ($descripcion <> "" and $direccion <> "" and $fechaf <> "" and $lugar <> "")
		{
			$sql= "update jnf_lugares set lu_descripcion='".$descripcion."', lu_direccion='".$direccion."', lu_fecha_fundado='".$fechaf."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
			$res=pg_exec($sql); 
		} else 
			if ($nombre <> "" and $direccion <> "" and $fechaf <> "" and $lugar <> "")
			{
				$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_direccion='".$direccion."', lu_fecha_fundado='".$fechaf."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
				$res=pg_exec($sql); 
			} else
				if ($nombre <> "" and $descripcion <> "" and $fechaf <> "" and $lugar <> "")
				{
					$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_descripcion='".$descripcion."', lu_fecha_fundado='".$fechaf."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
					$res=pg_exec($sql); 
				} else
					if ($nombre <> "" and $descripcion <> "" and $direccion <> "" and $lugar <> "")
					{
						$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_descripcion='".$descripcion."', lu_direccion='".$direccion."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
						$res=pg_exec($sql); 
					} else
						if ($nombre <> "" and $descripcion <> "" and $direccion <> "" and $fechaf <> "")
						{
							$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_descripcion='".$descripcion."', lu_direccion='".$direccion."', lu_fecha_fundado= '".$fechaf."' where lu_codigo='".$nombreModificar."';";	
							$res=pg_exec($sql); 
						} else
							if ($nombre <> "" and $descripcion <> "" and $direccion <> "")
							{
								$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_descripcion='".$descripcion."', lu_direccion='".$direccion."' where lu_codigo='".$nombreModificar."';";	
								$res=pg_exec($sql); 
							} else
								if ($nombre <> "" and $descripcion <> "" and $fechaf <> "")
								{
									$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_descripcion='".$descripcion."', lu_fecha_fundado='".$fechaf."' where lu_codigo='".$nombreModificar."';";	
									$res=pg_exec($sql); 
								} else
									if ($nombre <> "" and $descripcion <> "" and $lugar <> "")
									{
										$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_descripcion='".$descripcion."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
										$res=pg_exec($sql); 
									} else 
										if ($nombre <> "" and $direccion <> "" and $fechaf <> "")
										{
											$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_direccion='".$direccion."', lu_fecha_fundado='".$fechaf."' where lu_codigo='".$nombreModificar."';";	
											$res=pg_exec($sql); 
										} else
											if ($nombre <> "" and $direccion <> "" and $lugar <> "")
											{
												$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_direccion='".$direccion."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
												$res=pg_exec($sql); 
											} else
												if ($descripcion <> "" and $direccion <> "" and $fechaf <> "")
												{
													$sql= "update jnf_lugares set lu_descripcion='".$descripcion."', lu_direccion='".$direccion."', lu_fecha_fundado='".$fechaf."' where lu_codigo='".$nombreModificar."';";	
													$res=pg_exec($sql); 
												} else
													if ($descripcion <> "" and $direccion <> "" and $lugar <> "")
													{
														$sql= "update jnf_lugares set lu_descripcion='".$descripcion."', lu_direccion='".$direccion."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
														$res=pg_exec($sql); 
													} else
														if ($nombre <> "" and $fechaf <> "" and $lugar <> "")
														{
															$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_fecha_fundado='".$fechaf."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
															$res=pg_exec($sql); 
														} else 
															if ($descripcion <> "" and $fechaf <> "" and $lugar <> "")
															{
																$sql= "update jnf_lugares set lu_descripcion='".$descripcion."', lu_fecha_fundado='".$fechaf."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
																$res=pg_exec($sql); 
															} else
																if ($direccion <> "" and $fechaf <> "" and $lugar <> "")
																{
																	$sql= "update jnf_lugares set lu_direccion='".$direccion."', lu_fecha_fundado='".$fechaf."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
																	$res=pg_exec($sql); 
																} else
																	if ($nombre <> "" and $descripcion <> "" )
																	{
																		$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_descripcion='".$descripcion."' where lu_codigo='".$nombreModificar."';";	
																		$res=pg_exec($sql); 
																	} else
																		if ($nombre <> "" and $direccion <> "" )
																		{
																			$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_direccion='".$direccion."' where lu_codigo='".$nombreModificar."';";	
																			$res=pg_exec($sql); 
																		} else
																			if ($nombre <> "" and $fechaf <> "" )
																			{
																				$sql= "update jnf_lugares set lu_nombre='".$nombre."', lu_fecha_fundado='".$fechaf."' where lu_codigo='".$nombreModificar."';";	
																				$res=pg_exec($sql); 
																			} else
																				if ($nombre <> "" and $lugar <> "" )
																				{
																					$sql= "update jnf_lugares set lu_nombre='".$nombre."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
																					$res=pg_exec($sql); 
																				} else
																					if ($descripcion <> "" and $direccion <> "" )
																					{
																						$sql= "update jnf_lugares set lu_descripcion='".$descripcion."', lu_direccion='".$direccion."' where lu_codigo='".$nombreModificar."';";	
																						$res=pg_exec($sql); 
																					} else
																						if ($descripcion <> "" and $fechaf <> "" )
																						{
																							$sql= "update jnf_lugares set lu_descripcion='".$descripcion."', lu_fecha_fundado='".$fechaf."' where lu_codigo='".$nombreModificar."';";	
																							$res=pg_exec($sql); 
																						} else
																							if ($descripcion <> "" and $lugar <> "" )
																							{
																								$sql= "update jnf_lugares set lu_descripcion='".$descripcion."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
																								$res=pg_exec($sql); 
																							} else
																								if ($direccion <> "" and $fechaf <> "" )
																								{
																									$sql= "update jnf_lugares set lu_direccion='".$direccion."', lu_fecha_fundado='".$fechaf."' where lu_codigo='".$nombreModificar."';";	
																									$res=pg_exec($sql); 
																								} else
																									if ($direccion <> "" and $lugar <> "" )
																									{
																										$sql= "update jnf_lugares set lu_direccion='".$direccion."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
																										$res=pg_exec($sql); 
																									} else
																										if ($fechaf <> "" and $lugar <> "" )
																										{
																											$sql= "update jnf_lugares set lu_fecha_fundado='".$fechaf."', lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
																											$res=pg_exec($sql); 
																										} else 
																											if ($nombre <> "")
																											{
																												$sql= "update jnf_lugares set lu_nombre='".$nombre."' where lu_codigo='".$nombreModificar."';";	
																												$res=pg_exec($sql); 
																											} else 
																												if ($descripcion <> "")
																												{
																													$sql= "update jnf_lugares set lu_descripcion='".$descripcion."' where lu_codigo='".$nombreModificar."';";	
																													$res=pg_exec($sql); 
																												} else
																													if ($direccion <> "")
																													{
																														$sql= "update jnf_lugares set lu_direccion='".$direccion."' where lu_codigo='".$nombreModificar."';";	
																														$res=pg_exec($sql); 
																													} else
																														if ($fechaf <> "")
																														{
																															$sql= "update jnf_lugares set lu_fecha_fundado='".$fechaf."' where lu_codigo='".$nombreModificar."';";	
																															$res=pg_exec($sql); 
																														} else
																															if ($lugar <> "")
																															{
																																$sql= "update jnf_lugares set lugar=(select l_codigo from jnf_lugar where l_nombre= '".$lugar."') where lu_codigo='".$nombreModificar."';";	
																																$res=pg_exec($sql); 
																															}
					
		




              
   
?>
<td><a href="index.php">Volver Atras</a></td>