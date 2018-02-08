<?php

include_once ("./function/connectionPDO.php");
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Réservation de salle</title>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="./assets/css/materialize.min.css"  media="screen,projection"/>
            <link rel="stylesheet" href="./assets/css/style.css">
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


            <script> $(document).ready(function() {
                    $('select').material_select();
                });

                </script>
        </head>

        <body>
        <div class="container">

        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Réservation de salle</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <form class="col s12" method="post" action="reservation.php">
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" class="validate" name="nom">
                        <label for="first_name">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" class="validate" name="prenom">
                        <label for="last_name">Prénom</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>


        </div>
        <div class="input-field col s12">
            <select>
                <option value="" disabled selected>Choose your option</option>
                <?php
                $db = connectionPDO('localhost','reservation','root','');
                $requete = "SELECT * FROM t_room";
                $result = $db ->query($requete);
                while ($donnees=$result->fetch()){
                    echo ("<option value=".$donnees['id_ROOM'].">".$donnees['ROOMNAME']."</option>");
                }
                ?>
            </select>
            <label>Sélection de salle</label>
        </div>
            <div class="input-field col s12">
            <input type="datetime-local" class="datepicker">
            <label for="date">Date</label>
        </div>
        <div class="input-field col s12">
            <input type="text" class="timepicker">
            <label for="heure">Heure</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">Réserver</button>
        </form>

        </div>





        <script type="text/javascript" src="./assets/js/materialize.min.js"></script>
        <script> $('.timepicker').pickatime({
                default: 'now', // Set default time: 'now', '1:30AM', '16:30'
                fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
                twelvehour: false, // Use AM/PM or 24-hour format
                donetext: 'OK', // text for done-button
                cleartext: 'Clear', // text for clear-button
                canceltext: 'Cancel', // Text for cancel-button
                autoclose: false, // automatic close timepicker
                ampmclickable: true, // make AM PM clickable
                aftershow: function(){} //Function for after opening timepicker
            });
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
            });
        </script>

        </body>
</html>
