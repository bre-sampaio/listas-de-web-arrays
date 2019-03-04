<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ex4 </title>
    </head>
    <body>
        <?php
            $vetor = array();
           
            for($i=0; $i <= 50; $i++){
                $vetor[$i] = ($i + 1) * 2;
            }
            var_dump($vetor);
        ?>
    </body>
</html>
