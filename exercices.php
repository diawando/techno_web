<!Doctype html>
<html lang="fr">
    <head>
    </head>
    <body>
        <h2>Exercices php</h2>

        <?php
                echo "boucle avec for";
                echo "<br><br>";
                for($i = 100; $i <= 200; $i++){
                    if($i % 2 == 0){
                         echo  "$i <br>";
                    }
                }

                echo "<br><br>";
                echo "boucle avec while";
                $i = 100;
                while ($i <= 200){
                    if ($i % 2 == 0){
                        echo "$i <br>";
                    }
                    $i++;
                }


        ?>
    </body>
</html>