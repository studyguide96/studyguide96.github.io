							<!-- Programas -->
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<form class="mb-10" action="./../php/registrar.php" method="POST">
									<div class="row content-table shadow-sm animate__animated animate__fadeIn animate__faster">

                                    <div class="row mb-3">
										<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bol ">Nuevo Programa</label>

										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">1. Numero de ficha</label>
											<div class="col-sm-4">
												<input required name=numFicha id=numFicha type="number" class="shadow-sm form-control">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">2. Programa</label>
											<div class="col-sm-4">
												<input required name=programa id=programa type="text" class="shadow-sm form-control">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">3. Tipo de Programa</label>
											<div class="col-sm-4 mb-3">
												
                                                <select name="tipoPrograma" id="tipoPrograma"  class="form-select shadow-sm form-control" aria-label=".form-select-lg example" required>
													<?php
                                                    $tipo_programa = "SELECT * FROM tipo_programa;";

													$restipo_programa = ejecutar($tipo_programa);
													?>
														<option value="">Selecione una opcion</option>	
													<?php
													while ($val = mysqli_fetch_array($restipo_programa)) {
													echo '<option value="'.$val['id_tipo_prog'].'">'.$val['tipo_programa'].'</option>';
													}
													?>
												</select>
											</div>
										</div>
										<div  class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">4. Turno del Programa</label>
											<div class="col-sm-4 ">
												
                                                <select name="turno" id="turno"  class="form-select shadow-sm form-control" aria-label=".form-select-lg example" required>
													<?php
                                                    $turno = "SELECT * FROM turno;";

													$resturno = ejecutar($turno);
													?>
														<option value="">Selecione una opcion</option>	
													<?php
													while ($val = mysqli_fetch_array($resturno)) {
													echo '<option value="'.$val['id_turno'].'">'.$val['turno'].'</option>';
													}
													?>
												</select>
											</div>
											
										</div>

    									<div class="row mb-3">
											<div class="col-sm-4">
												<button name="enviadoPrograma" type="submit" class="btn btn-danger" style="width: 200px;">Enviar Datos</button>
											</div>
										</div>
                        							
									</div>
								</form>
								<?php 
									if($_SESSION['nivel'] == 0){
										include "includes/docente.php";
									}
								?>
							</div>