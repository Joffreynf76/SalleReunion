<?php

include_once ("./function/connectionPDO.php");
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Réservation de salle</title>
        </head>

        <body>
            <h2>Réservation de salle</h2>
            <form method="post" action="reservation.php">
                <select name="salle">
                    <option value="0">Choix salle</option>
            <?php
            $db=connectionPDO('localhost' , 'salle' , 'root' , '');
            $requete = "SELECT * FROM t_salle";
            $result = $db -> query($requete);
            while($donnees=$result->fetch()) {

                echo("<option value=" . $donnees['id_Salle'].">" .$donnees['T_NomSalle'] . "</option>");


            }
            ?>
                </select>
                <input type="datetime-local" name="date">
                <select name="duree">
                    <option value="0">Choix durée</option>
                    <option value="1">1h</option>
                    <option value="2">2h</option>
                    <option value="3">3h</option>
                    <option value="4">4h</option>

                </select>
                <input type="submit" value="Reserver" name="reservation">
            </form>
        </body>
</html>
