 <?php 
        

          
          
 class ObtenerTitulos{
  
     const ESTADO_CREACION_EXITOSA = 1;
    const ESTADO_CREACION_FALLIDA = 2;
    const ESTADO_ERROR_BD = 3;
    const ESTADO_AUSENCIA_CLAVE_API = 4;
    const ESTADO_CLAVE_NO_AUTORIZADA = 5;
    const ESTADO_URL_INCORRECTA = 6;
    const ESTADO_FALLA_DESCONOCIDA = 7;
    const ESTADO_PARAMETROS_INCORRECTOS = 8;

    const CODIGO_EXITO = 1;
    const ESTADO_EXITO = 1;
    const ESTADO_ERROR = 2;
    const ESTADO_ERROR_PARAMETROS = 4;
    const ESTADO_NO_ENCONTRADO = 5;

             
              
   public function get_titulos (){
            
           $titulosEntrada = array();
           
             $query = "SELECT * FROM entradas";
            $sentencia = ConexionBD::obtenerInstancia()->obtenerBD()->prepare($query);
     
             if ($sentencia ->execute()){
                    
     
               while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC)){
                   $titulosEntrada [] = $fila;
                   
               }
           
           
                return $titulosEntrada;
                
                
          }else{
              return null;
          }
          
     
          
     }
     
     
     
   public function get_entradas_id($id){
    
 $comando = " SELECT * FROM entradas WHERE id = ? ";
            // Preparar sentencia
            $sentencia = ConexionBD::obtenerInstancia()->obtenerBD()->prepare($comando);

           $sentencia->bindParam(1, $id, PDO::PARAM_INT);

          if ($sentencia->execute()){
                return $sentencia->fetch(PDO::FETCH_ASSOC);
            }else{
                return null;
}
     
    }
     
     
     
     
          }
          
        
        ?>
        
        