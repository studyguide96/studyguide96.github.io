<?php

require_once("../inc/functions.php");

if(isset($_POST['enviado'])){

    $doc = $_POST['documento'];

    $consulta = "SELECT * FROM usuario WHERE doc = '$doc' ";
    /* $consulta = "SELECT u.doc, t.turno 
                FROM usuario u, programa p, turno t 
                WHERE u.doc = '$doc'
                AND u.num_ficha = p.num_ficha"; */

    $res = ejecutar($consulta);
    $cantidad = mysqli_num_rows($res); 
    $row = mysqli_fetch_array($res);
    if($cantidad != 0){
        session_start();
        $_SESSION['documento'] = $doc; 
        $_SESSION['nivel'] = $row['nivel']; 
        
        header("location: ../vistas/index.php");

        echo   $_SESSION['nivel'];
    }
    else{
        echo "<script>
            alert('El usuario no se encuentra registrado');
            window.location.replace('../index.html');
            </script>";
    }
}
?>
<!-- ?<php

require_once("../inc/functions.php");

if(isset($_POST['enviado'])){

    $doc = $_POST['documento'];

    $consulta = "SELECT * FROM aprendiz WHERE doc = '$doc' ";

    $res = ejecutar($consulta);
    $cantidad=mysqli_num_rows($res); 

    if($cantidad != 0){
        header("location: ../vistas/main.php?doc=$doc");
    }
    else{
        echo "<script>
            alert('El usuario no se encuentra registrado');
            window.location.replace('http://localhost/studyguide/');
            </script>";
    }
}
?> -->

