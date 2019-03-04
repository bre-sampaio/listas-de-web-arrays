<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $vetor = array();
            $soma = 0;
  
            for($i=0; $i < 30; $i++){
                $vetor[$i] = $i+1;
                $soma +=  $vetor[$i];
            }
            
            $resul = array();    
            
             for ($i=1; $i < 30; $i++){
                 
                 if($vetor[$i] > $vetor[$i - 1]){
                     $resul[0] = $vetor[$i];
                     $resul [1] = $i;
                 }
             }
            var_dump($vetor);
            
               echo "Maior valor: " .$resul[0];
              
               echo "<br> Pocição: " .$resul[1];
               
               echo "<br> Soma: " .$soma;
               
               echo "<br> Média: " .($soma / count ($vetor));
        ?>
    </body>
</html>
