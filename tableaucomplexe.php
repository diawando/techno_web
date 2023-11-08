<!Doctype html>
<html lang="fr">
    <head>
    </head>
    <body>
        <h2>Les tableaux php</h2>

        <?php
               
               $nombres = [
                  [11, 12, 13, 14, 15],
                  [21, 22, 23, 24, 25],
                  [31, 32, 33, 34, 35]
               ];
               echo "<table>";
               foreach($nombres as $nombre){
                 echo "<tr>";
                    foreach($nombre as $element){
                        echo "<td>";
                         echo $element; 
                        echo "</td>" ;
                    }
                 echo "</tr>";
               }
               echo "</table>";
        ?>
    </body>
</html>