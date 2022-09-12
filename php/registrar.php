<?php
//importamos el archivo de funciones
require_once('../inc/functions.php');
session_start();

//verificamos que se hayan enviado datos
if(isset($_POST['enviadoPrograma'])){
	//almacenamos los datos enviados desde el formulario en variables php
	$numFicha = $_POST['numFicha'];
	$turno = $_POST['turno' ];
	$tipoPrograma = $_POST['tipoPrograma' ];
	$programa = $_POST['programa'];
	
	//guardamos los datos recogidos en una consulta INSERT, deben estar en el mismo orden que en la tabla
	$consulta="INSERT INTO programa VALUES('$numFicha','$programa','$tipoPrograma','$turno')";
	//ejecutamos la consulta
	$res=ejecutar($consulta);
	//si queremos enviar un mensaje de confirmación podemos hacer esto
	if($res)
    echo "<script>
        alert('Programa registrado');
        window.location.replace('../vistas/index.php');
        </script>";
}

if(isset($_POST['enviadoAprendiz'])){
	//almacenamos los datos enviados desde el formulario en variables php
	$programa = $_POST['programa'];
	$doc = $_POST['doc' ];
	$tipo_doc = $_POST['tipo_documento' ];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$sexo = $_POST['sexo'];
	$celular = $_POST['celular'];
	$nivel = 1;

	//guardamos los datos recogidos en una consulta INSERT, deben estar en el mismo orden que en la tabla
	$consulta="INSERT INTO datos_personales VALUES('$doc','$tipo_doc','$nombres','$apellidos','$sexo','$celular')";
	//ejecutamos la consulta
	$res=ejecutar($consulta);
	//si queremos enviar un mensaje de confirmación podemos hacer esto
	if($res){
		$consulta2="INSERT INTO usuario VALUES('$doc', '$programa', '$nivel')";
		$res2 = ejecutar($consulta2);
    
		if($res2) {
			echo "<script>
			alert('Aprendiz registrado');
			window.location.replace('../vistas/index.php');
			</script>";
		}
	}
}
if(isset($_POST['enviadoDocente'])){
	//almacenamos los datos enviados desde el formulario en variables php
	$doc = $_POST['documento' ];
	$tipo_doc = $_POST['tipo_documento' ];
	$docente = $_POST['docente'];
	$apellidos = $_POST['apellidos'];
	$sexo = $_POST['sexo'];

	//guardamos los datos recogidos en una consulta INSERT, deben estar en el mismo orden que en la tabla
	$consulta="INSERT INTO docente VALUES('$doc','$docente', '$tipo_doc', '$apellidos','$sexo')";
	//ejecutamos la consulta
	$res=ejecutar($consulta);
	//si queremos enviar un mensaje de confirmación podemos hacer esto
	if($res){
	
			echo "<script>
			alert('Docente registrado');
			window.location.replace('../vistas/index.php');
			</script>";
		
	}
}
if(isset($_POST['enviadoArea'])){
	//almacenamos los datos enviados desde el formulario en variables php
	$salon = $_POST['area'];

	//guardamos los datos recogidos en una consulta INSERT, deben estar en el mismo orden que en la tabla
	$consulta="INSERT INTO area VALUES(null,'$salon')";
	//ejecutamos la consulta
	$res=ejecutar($consulta);
	//si queremos enviar un mensaje de confirmación podemos hacer esto
	if($res){
	
			echo "<script>
			alert('Area registrada');
			window.location.replace('../vistas/index.php');
			</script>";
		
	}
}
if(isset($_POST['enviadoHorario'])){
	//almacenamos los datos enviados desde el formulario en variables php
	$id_competencia = $_POST['competencia'];
	$id_area = $_POST['area'];
	$id_docente = $_POST['docente'];
	$id_dia = $_POST['id_dia'];
	$id_hora = $_POST['id_hora'];

	echo $id_competencia;
	//guardamos los datos recogidos en una consulta INSERT, deben estar en el mismo orden que en la tabla
	$consulta="INSERT INTO horario VALUES(null,'$id_dia', '$id_competencia', '$id_hora', '$id_area', '$id_docente')";
	//ejecutamos la consulta
	$res=ejecutar($consulta);
	//si queremos enviar un mensaje de confirmación podemos hacer esto
	if($res){
	
			echo "<script>
			alert('Materia registrada');
			window.location.replace('../vistas/index.php');
			</script>";
		
	}
}


?>