<?php

class ExcepcionError extends Exception
{
      
      
    public function imprimir($cuerpo)
    {
        
        
        $estado = $cuerpo['estado'];
        
        $mensaje = $cuerpo['mensaje'];
        
         include 'VistaExcepcion.php' ;
        
    }
    

   

}





