
<div class="modalHorario fade" id="modalHorario" tabindex="-1" aria-labelledby="modalHorarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalHorarioLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
				<div  id="competencias<?php echo $i?>"  >
				<label class="error" for="name" id="name_error">This field is required.</label>
				</div>


				<select class="form-select-sm form-control sel" aria-label=".form-select-lg example" name="area" id="area" >
					<?php
					$resArea = ejecutar($area);
					while ($val = mysqli_fetch_array($resArea)) {
					echo '<option value="'.$val['id_area'].'">'.$val['area'].'</option>';
					}
					?>
				</select>
				<label class="error" for="area" id="area_error">This field is required.</label>


				<select class="form-select-sm shadow form-control sel" aria-label=".form-select-lg example" name="docente" id="docente" >
					<?php
					$resDocente = ejecutar($docente);
					while ($val = mysqli_fetch_array($resDocente)) {
					echo '<option value="'.$val['id_docente'].'">'.$val['docente'].$val['apellidos'].'</option>';
					}
					?>
				</select>
				<label class="error" for="docente" id="docente_error">This field is required.</label>

				<input id="id_dia" name="id_dia" type="hidden" value="<?php echo $id_dia ?>">
				<input id="id_hora" name="id_hora" type="hidden" value="<?php echo $id_hora ?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>