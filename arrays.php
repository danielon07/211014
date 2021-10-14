
<?php
     $cosas['a']=10;
     $cosas['b']=11;
     $cosas['c']=12;
     $cosas['d']=13;
     $cosas['f']=14;
     
     foreach($cosas as  $clave=>$valor) {
         echo "<tr>";
         echo "<td>";
         echo $clave;
         echo "</td>";

         echo "<td>";
         echo $valor;
         echo "</td>";
         echo "</tr>";
     


     }

     foreach($cosas $clave => $valor){
        foreach($cosas as $clave =>$valor){
           echo $valor."-".$clave2."-".$valor2;
          }
        }
     
?>