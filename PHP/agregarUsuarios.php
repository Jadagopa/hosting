<?php 

	require_once "conexion.php";
	$conexion=conexion();
	
	
	$sql="SELECT count(*) from USUARIOS";

    $result=mysqli_query($conexion,$sql);
    while($ver=mysqli_fetch_row($result)){
       $count = $ver[0];
    }
		$ultnum = $count + 1;
	
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$c=$_POST['contraseña'];

	$sql="INSERT into USUARIOS (id,nombre,apellido,email,contraseña)
								values ('$ultnum','$n','$a','$e','$c')";
	echo $result=mysqli_query($conexion,$sql);

 ?>