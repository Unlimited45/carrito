<?php
$con=mysqli_connect("localhost","root","","unlimited_web") or die ("ERROR DE CONEXION");
$total=0;
$email = $_GET['us'];
$consulta= "SELECT * FROM `usuarios` WHERE email like '$email'";
$resultado=mysqli_query ($con, $consulta);
$fila =mysqli_fetch_array($resultado);
