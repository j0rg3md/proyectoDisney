<?php
require_once 'crud/class.php';
  $tra = new Trabajo();
  $codigoEvento = ($_POST['codigoEvento']);
  $fecha = ($_POST['fecha']);

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
                    <li> <a href="agregarHorarioParque.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Parque</a> </li>
                      <li> <a href="agregarHorarioAtraccion.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Atraccion</a> </li>
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


                      <?php if ($_POST['consultar']) {  ?>
                        <h1 class="page-header">Consulta de Horario Evento</h1>

                        <form action="crud/eliminarHorarioEvento.php" method="post">
                          <?php
                          echo "<input type='hidden' name='codigoEvento' value='".$codigoEvento."' />";
                          echo "<input type='hidden' name='fecha' value='".$fecha."' />";
                          $rows= $tra->get_consulta_horarios_evento($fecha,$codigoEvento);
                      ?>
                      <br>
                      <?php
                      if ($rows){
                        foreach ($rows as $row) {
                          echo '<input type="checkbox" name="horario[]" value="'.$row['he_codigo'].'"> '.$row['he_hora_inicio'].' - '.$row['he_hora_fin'].'<br>';
                        }
                      }else echo "<h1 class='page-header'>El evento no esta disponible en dicha fecha</h1>";
                      ?>
                <br><br>
                  <input type="submit" name="submit" id="submit" value="Eliminar horario">
                  <br><br>
					        </form>
                  <?php }else if ($_POST['eliminar']){?>
                    <h1 class="page-header">Eliminar Fecha Evento</h1>
                  <?php
                  $sql = "delete from jnf_horario_evento where he_dia = '".$fecha."' and lugares = ".$codigoEvento.";";
                  $res=pg_exec($sql);
                        } ?>


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
