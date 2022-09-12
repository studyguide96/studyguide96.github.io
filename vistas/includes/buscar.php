<?php
//importamos el archivo de funciones
require_once('../../inc/functions.php');
session_start();

//almacenamos los datos enviados desde el formulario en variables php
$programa = $_POST['programa'];
echo $programa;
//guardamos los datos recogidos en una consulta INSERT, deben estar en el mismo orden que en la tabla
$consulta = "SELECT cp.id_comp_prog, c.competencia
			FROM competencia c, comp_prog cp, programa p 
			WHERE cp.num_ficha = '$programa' 
			AND c.id_competencia = cp.id_competencia
  			AND p.num_ficha = cp.num_ficha";
//ejecutamos la consulta
$res=ejecutar($consulta);
//si queremos enviar un mensaje de confirmación podemos hacer esto
if($res){
	$cadena = "<select class='form-select-sm form-control sel' aria-label='.form-select-lg example' name='competencia' id='competencia'>";
	while($var = mysqli_fetch_row($res)){
		$cadena = $cadena.'<option value="'.$var['0'].'">'.utf8_encode($var['1']).'</option>';
	}
	echo $cadena."</select>";
}else{
	echo "mal";
}
