<!Doctype html>
<html>
     <head>
          
     </head>
     <body>
        <h1>Bienvenue dans mon premier programme PHP</h1>
  <?php

     $genre = "";
     $distance = 0;

     if ( $genre == "femme" && $distance < 8){
            echo "Du courage Madame";
     }
     elseif ($genre == "femme" && $distance > 8){
            echo "Bravo Mme";
     }
     elseif ($genre == "homme" && $distance < 8){
            echo "nul pour un homme";
     }
     elseif ($genre == "homme" && $distance > 8){
            echo "un homme doit faire plus";
     }else{
          echo "entrer une bonne valeur";
     }
     
  ?>
     </body>
</html>