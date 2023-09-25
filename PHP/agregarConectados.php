<?php 
    require_once "conexion.php";
	$conexion=conexion();
	
    

	$e=$_POST['email'];
	$c=$_POST['contraseña'];
	$i=$_SERVER['REMOTE_ADDR'];


    $sql="SELECT count(*) from conectados where EMAIL = '$e'";

    $result=mysqli_query($conexion,$sql);
    while($ver=mysqli_fetch_row($result)){
        $count_existe = $ver[0];
    }
    
    if ($count_existe == 0){
        $sql="SELECT count(*) from conectados";

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){
            $count = $ver[0];
        }
        $ultnum = $count + 1;

        $sql="INSERT into conectados (id,email,contraseña,ip)
								values ('$ultnum','$e','$c','$i')";
	    echo $result=mysqli_query($conexion,$sql);
    }else{
        $sql="UPDATE conectados set ip='$i'
				where email='$e'";
        echo $result=mysqli_query($conexion,$sql);
    }
 ?>