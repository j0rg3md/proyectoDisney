<?php
require_once 'crud/class.php';
  $tra = new Trabajo();
  $codigoAtraccion=($_POST["codigoAtraccion"]);
  $codigoFecha = ($_POST["fechas_disponibles"]);
  $rows = $tra->get_horario_atraccion($codigoFecha);
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
                          <?php foreach ($rows as $row) {
                                    echo $row['ho_hora_inicio'];
                                    echo " - ";
                                    echo $row['ho_hora_fin'];
                          }?>
                         </h1>

                         <form action="crud/fastpass.php" method="post">
									<br>
                  <br>

                <?php echo "<input type='hidden' name='codigoAtraccion' value='".$codigoAtraccion."' />";?>
                <?php echo "<input type='hidden' name='codigoFecha' value='".$codigoFecha."' />";?>
                  <label for="Hora">Hora +FastPass:</label>

                <input type="time" name="hora" value=<?php echo $row['ho_hora_inicio'] ?> max=<?php echo $row['ho_hora_fin'] ?> min=<?php echo $row['ho_hora_inicio'] ?>>

                <label for="cantidad">Cantidad de entradas:</label>
                <select name="cantidad">


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
                <label for="codigo">Codigo de Compra:</label>
                <input type="text" name="codigo" >





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
