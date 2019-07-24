<fieldset>
    <div class="form-group">
         <label style="width: 50%;">Logo</label><br>
         <input name="logo" type="file" class="form-control arc"  id="logo" >
           
    </div>
    <div class="form-group">
          <label for="name">Titulo</label>
          <input type="text" name="titulo" value="<?php echo $edit ? $principal['titulo'] : ''; ?>" placeholder="Titulo" class="form-control" required="required" id = "titulo" >
    </div>
    <div class="form-group">
         <label style="width: 50%;">Imagen Principal 1</label><br>
         <input name="imagen_p1" type="file" class="form-control arc"  id="imagen_p1" >
           
    </div> 
     <div class="form-group">
         <label style="width: 50%;">Imagen Principal 2</label><br>
         <input name="imagen_p2" type="file" class="form-control arc"  id="imagen_p2" >
           
    </div>
     <div class="form-group">
         <label style="width: 50%;">Imagen Principal 3</label><br>
         <input name="imagen_p3" type="file" class="form-control arc"  id="imagen_p3" >
           
    </div>
     <div class="form-group">
         <label style="width: 50%;">Imagen Principal 4</label><br>
         <input name="imagen_p4" type="file" class="form-control arc"  id="imagen_p4" >
           
    </div>
    <div class="form-group">
         <label style="width: 50%;">Imagen Cafetería</label><br>
         <input name="imagen_cafeteria" type="file" class="form-control arc"  id="imagen_cafeteria" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Spot Publicitario</label><br>
         <input name="imagen_spot" type="file" class="form-control arc"  id="imagen_spot" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Video Spot</label><br>
         <input name="video" type="file" class="form-control arc"  id="video" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Producto 1 Imagen</label><br>
         <input name="imagen_producto_1" type="file" class="form-control arc"  id="imagen_p" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Producto 2 Imagen</label><br>
         <input name="imagen_producto_2" type="file" class="form-control arc"  id="imagen_p" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Producto 3 Imagen</label><br>
         <input name="imagen_producto_3" type="file" class="form-control arc"  id="imagen_p" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Imagen 1 </label><br>
         <input name="imagen_1" type="file" class="form-control arc"  id="imagen_1" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Imagen 2</label><br>
         <input name="imagen_2" type="file" class="form-control arc"  id="imagen_2" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Imagen 3</label><br>
         <input name="imagen_3" type="file" class="form-control arc"  id="imagen_3" >
           
    </div> 
    <div class="form-group">
        <label for="description">Titulo anuncio</label>
        <input type="text" name="titulo_anuncio" value="<?php echo $edit ? $principal['titulo_anuncio'] : ''; ?>" placeholder="Titulo anuncio" class="form-control" required="required" id="description">
    </div> 
    <div class="form-group">
        <label for="description">Contenido anuncio</label>
        <input type="text" name="contenido_anuncio" value="<?php echo $edit ? $principal['contenido_anuncio'] : ''; ?>" placeholder="Contenido anuncio" class="form-control" required="required" id="description">
    </div>

    <div class="form-group">
        <label for="telefonos">Telefonos</label>
          <input name="telefonos" value="<?php echo $edit ? $principal['telefonos'] : ''; ?>" placeholder="telefonos" class="form-control" type="text" id="telefonos">
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
