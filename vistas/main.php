<?php 

	session_start();
	$doc = $_SESSION['documento'];
	if(empty($doc)){
		header('location: ../index.html');
	}

    require_once("../inc/functions.php");
	$docu = $_GET['doc'];
	
	$sql = "SELECT dp.doc, dp.nombres, dp.apellidos,  dp.telefono, s.sexo, tp.tipo_doc, p.programa
			FROM datos_personales dp, sexo s, tipo_documento tp, programa p, /*aprendiz*/ usuario a
			WHERE dp.doc= $docu 
			AND s.id_sexo = dp.id_sexo 
			AND tp.id_tipo_doc = dp.id_tipo_doc 
			AND a.doc=dp.doc 
			AND p.num_ficha=a.num_ficha";
	$res = ejecutar($sql);
	$mostrar = mysqli_fetch_array($res);

	$dias = "SELECT d.dia FROM dia d";
	$res3 = ejecutar($dias);

	$verificar = "SELECT d.dia, ho.hora_inicio, ho.hora_final, c.competencia
					FROM /*aprendiz*/ usuario a, programa p, comp_prog cp, competencia c, horario h, dia d, horas ho
					WHERE a.doc = $docu
					AND a.num_ficha=p.num_ficha
					AND p.num_ficha=cp.num_ficha
					AND c.id_competencia=cp.id_competencia
					AND h.id_comp_prog=cp.id_comp_prog 
					AND d.id_dia=h.id_dia 
					AND ho.id_hora=h.id_hora";
	$res2 = ejecutar($verificar);
	$contarDias = mysqli_fetch_array($res2);
	/*$horario = "SELECT d.dia, h.hora_inicio, h.hora_final, c.competencia
				FROM horario h, aprendiz a, dia d, competencia c, comp_prog cp, programa p 
				WHERE a.doc = $docu  
				AND c.id_competencia=cp.id_competencia 
				AND p.num_ficha=cp.num_ficha 
				AND a.num_ficha=p.num_ficha 
				AND d.id_dia=h.id_dia
				AND h.id_comp_prog=cp.id_comp_prog 
				AND h.hora_inicio='06:00:00' 
	/* AND h.hora_final='07:00:00' */ /*AND d.id_dia=h.id*
	ORDER BY d.dia, h.hora_inicio";
	$res2 = ejecutar($horario);*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "includes/head.php"; ?>
</head>

<body>
	<section class="h-100">
		<div class="container">
			<div class="card shadow-lg animate__animated animate__fadeIn animate__faster">
				<div class="card-body p-5">
					<!-- <div class="container"> -->
						<div class="titlemain">
							<span class="textmain fw-bold"><img src="../img/logo1.png" alt="logo" width="45"> Guia de Estudio</span>
						</div>

						<!-- NAV AND TABS -->
						<?php include "includes/nav.php"; ?>

						<div class="tab-content" id="pills-tabContent">

							<!-- DATOS PERSONALES -->
							<?php include "includes/data.php"; ?>

							<!-- HORARIO -->
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<?php 
									include "includes/schedule.php"; 
								/* if($_SESSION['nivel'] == 1){
									include "includes/schedule.php"; 
								}else{
									include "includes/admin_schedule.php"; 
								} */
								?>
							</div>

							<!-- MAPA INTERACTIVO -->
							<div class="tab-pane fade mainmap shadow-sm" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<?php include "includes/map.php"; ?>
							</div>
	
						</div> 
					<!-- </div> -->
				</div>	
			</div>
		</div>
	</section>

	<!-- Modal -->
	<?php include "includes/modal.php"; ?>

</body>
</html>