<?php
	$con=mysqli_connect('localhost','root','','proyecto_ana_501') or die('Error en la conexion servidor');
	$sql="INSERT INTO registro VALUES(null,'".$_POST["NOMBRE"]."','".$_POST["CORREO"]."','".$_POST["FECHA_DE_NACIMIENTO"]."','".$_POST["CIUDAD"]."','".$_POST["GENERO"]."','".$_POST["CONTRASEÑA"]."',)";
	$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
	mysqli_close($con);
	
	echo 'El nombre ingresado es: '.$_POST["NOMBRE"].' '.$_POST["CORREO"].'<br>';
	echo 'El correo es: '.$_POST["FECHA_DE_NACIMIENTO"].'<br>';
	echo 'El correo es: '.$_POST["CIUDAD"].'<br>';
	echo 'El correo es: '.$_POST["GENERO"].'<br>';
	
?>