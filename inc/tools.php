<?php
include_once 'functions.php';
class Tools{
     function connectDB(){   
        $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($conexion){
        }else{
               echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>';
        }
        mysqli_query ($conexion,"SET NAMES 'utf8'");
		mysqli_set_charset($conexion, "utf8");
        return $conexion;
    }
    function disconnectDB($conexion){
       $close = mysqli_close($conexion);
                if($close){
                }else{
                    echo 'Ha sucedido un error inexperado en la desconexion de la base de datos<br>';
                }   
        return $close;
    }
    
    function desplegable($sql){
        $conexion = $this->connectDB();
        if(!$result = mysqli_query($conexion, $sql)) die(mysqli_error($conexion));
            $rawdata = array();
            $i=0;
            while($row = mysqli_fetch_array($result))
            {
                $rawdata[$i] = $row;
                $i++;
            }
        $this->disconnectDB($conexion);
        return $rawdata;
    }

}