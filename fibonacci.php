<?php
if( $_SERVER['REQUEST_METHOD'] == "POST" )
{
    $numero= intval($_POST['fibo']);
    $res= fibonacci($numero);
    print($res);
}
function fibonacci($numero){
    
        
        
            //condicion de salida
            if($numero==0){
                return 0;
            }
            if($numero==1){
                return 1;
            }
          
            if($numero>1){
                
                return  fibonacci($numero -1) + fibonacci($numero-2);
            }
       
     }
     ?>