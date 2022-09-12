<?php
include('../inc/functions.php');

$doc = $_GET['doc'];

$consulta = "DELETE from datos_personales where doc=$doc;";
$res = ejecutar($consulta);
if($res)
    echo "<script>
        alert('Aprendiz Eliminado');
        window.location.replace('../vistas/index.php');
        </script>";