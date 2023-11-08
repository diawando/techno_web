<!Doctype html>
<html lang="fr">
<head>
</head>

<body>
<h1>Bienvenue dans mon premier programme PHP</h1>
            <?php
            
                $counter = 0;
                echo "boucle while <br>";
                while($counter <= 10){
                    echo "ligne n° $counter <br>";
                    $counter++;
                }

                echo "<br><br>";
                echo "<br><br>";
                
                echo "boucle for <br>";
                echo "<br><br>";
                for($i=0; $i<=15; $i++){
                    echo "ligne n° $i <br>";
                }
            ?>
</body>
</html>