<fieldset>
   
    <div class="form-group">
         <label style="width: 50%;">Imagen Principal</label><br>
         <input name="imagen_p" type="file" class="form-control arc"  id="imagen_p" >
           
    </div> 
     <div class="form-group">
        <label for="description">Título Principal</label>
        <input type="text" name="titulo" value="<?php echo $edit ? $tostaduria['titulo'] : ''; ?>" placeholder="Titulo ..." class="form-control" required="required" id="titulo">
    </div> 
     

    <div class="form-group">
         <label style="width: 50%;">Imagen 1 </label><br>
         <input name="imagen_s1" type="file" class="form-control arc"  id="imagen_s1" >
           
    </div> 
    <div class="form-group">
         <label style="width: 50%;">Imagen 2</label><br>
         <input name="imagen_s2" type="file" class="form-control arc"  id="imagen_s2" >
           
    </div> 


    
    
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
