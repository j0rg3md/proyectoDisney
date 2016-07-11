<?php
require_once("class.php");
$tra=new Trabajo();
$numeroAmigos=($_POST["numeroAmigos"]);
$dias=($_POST["dias"]);
$fecha_estimada_visita=($_POST["fecha_estimada_visita"]);
$hotel=($_POST["hotel"]);
$expira=($_POST["expira"]);
$fecha_inicio_hotel=($_POST["fecha_inicio_hotel"]);
$fecha_fin_hotel=($_POST["fecha_fin_hotel"]);
$pais=($_POST["pais"]);
$direccion=($_POST["direccion"]);
$codigoPostal=($_POST["codigoPostal"]);
$correo =  ($_POST["correo"]);
$codigoRepresentante = $tra->get_codigo_visitante();


  for ($i = 0; $i < $numeroAmigos; $i++) {
    $nombre=($_POST["nombre".$i]);
    $apellido=($_POST["apellido".$i]);
    $segundoNombre=($_POST["segundoNombre".$i]);
    $fecha_nacimiento=($_POST["fecha_nacimiento".$i]);
    $genero=($_POST["genero".$i]);

    $sql ="insert into jnf_visitante (v_nombre,v_apellido,v_segundo_nombre,v_fecha_nac,v_genero,v_codigo_postal,v_correo,v_direccion,lugar,representante) values (
    '".$nombre."','".$apellido."','".$segundoNombre."','".$fecha_nacimiento."','".$genero."',".$codigoPostal.",'".$correo."','".$direccion."',".$pais.",(SELECT (MAX(v_codigo)-".$i.") representante FROM jnf_visitante));";
    $res=pg_exec($sql);

    $rows = $tra->get_tarifas($dias,$fecha_nacimiento);
    $monto = $rows['t_monto'];
    $monto1 = $monto;
    $nombrePais = $tra->get_pais($pais);
        if ($nombrePais['l_nombre'] == 'Estados Unidos') $monto = $monto - ($monto*0.20);

        if ($fecha_estimada_visita == date("Y/m/d", strtotime('+3 month')) )   $monto = $monto - ($monto1*0.15);

        if($expira == 'no expira') $monto = $monto +($monto1*0.2);
    $monto = $monto +($monto*0.02);

    $sql1 = "insert into jnf_boleto (b_fecha_compra,b_monto,b_fecha_estimada,b_tipo,visitante,tarifa) values (
    current_date,".$monto.",'".$fecha_estimada_visita."','".$expira."',(SELECT MAX(v_codigo) representante FROM jnf_visitante),".$rows['t_codigo'].");";
    $res1=pg_exec($sql1);

    $sql2="insert into jnf_hotel_visitante_huesped (hv_fecha_inicio,hv_fecha_fin,visitante,hotel) values(
    '".$fecha_inicio_hotel."','".$fecha_fin_hotel."',(SELECT MAX(v_codigo) representante FROM jnf_visitante),".$hotel.");";
    $res2=pg_exec($sql2);
  }
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
                                <a href="../animalKingdom.php">Animal Kingdom</a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="../agregarParque.php"><i class="fa fa-fw fa-desktop"></i>Agregar Parque</a>
                    </li>
                    <li>
                        <a href="../eliminarParque.php"><i class="fa fa-fw fa-desktop"></i>Eliminar Parque</a>
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
                            Registro Exitoso
                         </h1>

                          <?php echo "<label for='codigo'>Su Codigo de Compra es: ' ".$codigoRepresentante['representante']." '</label>" ?>







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
