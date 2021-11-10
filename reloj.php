<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['reloj']))
{
   $res =segundos("000010",36);
   print($res);
  
}
function segundos($cadena,$suma){
    
//print($cadena);

$array_cadena= str_split($cadena);

$len= count($array_cadena)-1;
if($cadena=="000000" ){
    return $suma;
}

    $suma+=convertirASegmentos($cadena,$suma);





for ($i=0; $i < $len+1; $i++) { 
   
    if(intval($array_cadena[$i])!=0){
        $valor=$array_cadena[$i];
        $array_cadena[$i]=($valor-1);
    }
}
$nueva_cadena=implode("",$array_cadena);
return segundos($nueva_cadena, $suma);

}
function convertirASegmentos($cadena,$suma){
    $cantidad_digitos = array(
        "0"=>"6",
        "1"=>"2",
        "2"=>"5",
        "3"=>"5",
        "4"=>"4",
        "5"=>"5",
        "6"=>"6",
        "7"=>"4",
        "8"=>"7",
        "9"=>"6",
);
for ($i=0; $i < strlen($cadena) ; $i++) { 
    # code...
    for ($j=0; $j < count($cantidad_digitos) ; $j++) { 
        # code...
        print_r($cadena[$i], $cantidad_digitos[$j]);
        if ($cantidad_digitos[$j] == $cadena[$i] ) {
            $suma+=intval(key($cantidad_digitos[$j]));
       }
    }
    
       return $suma;
}
}
?>