

    <div  id="competencias<?php echo $i?>"  >
    </div>


    <select class="form-select-sm form-control sel" aria-label=".form-select-lg example" name="area" id="area" >
      <?php
      $area = "SELECT * FROM area;";
      
      $resArea = ejecutar($area);
      while ($val = mysqli_fetch_array($resArea)) {
      echo '<option value="'.$val['id'].'">'.$val['area'].'</option>';
      }
      ?>
    </select>


    <select class="form-select-sm shadow form-control sel" aria-label=".form-select-lg example" name="docente" id="docente" >
      <?php
      $docente = "SELECT * FROM docente;";
      
        $resDocente = ejecutar($docente);
      while ($val = mysqli_fetch_array($resDocente)) {
        echo '<option value="'.$val['doc'].'">'.$val['docente'].'</option>';
      }
      ?>
    </select>

    <input id="id_dia" name="id_dia" type="hidden" value="<?php echo $id_dia ?>">
    <input id="id_hora" name="id_hora" type="hidden" value="<?php echo $id_hora ?>">

    
    <div class="row mb-3">
        <div class="text-center justify-content-end">
          <button type="submit" name="enviadoHorario"  class="btn btn-transparent" style="width: 100px; height: 20px">Enviar</button>
        </div>
      </div>


