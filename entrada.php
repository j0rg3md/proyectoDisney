<?php
require_once 'crud/class.php';
  $tra = new Trabajo();
?>

<!DOCTYPE html>
<html lang="en">

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
                                <a href="#">Epcot</a>
                            </li>
                            <li>
                                <a href="animalKingdom.php">Animal Kingdom</a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="agregarParque.php"><i class="fa fa-fw fa-desktop"></i>Agregar Parque</a>
                    </li>
                    <li>
                        <a href="eliminarParque.php"><i class="fa fa-fw fa-desktop"></i>Eliminar Parque</a>
                    </li>

                    <li>
                        <a href="entrada.php"><i class="fa fa-fw fa-desktop"></i>Tickets</a>
                    </li>

                    <li>
                        <a href="fastpass.php"><i class="fa fa-fw fa-desktop"></i>+FastPass</a>
                    </li>
                    <li> <a href="agregarHorarioAtraccion.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Atraccion</a> </li>
                    <li> <a href="agregarHorarioParque.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Parque</a> </li>
                    <li> <a href="agregarHorarioEvento.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Evento</a> </li>
                    <li> <a href="entradaEvento.php"><i class="fa fa-fw fa-desktop"></i>Tickets Eventos</a> </li>
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
                            TICKETS
                         </h1>

                         <form action="crud/registrarVisitante.php" method="post">


                  <br>
                  <br>

                          <script type="text/javascript">
                          function habilitar(){
                          document.getElementById('hotel').disabled=false;
                          document.getElementById('fecha_inicio_hotel').disabled=false;
                          document.getElementById('fecha_fin_hotel').disabled=false;
                          }
                          function deshabilitar(){
                          document.getElementById('hotel').disabled=true;
                          document.getElementById('fecha_inicio_hotel').disabled=true;
                          document.getElementById('fecha_fin_hotel').disabled=true;
                          document.getElementById('hotel').value=''
                          }
                          </script>
                        
                  <?php $hoy = date("Y-m-d"); 
                      $nuevafecha = strtotime ( '+3 month' , strtotime ( $hoy ) ) ;
                      $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                  ?>
 
                  <label for="fecha_estimada_visita">Fecha estimada de visita (maximo 3 meses):</label>
                 
                  <input type="date" name="fecha_estimada_visita" value = "<?php echo $hoy;?>"  max="<?php echo $nuevafecha;?>" 
                  min = "<?php echo date("Y-m-d");?>"> <br><br>"

                  <label for="id">N° Días: </label>
                  <select name="dias">
                     <option value=1>1</option>';
                     <option value=2>2</option>';
                     <option value=3>3</option>';
                     <option value=4>4</option>';
                     <option value=5>5</option>';
                     <option value=6>6</option>';
                     <option value=7>7</option>';
                     <option value=8>8</option>';
                     <option value=9>9</option>';
                     <option value=10>10</option>';
                   </select>
                    <br><br>


                  
                  <input type="radio" name="expira" value="expira" checked> Expira
                  <input type="radio" name="expira" value="no expira"> No expira
                    <br><br>
                  <input type="radio" name = "estatusHotel" value="Hotel" onclick="habilitar()" >Hotel Incluido
                  <br>
                  <input type="radio" name = "estatusHotel" value="Sin Hotel" onclick="deshabilitar()" checked> Sin Hotel Incluido
 
                    <br><br>

                   <label for="id">Hotel/Resort:</label>
                          <?php $rows = $tra->get_hotel_hoteles();  ?>
                          <select name="hotel" id='hotel' disabled="disabled">
                                  <option value = ""> Seleccione...</option>
                                  <?php foreach ($rows as $row) {
                                           echo '<option value="'.$row['lu_codigo'].'">'.$row['hotel'].'</option>';
                          }?>
                   </select>
                   

                    <br><br>
              
                  <label for="id">Fecha entrada hotel:</label>
                    <input type="date" id='fecha_inicio_hotel' name="fecha_inicio_hotel" min="2016-06-14" disabled="disabled"><br><br>
                  <label for="id"> Fecha salida hotel:</label>
                    <input type="date" id='fecha_fin_hotel' name="fecha_fin_hotel" min="2016-06-14" disabled="disabled"><br><br>

              
                  <br>
                  <hr>
                  <INPUT TYPE="SUBMIT" VALUE="Realizar compra"/>
                  <hr>
            </form>
              <td><a href="index.html">Volver Atras</a></td>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Agregar Parque
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
