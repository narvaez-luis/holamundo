<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        $e=$_GET['estatura']/100;
        $k=$_GET['kilos'];
        if($e>0 and $k>0 ){
        
        $resultado=$k/($e*$e);
        
        if ($resultado < 18.5) {

                echo "Su Indice de masa corporal es :" . $resultado . "<br>" . "BAJO PESO ";
            }
             else
                if($resultado>18.6 and $resultado<24.9){
                 echo "Su Indice de masa corporal es :" . $resultado . "<br>" . "PESO NORMAL "."";   
               
        }
             else
            if($resultado>25.1){
                  echo "<Su Indice de masa corporal es :" . $resultado . "<br>" . "SOBRE PESO ><br>";
            echo"Usted deberia consultar a su medico de confianza";
           
                }
       
             }
          else {
        echo "Ingrese por favor Datos validos";    
        }
        ?>
        
        
    </body>
</html>


