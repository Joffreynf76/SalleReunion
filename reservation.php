<?php

if(isset($_POST['reservation'])){
    include_once ("./function/connectionPDO.php");
    $db=connectionPDO('localhost' , 'salle' , 'root' , '');
    $salle=$_POST['salle'];
    $date=$_POST['date'];
    $duree = $_POST['duree'];
    if($salle==0 || $duree==0 || $date==0){
        echo "Veuillez bien remplir le formulaire";
    } else {

        $requete = "INSERT INTO `t_reservation` (`id_RESERVATION`, `DATE`, `T_Salle_id_Salle`,`Duree`) VALUES (NULL, '$date', '$salle','$duree')";
        $result = $db ->query($requete);
            echo "Merci de votre réservation";
        }


}else {
    echo "erreur";
}