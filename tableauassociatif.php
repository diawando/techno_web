<!Doctype html>
<html lang="fr">
    <head>
    </head>
    <body>
        <h2>Les tableaux associatif</h2>

        <?php
              $etudiants = [
                ["nom"=>"Aliou", "age"=>35, "add"=>"kipe"],
                ["nom"=>"Benoit", "age"=>40, "add"=>"kayseri"],
                ["nom"=>"abou", "age"=>20, "add"=>"Kaloum"]
              ];

              for($i = 0; $i < sizeof($etudiants); $i++){
                  foreach($etudiants[$i] as $member){
    
                      echo $member . " ";
                    
                  }
                  echo "<br>";
              }
              


        ?>
    </body>
</html>