<?php

	include('conexion.php');

	$count=0;
	if(!empty($_POST['add'])) {  
		$autor = mysqli_real_escape_string($con,$_POST["autor"]);
		$apellidorepresentante = mysqli_real_escape_string($con,$_POST["apellidorepresentante"]);
		$nombrestablecimiento = mysqli_real_escape_string($con,$_POST["nombreestablecimiento"]);
		$ruc = mysqli_real_escape_string($con,$_POST["ruc"]);
		$phone = mysqli_real_escape_string($con,$_POST["phone"]);
		$Email = mysqli_real_escape_string($con,$_POST["Email"]);
		$direccion = mysqli_real_escape_string($con,$_POST["direccion"]);
	
		$mensaje = mysqli_real_escape_string($con,$_POST["mensaje"]); 
		
		
		
		
		$sql = "INSERT INTO datos (autor,apellidorepresentante, nombreestablecimiento, ruc, phone, Email, direccion, mensaje) 
		VALUES('" . $autor . "','" . $apellidorepresentante . "','" . $nombrestablecimiento. "','" .$ruc."','".$phone."','".$Email."','".$direccion."','" . $mensaje . "')";
		mysqli_query($con, $sql);
	}
	$sql2="SELECT * FROM datos WHERE estado = 0";
	$result=mysqli_query($con, $sql2);
	$count=mysqli_num_rows($result);

	header( 'Location: ../vistas/registration.php' ) ;
?>
