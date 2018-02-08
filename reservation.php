<?php

if(isset($_POST['action'])){
    include_once ("./function/connectionPDO.php");
    $db=connectionPDO('localhost' , 'reservation' , 'root' , '');
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    //$salle = $_POST['salle1'];
    $date=$_POST['date'];
    $heure = $_POST['heure'];
    $place=$_POST['place'];
    if( $date=="" || $heure=="" || $place==""){
        echo "Veuillez bien remplir le formulaire";
    } else {
        $requete2= "INSERT INTO t_users (id_USERS,USERNAME,USERFNAME,USERMAIL) VALUES (NULL,'$nom','$prenom','$email')";
        //$requete = "INSERT INTO `t_reservation` (`T_USERS_id_USERS`, `T_ROOM_id_ROOM`, `HEUREDEBUT`,`DUREE`,`NBRPLACE`) VALUES (NULL, '$salle', '$date','$heure','$place')";
        $result = $db ->query($requete2);
            echo "Merci de votre réservation";
        }


}else {
    echo "erreur";
}