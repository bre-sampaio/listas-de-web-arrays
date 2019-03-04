<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ex5 </title>
    </head>
    <body>
      
        <select> 
            <?php
                $vetor = array(
                         0 => " Cantores ",
                         1 => " Shawn Mendes ",
                         2 => " MC Hariel ",
                         3 => " Azzy ",
                         4 => " Anitta ",
                         5 => " Zé Neto e Cristiano ",
                         6 => " Justin Bieber ",
                         7 => " Avicii ",
                         8 => " Cynthia Luz ",
                         9 => " MC Igu ",
                );
                
                for($i=0; $i < 10; $i++){
             ?>  
            <option>
                
                <?php
                    echo $vetor[$i];
                ?>
                
            </option>
            
                <?php
                    }
                ?>
            
        </select>    
    </body>
</html>
