
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
                            Agregar Restaurant
                         </h1>

                      <form name="formAgregarAtraccion" action="crud/insertarRestaurant.php" method="post" onSubmit="return validacionAgregarRestaurantes();">
                         
						   <label>Nombre:</label>
  											<input name="nombre" type="text" id="nombre"   size="25" > <br><br>

				           <label>Descripcion:</label>					
								        	<input name="descripcion" type="text" id="descripcion" size="25" > <br><br>
                                            
                           <label>Tipo de Restaurant:</label>								        
								         	                                            
                                            <select  id="tipoR" name="tipoR">
                                            	<option value="0">Seleccione..</option>
                                                <option value="1">Bar</option>
                                                <option value="2">Café</option>
                                                <option value="3">Pastelería</option>
                                                <option value="4">Restaurant</option>
                                            </select><br><br> 
                           
				           <label>Reserva:</label>
                                        	<input type="checkbox" id="reservaS" name="reservaS" > S  &nbsp; &nbsp;
                                            <input type="checkbox" id="reservaN" name="reservaN"> N <br><br>
				           
                           <label>Precio Mínimo:</label> 
								         	<input type="numeric" id="precioMin" name="precioMin" size="25" > &nbsp; &nbsp;
                                             <br><br>
                           
                           <label>Precio Máximo:</label> 
								         	<input type="numeric" id="precioMax" name="precioMax" size="25"> &nbsp; &nbsp;
				           					<br><br>
                                            
                           
                            <label for="id">Area y Parque:</label>
                                              <?php $rows = $tra->get_area();  ?>
					                                <select  id="codigoA" name="codigoA"><option value="0">Seleccione..
						                                   <?php foreach ($rows as $row) 
														   		{
																	echo '<option value="'.$row['ar_codigo'].'"> '.$row['areas'].'</option>';
						                                         }?>
                                                                				          </option>
                                                     </select><br><br>  
                                                     
                                                 
								        
							<input type="SUBMIT" class="btn-group-vertical" value="Agregar Restaurant"/>
								                    
                      </form><br>
							<td><a href="index.html">Volver Atras</a></td><br>
                            
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Restaurantes / Agregar
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
