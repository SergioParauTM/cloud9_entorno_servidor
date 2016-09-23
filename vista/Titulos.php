
<!DOCTYPE html>

<?php $titulo=" COSA DE PELICULAS" ?>

<?php ob_start()  ?>
        <ul>
            <h1>Todos los titulos de peliculas</h1>
            <?php 
            
             foreach($titulosEntrada as $titulo_pelis): ?>
            <li>
               <a href="show.php?id=≤?=$titulo['id'] ?>">
                   <?php echo $titulo_pelis ['titulo'] ?>
               </a>
            </li>
               <?php  endforeach  ?>
        </ul>


<?php  $contenido = ob_get_clean() ?> 

<?php include 'plantilla.php' ?>

