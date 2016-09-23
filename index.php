<?php

// Constantes de estado
const ESTADO_URL_INCORRECTA = 2;

require_once 'modelo/ConexionBD.php';

require_once 'controlador/ObtenerTitulos.php';
require_once 'Excepciones/ExcepcionError.php';


// Extraer segmento de la url
if (isset($_GET['PATH_INFO']))
    $peticion = explode('/', $_GET['PATH_INFO']);
    
 

switch($peticion[0]){
     case "todo":
          
 $titulosEntrada = ObtenerTitulos::get_titulos();
 
    require'vista/Titulos.php';
    
          break;
          
     case "detalle":
          $id_peticion = $peticion[1];
 
          $titulosEntrada = ObtenerTitulos::get_entradas_id($id_peticion);
           require'vista/show.php';
               break;
               
               default:
                    
                 $cuerpo = [
            "estado" => ESTADO_URL_INCORRECTA,
            "mensaje" => utf8_encode("ERROR AL HACER LA PETICION")
        ];
          
             ExcepcionError::imprimir($cuerpo);
        
                    break;
                    
}


?>