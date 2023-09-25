<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRESUPUESTO PERSONAL</title>
    <link rel="stylesheet" href="Styles.css">
    <<script src="js/funciones.js"></script>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

<?php
    require_once "PHP/Conexion.php";
    $conexion=conexion();
    
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql="SELECT count(*) from CONECTADOS where ip ='$ip'";

    $result=mysqli_query($conexion,$sql);
    while($ver=mysqli_fetch_row($result)){
       $count = $ver[0];
    }
              
?>

<section class="contenido">
        <div id="pag_princ">
        </div> 
    </section>
</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
        <?php 
            if($count == 2){
        ?>
        $('#pag_princ').load('PHP/login.php');
        <?php 
            }else {
        ?>
        $('#pag_princ').load('inicio.php');
        <?php
            }
        ?>
	});
    </script>