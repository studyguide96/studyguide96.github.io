							<!-- DATOS PERSONALES -->
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<form class="mb-10" action="./../php/registrar.php" method="POST">
									<div class="row content-table shadow-sm animate__animated animate__fadeIn animate__faster">
										<?php 
										if($_SESSION['nivel'] == 1){
										?>
										<div class="row mb-3">
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">1. Programa Cursando</label>
											<div class="col-sm-4">
												<label class="shadow-sm form-control" disabled><?php echo $mostrar['programa']?></label>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">2. Numero de Documento</label>
											<div class="col-sm-4">
												<label class="shadow-sm form-control" disabled><?php echo $mostrar['doc']?></label>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">3. Tipo de Documento</label>
											<div class="col-sm-4">
												<label class="shadow-sm form-control" disabled><?php echo $mostrar['tipo_doc']?></label>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPassword3" class="shadow col-sm-3 col-form-label fw-bold">4. Nombres</label>
											<div class="col-sm-4">
												<label class="shadow-sm form-control" disabled><?php echo $mostrar['nombres']?></label>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPassword3" class="shadow col-sm-3 col-form-label fw-bold">5. Apellidos</label>
											<div class="col-sm-4">
												<label class="shadow-sm form-control" disabled><?php echo $mostrar['apellidos']?></label>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">6. Tipo Sexo</label>
											<div class="col-sm-4">
												<label class="shadow-sm form-control" disabled><?php echo $mostrar['sexo']?></label>
											</div>
										</div>										
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">7. Numero de Celular</label>
											<div class="col-sm-4">
												<label class="shadow-sm form-control" disabled><?php echo $mostrar['telefono']?></label>
											</div>
										</div>
										<?php 
										} else{
										?>
										<div class="row mb-3">
										</div>
										<div class="row mb-3">
										<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bol ">Nuevo Aprendiz</label>

										</div>
										<div class="row mb-3">
										
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">1. Programa a Cursar</label>
											<div class="col-sm-4">
											<select name="programa" id="programa"  class="form-select shadow-sm form-control" aria-label=".form-select-lg example" required>
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
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">2. Numero de Documento</label>
											<div class="col-sm-4">
												<input name="doc" required type="number" class="shadow-sm form-control">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">3. Tipo de Documento</label>
											<div class="col-sm-4">
											<select name="tipo_documento" id="tipo_documento"  class="form-select shadow-sm form-control" aria-label=".form-select-lg example" required>
													<?php
                                                    $tipo_documento = "SELECT * FROM tipo_documento;";

													$restipo_documento = ejecutar($tipo_documento);
													?>
														<option value="">Selecione una opcion</option>	
													<?php
													while ($val = mysqli_fetch_array($restipo_documento)) {
													
													echo '<option value="'.$val['id_tipo_doc'].'">'.$val['tipo_doc'].'</option>';
													}
													?>
												</select>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPassword3" class="shadow col-sm-3 col-form-label fw-bold">4. Nombres</label>
											<div class="col-sm-4">
												<input name="nombres" required type="text" class="shadow-sm form-control">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPassword3" class="shadow col-sm-3 col-form-label fw-bold">5. Apellidos</label>
											<div class="col-sm-4">
												<input name="apellidos" required type="text" class="shadow-sm form-control">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">6. Tipo Sexo</label>
											<div class="col-sm-4">
											<select name="sexo" id="sexo"  class="form-select shadow-sm form-control" aria-label=".form-select-lg example" required>
													<?php
                                                    $sexo = "SELECT * FROM sexo;";

													$ressexo = ejecutar($sexo);
													?>
														<option value="">Selecione una opcion</option>	
													<?php
													while ($val = mysqli_fetch_array($ressexo)) {
													
													echo '<option value="'.$val['id_sexo'].'">'.$val['sexo'].'</option>';
													}
													?>
												</select>
											</div>
										</div>

										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">7. Numero de Celular</label>
											<div class="col-sm-4">
												<input name="celular" required type="text" class="shadow-sm form-control">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-4">
												<button type="submit" name="enviadoAprendiz" class="btn btn-danger" style="width: 200px;">Enviar Datos</button>
											</div>
										</div>
										<?php
										
									
										}
										
										?>

										
										
									</div>
									
								</form>
								<?php
									if($_SESSION['nivel'] == 0){
										include "includes/programa.php";
									}
								?>
							</div>