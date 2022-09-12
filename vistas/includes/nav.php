						<!-- NAV AND TABS -->
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
							  
							<button class="shadow-sm nav-link active fw-bold" id="pills-home-tab" 
							data-bs-toggle="pill" data-bs-target="#pills-home" type="button" 
							role="tab" aria-controls="pills-home" aria-selected="true">
							<?php 
							if($_SESSION['nivel'] == 1){
			 				?>
							Datos personales
							<?php 
							} else{
							?>
							Formulario De Registros
							<?php
							}
							?>
							</button>
							</li>


							<?php 
							if($_SESSION['nivel'] == 0){
			 				?>
							<li class="nav-item" role="presentation">
							  <button class="shadow-sm nav-link fw-bold" id="pills-profile-tab" 
							  data-bs-toggle="pill" data-bs-target="#pills-profile-turno" type="button" 
							  role="tab" aria-controls="pills-profile" aria-selected="false">Formulario de Horario de Clases</button>
							</li>
							<?php 
							} 
							?>

							<!-- <php 
							if($_SESSION['nivel'] == 0){
			 				?>
							<li class="nav-item" role="presentation">
							  <button class="shadow-sm nav-link fw-bold" id="pills-profile-tab" 
							  data-bs-toggle="pill" data-bs-target="#pills-profile-turno" type="button" 
							  role="tab" aria-controls="pills-profile" aria-selected="false">Horario Tarde</button>
							</li>
							<php 
							} 
							?> -->

							
							<?php 
							if($_SESSION['nivel'] == 1){
			 				?>
							<li class="nav-item" role="presentation">
							  <button class="shadow-sm nav-link fw-bold" id="pills-profile-tab" 
							  data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" 
							  role="tab" aria-controls="pills-profile" aria-selected="false">Horario de clases</button>
							</li>
							<?php 
							} 
							?>

							

							<?php 
							if($_SESSION['nivel'] == 1){
			 				?> 
								<li class="nav-item" role="presentation">
								<button class="shadow-sm nav-link fw-bold" id="pills-contact-tab" 
								data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" 
								role="tab" aria-controls="pills-contact" aria-selected="false">Mapa interactivo</button>
								</li>
							<?php 
							} 
							?>

							<!-- <li class="sep">
							</li> -->
							<li class="nav-item" role="presentation">
								<a class="shadow-sm nav-link fw-bold enlace"
								href="../php/cerrar_sesion.php">Desactivar Sesión</a>
							</li>
						</ul>

                        