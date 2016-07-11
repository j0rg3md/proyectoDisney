<?php
require_once("class.php");
$tra=new Trabajo();
?>

<html>
<title>CRUD</title>
<body >
<h1>CRUD</h1>


<form action="modificar.php" method="post">
<li>Nombre 
<input type="text" name="nombre"><br>
                                                       
<br>                                                       
                
<li>Comentario 
<input type="text" name="comentario"><br>
<br>
<br>
<br>
<li>Modificar nombre a
<input type="text" name="nombre2"><br>
                                                       
<br>                                                       
                
<li>Modificar comentario a
<input type="text" name="comentario2"><br>
<br>

<hr>
<INPUT TYPE="SUBMIT" VALUE="Modificar Persona"/>


<hr>
</form>
</body>
</html>
<td><a href="index.php">Volver Atras</a></td>