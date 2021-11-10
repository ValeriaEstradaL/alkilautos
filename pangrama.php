<?php

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['pangrama']))
{
    $res=pangrama();
  print($res);
}


    function pangrama(){
      //  $texto = $_POST['dato'];
      $searchString = " ";
      $replaceString = "";
        $string= strtolower($_POST['pangrama']);
        $outputString = str_replace($searchString, $replaceString, $string); 
       $sin_tildes= eliminarTildes($outputString);
       
         $string_abecedario= "abcdefghijklmnopqrstuvwxyz";
         $array_abecedario= array ("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
         $length= strlen($sin_tildes);
   
         if($length < 25){
           return false;
         }
         else {

          for ($i=0; $i < $length; $i++) { 
            
            
             $caracter=$sin_tildes[$i];
             if (($clave = array_search($caracter, $array_abecedario)) !== false) {
              unset($array_abecedario[$clave]);
              
          }
              
   
            }
          }
        if(empty($array_abecedario)){
          return "Sí";

        }else{ 
          return "No";
        }

        
    }


function eliminarTildes($cadena){
		$cadena = str_replace(
		array('Á', 'á'),
		array('A',  'a'),
		$cadena
		);
 

		$cadena = str_replace(
		array('É', 'é' ),
		array('E',  'e'),
		$cadena );
 
		//Reemplazamos la I y i
		$cadena = str_replace(
		array('Í',  'í', ),
		array('I',  'i'),
		$cadena );
 
		//Reemplazamos la O y o
		$cadena = str_replace(
		array('Ó',  'ó'),
		array('O', 'o'),
		$cadena );
 
		//Reemplazamos la U y u
		$cadena = str_replace(
		array('Ú',  'ú', 'ü'),
		array('U', 'u', 'u'),
		$cadena );
 
	
		return $cadena;
	} 
?>