							<!-- Programas -->
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<form class="mb-10" action="./../php/registrar.php" method="POST">
									<div class="row content-table shadow-sm animate__animated animate__fadeIn animate__faster">

                                    <div class="row mb-3">
										<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bol ">Nuevo Docente</label>

										</div>
                                        <div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">1. Tipo Docuemtno</label>
											<div class="col-sm-4 mb-3">
												
                                                <select name="tipo_documento" id="tipoPrograma"  class="form-select shadow-sm form-control" aria-label=".form-select-lg example" required>
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
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">2. Documento</label>
											<div class="col-sm-4">
												<input required name=documento id=numFicha type="number" class="shadow-sm form-control">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">3. Nombres</label>
											<div class="col-sm-4">
												<input required name=docente id=programa type="text" class="shadow-sm form-control">
											</div>
										</div>

										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">4. Apellidos</label>
											<div class="col-sm-4">
												<input required name=apellidos id=programa type="text" class="shadow-sm form-control">
											</div>
										</div>
                                        <div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">5. Sexo</label>
											<div class="col-sm-4 mb-3">
												
                                                <select name="sexo" id="tipoPrograma"  class="form-select shadow-sm form-control" aria-label=".form-select-lg example" required>
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
											<div class="col-sm-4">
												<button name="enviadoDocente" type="submit" class="btn btn-danger" style="width: 200px;">Enviar Datos</button>
											</div>
										</div>
                        							
									</div>
								</form>
								<?php 
									if($_SESSION['nivel'] == 0){
										include "includes/salon.php";
									}
								?>
							</div>