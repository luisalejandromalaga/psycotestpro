<fieldset>
    <div class="form-group">
        <label for="name">Titulo*</label>
          <input type="text" name="titulo" value="<?php echo $edit ? $post['titulo'] : ''; ?>" placeholder="Nombre del producto" class="form-control" required="required" id = "name" >
    </div> 

    <div class="form-group">
        <label for="description">Descripción*</label>
        <input type="text" name="descripcion" value="<?php echo $edit ? $post['descripcion'] : ''; ?>" placeholder="Descripcion" class="form-control" required="required" id="description">
    </div> 

    <div class="form-group">
        <label for="fecha">fecha</label>
          <input name="fecha" value="<?php echo $edit ? $post['fecha'] : ''; ?>" placeholder="Fecha" class="Fecha" type="text" id="fecha">
    </div> 

    
    <div class="form-group">
        <label style="width: 50%;">Imagen</label><br>
         <input name="imagen" type="file" class="form-control arc"  id="imagen" >
         
    </div>
      <div class="form-group">
        <label style="width: 50%;">Tipo</label><br>
         <input name="tipo" value="<?php echo $edit ? $post['tipo'] : ''; ?>" type="text" class="tipo"  placeholder="Imagen o Video" id="tipo" >
         
    </div>
    
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
