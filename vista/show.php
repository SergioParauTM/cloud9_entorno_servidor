
<!DOCTYPE html>

<?php $titulo = $titulosEntrada['titulo'] ?>


<?php ob_start()  ?>
        <h1>   <?=  $titulosEntrada['titulo'] ?>  </h1>
            
            
          <div class="desc">
              
              <?= $titulosEntrada['descripcion'] ?>
              
          </div>
   


<?php  $contenido = ob_get_clean() ?> 

<?php include 'plantilla.php' ?>

