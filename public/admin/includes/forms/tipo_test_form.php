<fieldset>
    <div class="form-group">
        <label for="name">Nombre de Test*</label>
          <input type="text" name="titulo" value="<?php echo $edit ? $product['titulo'] : ''; ?>" placeholder="Nombre del test" class="form-control" required="required" id = "name" >
    </div> 

   
    
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
