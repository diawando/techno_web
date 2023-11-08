<!Doctype html>
<html lang="fr">
    <head>
    </head>
    <body>
        <h2>Les tableaux php</h2>

        <?php
               
               $clients = ["soumah", "sow", "bangoura", "sylla", "fode"];
               echo "<table>";
               echo "<th>Nom</th>";
               for ($i = 0; $i < sizeof($clients); $i++){
                  echo "<tr>";
                  echo "<td>$clients[$i]</td>";
                  echo "</tr>";

               }
               echo "</table>";

        ?>
    </body>
</html>