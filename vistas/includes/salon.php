							<!-- Programas -->
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<form class="mb-10" action="./../php/registrar.php" method="POST">
									<div class="row content-table shadow-sm animate__animated animate__fadeIn animate__faster">

                                    <div class="row mb-3">
										<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bol ">Nueva Area</label>

										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="shadow col-sm-3 col-form-label fw-bold">1. area</label>
											<div class="col-sm-4">
												<input required name=area id=area type="text" class="shadow-sm form-control">
											</div>
										</div>									

    									<div class="row mb-3">
											<div class="col-sm-4">
												<button name="enviadoArea" type="submit" class="btn btn-danger" style="width: 200px;">Enviar Datos</button>
											</div>
										</div>
                        							
									</div>
								</form>
								<div class="row mb-3">
											<div class="col-sm-4">
												<button style="text-decoration:none;" type="submit" class="btn btn-primary mt-2" style="width: 150px; heigth: 50px; "><a class="text-white enl" href="./includes/listado.php">Listar Aprendices</a></button>
											</div>
										</div>
							</div>