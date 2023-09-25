<?php
    function conexion(){
        $servidor="localhost";
        $usuario="root";
        $password="";
        $bd="PRES_PERS";

        $conexion=mysqli_connect($servidor,$usuario,$password,$bd);

        return $conexion;
    }
    
?>