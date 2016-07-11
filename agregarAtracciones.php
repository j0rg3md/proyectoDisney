
<?php
require_once 'crud/class.php';
  $tra = new Trabajo();


?>

<!DOCTYPE html>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Walt Disney World</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <a class="navbar-brand" href="index.html">Walt Disney World</a>
            </div>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                  <li class="active col-lg-18"> <a href="index.html"><em class="fa fa-fw fa-dashboard"></em>Inicio</a> </li>

					<li><a href="javascript:;" data-toggle="collapse" data-target="#demo"><em class="fa fa-fw fa-arrows-v"></em> Parques <em class="fa fa-fw fa-caret-down"></em></a>
                      <ul id="demo" class="collapse">
                            <li>
                              <a href="parques.php">Informacion</a>
                            </li>

                            <li>
                                <a href="agregarParque.php">Agregar</a>
                            </li>

                            <li>
                                <a href="eliminarParque.php">Eliminar</a>
                            </li>

                            <li>
                                <a href="modificarParque.php">Modificar</a>		
                            </li>
                            <li>
                        		<a href="entrada.php"><i class="fa fa-fw fa-desktop"></i>Tickets</a>
                    		</li>
                        </ul>
                    </li>
                    <li><a href="javascript:;" data-toggle="collapse" data-target="#demo1"><em class="fa fa-fw fa-arrows-v"></em> Atracciones <em class="fa fa-fw fa-caret-down"></em></a>
                      <ul id="demo1" class="collapse">
                            <li>
                              <a href="buscarAtracciones.php">Informacion</a>
                            </li>

                            <li>
                                <a href="agregarAtracciones.php">Agregar</a>
                            </li>

                            <li>
                                <a href="eliminarAtraccion.php">Eliminar</a>
                            </li>

                            <li>
                                <a href="modificarAtraccion.php">Modificar</a>
                            </li>
                            
                            <li>
                        		<a href="fastpass.php"><i class="fa fa-fw fa-desktop"></i>+FastPass</a>
                    		</li>
                        </ul>
                    </li>

                    <li><a href="javascript:;" data-toggle="collapse" data-target="#demo2"><em class="fa fa-fw fa-arrows-v"></em> Areas <em class="fa fa-fw fa-caret-down"></em></a>
                       <ul id="demo2" class="collapse">
                             <li>
                               <a href="buscarAreas.php">Informacion</a>
                             </li>

                             <li>
                                 <a href="agregarArea.php">Agregar</a>
                             </li>

                             <li>
                                 <a href="eliminarArea.php">Eliminar</a>
                             </li>

                             <li>
                                 <a href="modificarArea.php">Modificar</a>
                             </li>
                         </ul>
                     </li>

                     <li><a href="javascript:;" data-toggle="collapse" data-target="#demo3"><em class="fa fa-fw fa-arrows-v"></em> Restaurantes <em class="fa fa-fw fa-caret-down"></em></a>
                        <ul id="demo3" class="collapse">
                              <li>
                                <a href="buscarRestaurantes.php">Informacion</a>
                              </li>

                              <li>
                                  <a href="agregarRestaurantes.php">Agregar</a>
                              </li>

                              <li>
                                  <a href="eliminarResstaurant.php">Eliminar</a>
                              </li>

                              <li>
                                  <a href="modificarRestaurant.php">Modificar</a>
                              </li>
                          </ul>
                      </li>

                      <li><a href="javascript:;" data-toggle="collapse" data-target="#demo4"><em class="fa fa-fw fa-arrows-v"></em> Hoteles <em class="fa fa-fw fa-caret-down"></em></a>
                         <ul id="demo4" class="collapse">
                               <li>
                                 <a href="buscarHotel.php">Informacion</a>
                               </li>

                               <li>
                                   <a href="agregarHoteles.php">Agregar</a>
                               </li>

                               <li>
                                   <a href="eliminarHotel.php">Eliminar</a>
                               </li>

                               <li>
                                   <a href="modificarHotel.php">Modificar</a>
                               </li>
                           </ul>
                       </li>
                       
                       <li><a href="javascript:;" data-toggle="collapse" data-target="#demo5"><em class="fa fa-fw fa-arrows-v"></em> Eventos Especiales <em class="fa fa-fw fa-caret-down"></em></a>
                         <ul id="demo5" class="collapse">
                               <li>
                                 <a href="buscarEventoEspecial.php">Informacion</a>
                               </li>

                               <li>
                                   <a href="agregarEventoEspecial.php">Agregar</a>
                               </li>

                               <li>
                                   <a href="eliminarEventoEspecial.php">Eliminar</a>
                               </li>

                               <li>
                                   <a href="modificarEventoEspecial.php">Modificar</a>
                               </li>
                               
                               <li> 
                    				<a href="entradaEvento.php"><i class="fa fa-fw fa-desktop"></i>Tickets</a>
                   			   </li>
                           </ul>
                       </li>
                       
                    
                    

                    
                    
                    <li><a href="javascript:;" data-toggle="collapse" data-target="#demo6"><em class="fa fa-fw fa-arrows-v"></em> Horarios <em class="fa fa-fw fa-caret-down"></em></a>
                       <ul id="demo6" class="collapse">
                         <li> <a href="agregarHorarioParque.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Parque</a> </li>
                         <li> <a href="agregarHorarioAtraccion.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Atraccion</a> </li>
                         <li> <a href="agregarHorarioEvento.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Evento</a> </li>
                         <li> <a href="consultaHorarioParque.php"><i class="fa fa-fw fa-desktop"></i>Consulta Horario Parque</a> </li>
                         <li> <a href="consultaHorarioAtraccion.php"><i class="fa fa-fw fa-desktop"></i>Consulta Horario Atraccion</a> </li>
                         <li> <a href="consultaHorarioEvento.php"><i class="fa fa-fw fa-desktop"></i>Consulta Horario Evento</a> </li>
                         </ul>
                     </li>
                                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


						
                        <h1 class="page-header">
                            Agregar Atracción
                         </h1>

                      <form name="formAgregarAtraccion" action="crud/insertarAtraccion.php" method="post" onSubmit="return validacionAgregarAtraccion();">
                         
						   <label>Nombre:</label>
  											<input name="nombre" type="text" id="nombre"   size="20" > <br><br>

				           <label>Descripcion:</label>					
								        	<input name="descripcion" type="text" id="descripcion" size="20" > <br><br>
                                            
                           <label>Estatura Minima:</label>								        
								         	<input type="text" id="estaturaM" name="estaturaM" size="20" > <br><br>
								        
				           <label>Duración:</label>
                                        	<input type="numeric" id="duracion" name="duracion" size="20" > <br><br>
				           
                           <label>Extra Magic Hour:</label> 
								         	<input type="radio" id="magicS" name="magic" value = "s" > Si &nbsp; &nbsp;
                          <input type="radio" id="magic" name="magic"  value="n"> No <br><br>
                           
                           <label>Entrada Rápida:</label> 
								         	<input type="radio" id="entradaS" name="entrada" value="s" > Si &nbsp; &nbsp;
				           					<input type="radio" id="entradaN" name="entrada" value="n"> No <br><br>
                                            
                           <label>Capacidad:</label>
  											<input name="capacidad" type="numeric" id="capacidad"   size="20" > <br><br>
                                            
                
                                            
                                            
                                            
                           
                            <label for="id">Area y Parque:</label>
                                              <?php $rows = $tra->get_area();  ?>
					                                <select  id="codigoA" name="codigoA"><option value="0">Seleccione..
						                                   <?php foreach ($rows as $row) 
														   		{
																	echo '<option value="'.$row['ar_codigo'].'"> '.$row['areas'].'</option>';
						                                         }?>
                                                                				          </option>
                                                     </select>
              <br><br>
             <label>Condiciones: </label>
               <br>    
              <input type="checkbox" name="condiciones[]" value = "Se debe transferir a la silla de ruedas">Se debe transferir a la silla de ruedas
              <input type="checkbox" name="condiciones[]" value = "Pueden permanecer en silla de ruedas / ECV">Pueden permanecer en silla de ruedas / ECV
              <input type="checkbox" name="condiciones[]" value = "Ayuda auditiva">Ayuda auditiva
              <br><br>  
              <input type="checkbox" name="condiciones[]" value = "Subtítulos Portátiles">Subtítulos Portátiles
              <input type="checkbox" name="condiciones[]" value = "DEBEN SER CAPACES DE CAMINAR">DEBEN SER CAPACES DE CAMINAR
              <input type="checkbox" name="condiciones[]" value = "DESCRIPCIÓN DE AUDIO">DESCRIPCIÓN DE AUDIO
              <input type="checkbox" name="condiciones[]" value = "DISPOSITIVOS DE TRADUCCIÓN DE IDIOMAS">DISPOSITIVOS DE TRADUCCIÓN DE IDIOMAS
                 <br><br>
              <label>Categoria: </label>
              <br>
              <input type="checkbox" name="categoria[]" value="ENCUENTRO ANIMAL">ENCUENTRO ANIMAL
              <input type="checkbox" name="categoria[]" value="INTERACTIVO">INTERACTIVO
              <input type="checkbox" name="categoria[]" value="PASEOS LENTOS">PASEOS LENTOS
              <input type="checkbox" name="categoria[]" value="VUELTAS">VUELTAS
              <br><br> 
              <input type="checkbox" name="categoria[]" value="GRAN NIVEL DE EMOCIÓN">GRAN NIVEL DE EMOCIÓN
              <input type="checkbox" name="categoria[]" value="OSCURO">OSCURO
              <input type="checkbox" name="categoria[]" value="ÁREAS DE JUEGO">ÁREAS DE JUEGO
              <input type="checkbox" name="categoria[]" value="INTERIOR">INTERIOR
              <br><br>
              
              <label>Edades Recomendadas: </label>
              <br>
              <input type="checkbox" name="edad_recomendada[]" value="niños de edad pre-escolar">niños de edad pre-escolar
              <input type="checkbox" name="edad_recomendada[]" value="niños grandes">niños grandes
              <input type="checkbox" name="edad_recomendada[]" value="adolescentes">adolescentes
              <input type="checkbox" name="edad_recomendada[]" value="adultos">adultos



                <br><br>
								        
							<input type="SUBMIT" class="btn-group-vertical" value="Agregar Atracción"/>
								                    
                      </form><br>
							<td><a href="index.html">Volver Atras</a></td><br>
                            
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Atracciones / Agregar
                            </li>
                        </ol>
                  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
