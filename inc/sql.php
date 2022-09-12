<?php
include_once 'functions.php';
function ejecutar($sql)
 {    
        $connect = new Tools();
        $conexion = $connect->connectDB();
        $consulta = mysqli_query($conexion,$sql);
        if(!$consulta){
            echo "No se ha podido ejecutar la consulta en la base de datos<br><br>".mysqli_error($conexion);
        }
        $connect->disconnectDB($conexion);
        return $consulta;
}

function select($sql)
{
		$connect = new Tools();
        $conexion = $connect->connectDB();
        $ejecutar = mysqli_query($conexion,$sql);
		$asociar=mysqli_fetch_assoc($ejecutar);
		$cantidad=mysqli_num_rows($ejecutar); 
        $connect->disconnectDB($conexion);
        return $asociar;
}