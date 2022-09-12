<?php 
	$i = 0;				

	$dias = ["lunes","martes","miercoles","jueves","viernes"];
	if($_SESSION['nivel'] == 1){
?>
<form class="content-table animate__animated animate__fadeIn animate__faster">
	<table class="table table-borderless">
		<thead>
			<tr>
				<?php 
				
				$dia = [];
				$array1 = ['lu', 'ma', 'mi', 'ju', 'vi'];
				
				?>
				
				<?php
				
				if(is_countable($contarDias) == 0 ){
					echo "AUN NO TIENE UN HORARIO ASIGNADO";
				}
				else{
					
					?>
					<th scope="col"><label class="shadow hora btn-light">Hora</label></th>
					<?php
					$con = 0;
					while($mostrarDias = mysqli_fetch_array($res3)){
						/* $dd= is_countable($mostrarDias);
						echo $mostrarDias[0]; */

						$class = $array1[$con];
						$dia[$con] = $mostrarDias['dia'];
						$con = $con + 1;
					
				?>
					<th scope="col">
						<label class="shadow <?php echo $class ?> btn-light"> 
						<?php echo $mostrarDias['dia'] ?> 
						</label>
					</th>
				
				<?php
					
					} 
				}
				?>
				
			</tr>														
		</thead>

		<tbody>	

			<?php
				$horas = [];
				$array2 = ['lun', 'mar', 'mie', 'jue', 'vie'];
				$arrayhoras = ['06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00','18:00'];
				$cant = count($arrayhoras); 
				$conth = 0;
				while($conth <= $cant ){
					
					if($conth <= 12){
						/* echo $conth; */
						$primera = "SELECT d.dia, ho.hora_inicio, ho.hora_final, c.competencia
									FROM /*aprendiz*/ usuario a, programa p, comp_prog cp, competencia c, horario h, dia d, horas ho
									WHERE a.doc = $docu
									AND a.num_ficha=p.num_ficha
									AND p.num_ficha=cp.num_ficha
									AND c.id_competencia=cp.id_competencia
									AND h.id_comp_prog=cp.id_comp_prog 
									AND d.id_dia=h.id_dia 
									AND ho.id_hora=h.id_hora 
									AND ho.hora_inicio= '$arrayhoras[$conth]'";
						$resPrimera = ejecutar($primera);
						$resSegunda = ejecutar($primera);
						$mostrar1 = mysqli_fetch_array($resSegunda);
						/* $numecon = count($mostrar1);
						echo $numecon."NNN"; */
						?>
						
						<tr>
						
						<?php
						
						if(is_countable($mostrar1) != 0 ){
						?>
							<th scope="row">
							<label class="shadow hor"><?php echo $mostrar1['hora_inicio']." - ".$mostrar1['hora_final']?></label>
							</th>
						<?php
						}
						$cont = 0;
						while($mostrar2 = mysqli_fetch_array($resPrimera)){	

						?>	

							<th scope="row">
								<label href="#info" id="comp" class="shadow <?php echo $array2[$cont] ?> 
								
								<?php
								if($mostrar2['competencia'] != '-'){
								?>
									info
								<?php
								}
								?>
								">
								<?php echo $mostrar2['competencia']?>
								</label>
							</th>

						<?php
							$cont = $cont + 1;
						}
						?>	
				

						</tr>
						<?php
					}
					?>
					
					<?php

					$conth= $conth + 1;
				}
			?>
			<tr>
				
			</tr>
		</tbody>
		<label class="pe" id="info1">PRINCIPAL INFO</label>
		<label class="pe" id="info2" style="display: none">Hello</label>
	</table>
</form>
<?php 
	} else{
		$area = "SELECT area FROM area;";
		$docente = "SELECT docente FROM docente;";
?>
<!-- BUSCADOR NUMERO DE FICHA -->
	<div class="row mb-3">

		<div class="col-sm-4">
			<select name="programas" id="programas"  class="form-select shadow-sm form-control" aria-label=".form-select-lg example" required>
				<?php
				$programa = "SELECT * FROM programa;";

				$resprograma = ejecutar($programa);
				?>
					<option value="">Selecione una opcion</option>	
				<?php
				while ($val = mysqli_fetch_array($resprograma)) {
				echo '<option value="'.$val['num_ficha'].'">'.$val['programa'].'</option>';
				}
				?>
			</select>
			
		</div>
	</div>
	<div  class="content-table animate__animated animate__fadeIn animate__faster" ">	
		<table class="table table-borderless">
			
			<thead>
				<tr>
				<th scope="col"><label class="shadow hora btn-light">Hora</label></th>
				<th scope="col"><label class="shadow lu btn-light">LUNES</label></th>
				<th scope="col"><label class="shadow ma btn-light">MARTES</label></th>
				<th scope="col"><label class="shadow mi btn-light">MIERCOLES</label></th>
				<th scope="col"><label class="shadow ju btn-light">JUEVES</label></th>
				<th scope="col"><label class="shadow vi btn-light">VIERNES</label></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<th scope="row"><label class="shadow hor">06:00 - 07:00</label></th>
					
					<?php 
						$id_hora = 1;
						$id_dia = 0;
						foreach($dias as $variable){
							$i = $i+1;
							$id_dia = $id_dia+1;
							
							$dia = $variable;									
						?>
						<td>
							<label class="<?php echo $dia ?>">
							<form action="../php/registrar.php" method="post">
								<?php include "includes/selects.php"; ?>
							</form>
							</label>		
						</td>
						<?php 
						?>
						
						<?php	
						}
					?>
					
				</tr>
				<tr>
					<th scope="row"><label class="shadow hor">07:00 - 08:00</label></th>
					
					<?php 
						$id_hora = 2;
						$id_dia = 0;
						foreach($dias as $variable){
							$i = $i+1;
							$id_dia = $id_dia+1;
							$dia = $variable;									
						?>
						<td>
							<label class="<?php echo $dia ?>">
							<form action="../php/registrar.php" method="post">
								<?php include "includes/selects.php"; ?>
							</form>
							</label>		
						</td>
						<?php 
						?>
						
						<?php	
						}
					?>
					
				</tr>
				<tr>
				<th scope="row"><label class="shadow hor">08:00 - 09:00</label></th>
				<?php 
					$id_hora = 3;
					$id_dia = 0;
					foreach($dias as $variable){
						$i = $i+1;
						$id_dia = $id_dia+1;
						$dia = $variable;									
					?>
					<td>
						<label class="<?php echo $dia ?>">
						<form action="../php/registrar.php" method="post">
								<?php include "includes/selects.php"; ?>
							</form>
						</label>		
					</td>
					<?php 
					?>
					
					<?php	
					}
				?>
				</tr>
				<tr>
				<th scope="row"><label class="shadow hor">90:00 - 10:00</label></th>
				
				<?php 
					$id_hora = 4;
					$id_dia = 0;
					foreach($dias as $variable){
						$i = $i+1;
						$id_dia = $id_dia+1;
						$dia = $variable;									
					?>
					<td>
						<label class="<?php echo $dia ?>">
						<form action="../php/registrar.php" method="post">
								<?php include "includes/selects.php"; ?>
							</form>
						</label>		
					</td>
					<?php 
					?>
					
					<?php	
					}
				?>
				</tr>
				<tr>
				<th scope="row"><label class="shadow hor">10:00 - 11:00</label></th>
				
				<?php 
					$id_hora = 5;				
					$id_dia = 0;
					foreach($dias as $variable){
						$i = $i+1;
						$id_dia = $id_dia+1;
						$dia = $variable;									
					?>
					<td>
						<label class="<?php echo $dia ?>">
						<form action="../php/registrar.php" method="post">
								<?php include "includes/selects.php"; ?>
							</form>
						</label>		
					</td>
					<?php 
					?>
					
					<?php	
					}
				?>
				</tr>
				<tr>
				<th scope="row"><label class="shadow hor" for="">11:00 - 12:00</label></th>
				
				<?php 
				$id_hora = 6;				
					$id_dia = 0;
					foreach($dias as $variable){
						$i = $i+1;
						$id_dia = $id_dia+1;
						$dia = $variable;									
					?>
					<td>
						<label class="<?php echo $dia ?>">
						<form action="../php/registrar.php" method="post">
								<?php include "includes/selects.php"; ?>
							</form>
						</label>		
					</td>
					<?php 
					?>
					
					<?php	
					}
					?>
				</tr>	
			</tbody>

		</table>
		
				</div>
<?php
	}
?>


<script type="text/javascript">
	$(document).ready(function() {
		recargaLista();

		$('#programas').change(function() {
			recargaLista();
		});
	})
</script>

<script type="text/javascript">
	function recargaLista(){
		$.ajax({
			type: "POST",
			url: "./includes/buscar.php",
			data: "programa=" + $('#programas').val(),
			success: function(r) {
				$('#competencias1').html(r);
				$('#competencias2').html(r);
				$('#competencias3').html(r);
				$('#competencias4').html(r);
				$('#competencias5').html(r);
				$('#competencias6').html(r);
				$('#competencias7').html(r);
				$('#competencias8').html(r);
				$('#competencias9').html(r);
				$('#competencias10').html(r);
				$('#competencias11').html(r);
				$('#competencias12').html(r);
				$('#competencias13').html(r);
				$('#competencias14').html(r);
				$('#competencias15').html(r);
				$('#competencias16').html(r);
				$('#competencias17').html(r);
				$('#competencias18').html(r);
				$('#competencias19').html(r);
				$('#competencias20').html(r);
				$('#competencias21').html(r);
				$('#competencias22').html(r);
				$('#competencias23').html(r);
				$('#competencias24').html(r);
				$('#competencias25').html(r);
				$('#competencias26').html(r);
				$('#competencias27').html(r);
				$('#competencias28').html(r);
				$('#competencias29').html(r);
				$('#competencias30').html(r);
				}
			});
		}
</script>

