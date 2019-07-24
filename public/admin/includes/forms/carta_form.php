<fieldset>
    <div class="form-group">
        <label for="name">Nombre de Producto*</label>
          <input type="text" name="nombre" value="<?php echo $edit ? $carta['nombre'] : ''; ?>" placeholder="Nombre del producto" class="form-control" required="required" id = "name" >
    </div> 

    <div class="form-group">
        <label for="">Descripción*</label>
        <input type="text" name="contenido" value="<?php echo $edit ? $carta['contenido'] : ''; ?>" placeholder="Descripcion" class="form-control" required="required" id="description">
    </div> 

    <div class="form-group">
        <label for="price">Precio</label>
          <input name="precio" value="<?php echo $edit ? $carta['precio'] : ''; ?>" placeholder="precio" class="Precio" type="text" id="price">
    </div> 
    <div class="form-group">
        <label for="tipo">Tipo</label>
          <input name="tipo" value="<?php echo $edit ? $carta['tipo'] : ''; ?>" placeholder="Bebida,Emparedado,etc" class="Tipo" type="text" id="Tipo">
    </div>
    
    <div class="form-group">
        <label style="width: 50%;">Imagen</label><br>
         <input name="imagen" type="file" class="form-control arc"  id="imagen" >
         
             
                
    </div>
    
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
