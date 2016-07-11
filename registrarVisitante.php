<?php
require_once("class.php");
$tra=new Trabajo();
$dias=($_POST["dias"]);
$fecha_estimada_visita=($_POST["fecha_estimada_visita"]);
$expira=($_POST["expira"]);

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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <a href="../entrada.php"><i class="fa fa-fw fa-desktop"></i>Tickets</a>
                    </li>

                    <li>
                        <a href="../fastpass.php"><i class="fa fa-fw fa-desktop"></i>+FastPass</a>
                    </li>
                    <li> <a href="../agregarHorarioAtraccion.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Atraccion</a> </li>
                    <li> <a href="../agregarHorarioParque.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Parque</a> </li>
                    <li> <a href="../agregarHorarioEvento.php"><i class="fa fa-fw fa-desktop"></i>Agregar Horario Evento</a> </li>
                    <li> <a href="../entradaEvento.php"><i class="fa fa-fw fa-desktop"></i>Tickets Eventos</a> </li>



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
                            Registro de Visitantes
                         </h1>

                         <form action="insertarVisitante.php" method="post">

                            <?php
                            if (is_null($_POST["hotel"])){
                            echo "Sin hotel";
                            }else {
                              echo "Con hotel";
                              $hotel = ($_POST["hotel"]);
                              $fecha_inicio_hotel=($_POST["fecha_inicio_hotel"]);
                              $fecha_fin_hotel=($_POST["fecha_fin_hotel"]);
                            echo "<input type='hidden' name='hotel' value='".$hotel."' />";
                            echo "<input type='hidden' name='fecha_inicio_hotel' value='".$fecha_inicio_hotel."' />";
                            echo "<input type='hidden' name='fecha_fin_hotel' value='".$fecha_fin_hotel."' />";
                            }

                            echo "<input type='hidden' name='dias' value='".$dias."' />";
                            echo "<input type='hidden' name='expira' value='".$expira."' />";
                            echo "<input type='hidden' name='fecha_estimada_visita' value='".$fecha_estimada_visita."' />";
                                  
                                  $hoy = date("Y-m-d"); 
                                  $nuevafecha = strtotime ( '-18 year' , strtotime ( $hoy ) ) ;
                                  $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

                             ?>


                           <li>Nombre
                            <input type="text" name="nombre" value ='Jorge'><br>
                            <br>

                          <li>Apellido
                            <input type="text" name="apellido" value = 'Marin'><br>
                            <br>

                           <li>Segundo nombre
                            <input type="text" name="segundoNombre" value="Luis"><br>
                            <br>

                             <li> Fecha de nacimiento
                             <input type="date" name="fecha_nacimiento" value = "<?php echo $hoy;?>"  min = "<?php echo $nuevafecha; ?>"<br>

                             <input type="radio" name="genero" value="m" checked> Masculino<br>
                             <input type="radio" name="genero" value="f"> Femenino<br>

                             <label for="id">Pais</label>
                                     <?php $rows = $tra->get_paises();  ?>
                                     <select name="nombrePaises">
                                             <?php foreach ($rows as $row) {
                                                      echo '<option value="'.$row['l_codigo'].'">'.$row['l_nombre'].'</option>';
                                             

                                    }?>
                                     </select>

                             <li>Codigo Postal
                            <input type="text" name="codigoPostal" value = "1014"><br>
                            <br>

                             <li>Direccion
                            <input type="text" name="direccion" = value = "Altamira"><br>
                            <br>

                            <li>Correo
                           <input type="text" name="correo"><br>
                           <br>
                              <li>Numero de Acompañantes
                           <select name="numeroAmigos">

                              <option value=0>0</option>';
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

                            <br>
                            <hr>
                            <INPUT TYPE="SUBMIT" VALUE="Registrar Persona"/>
                            <hr>
            </form>
              <td><a href="../index.html">Volver Atras</a></td>
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
