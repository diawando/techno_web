<!DOCTYPE html>
<html lang="fr">
    <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
           <?php
              include("etudiant.php");
               
               $E1=new Etudiant("erick", "Moussa", 25);
               $E2=new Etudiant("Bah", "Bailo", 28);
            
               //echo $E1 -> age . "<br>";
                 
               echo $E1->presentation();
               echo "<br>";
               echo $E2->presentation();
               echo "<br>";
               echo $E1->setAge(140);
               echo "<br>";
               echo $E1->presentation();
           ?>
    </body>

</html>