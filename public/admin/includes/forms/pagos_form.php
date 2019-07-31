<fieldset>
     <div class="form-group">
        <label for="name">Usuario</label>
          <input type="text" name="estado" value="<?php echo $edit ? $pagos['id_user'] : ''; ?>" placeholder="Dirección" class="form-control" required="required" id = "name" >
    </div>
     <div class="form-group">
        <label for="name">Test</label>
          <input type="text" name="estado" value="<?php echo $edit ? $pagos['id_tipo_test'] : ''; ?>" placeholder="Dirección" class="form-control" required="required" id = "name" >
    </div>
    <div class="form-group">
        <label for="name">Imagen</label>
            <img src="../vouchers/<?php echo $pagos['voucher']; ?>">
    </div>
    <div class="form-group">
        <label for="name">Estado</label>
          <input type="text" name="estado" value="<?php echo $edit ? $pagos['estado'] : ''; ?>" placeholder="Dirección" class="form-control" required="required" id = "name" >
    </div> 

    <div class="form-group">
        <label for="detalles">Número de test comprados</label>
        <input type="text" name="n_tests_comprados" value="<?php echo $edit ? $pagos['n_tests_comprados'] : ''; ?>" placeholder="Telefono" class="form-control" required="required" id="telefono">
    </div> 
   
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
