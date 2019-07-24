<fieldset>
    <div class="form-group">
        <label for="name">Nombre de Producto*</label>
          <input type="text" name="name" value="<?php echo $edit ? $product['name'] : ''; ?>" placeholder="Nombre del producto" class="form-control" required="required" id = "name" >
    </div> 

    <div class="form-group">
        <label for="description">Descripción*</label>
        <input type="text" name="description" value="<?php echo $edit ? $product['description'] : ''; ?>" placeholder="Descripcion" class="form-control" required="required" id="description">
    </div> 

    <div class="form-group">
        <label for="price">Precio</label>
          <input name="price" value="<?php echo $edit ? $product['price'] : ''; ?>" placeholder="precio" class="Precio" type="text" id="price">
    </div> 

    
    <div class="form-group">
        <label style="width: 50%;">Imagen</label><br>
         <input name="url_image" type="file" class="form-control arc"  id="url_image" >
         
             
                
    </div>
    
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
