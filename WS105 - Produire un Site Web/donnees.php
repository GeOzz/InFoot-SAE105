<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données | InFoot</title>
    <link rel="icon" type="image/png" href="images/InFoot.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Graduate&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lemon&display=swap" rel="stylesheet">
    </head>
<body>

<?php
$pageActive = "donnees";
require('header.php');
?>

<main id="main_donnees">
    <h1>TOP 50 DES MEILLEURS JOUEURS DE FOOTBALL DE L'HISTOIRE</h1>

    <table id="tableau" class="hover">
        <thead>
            <tr>
                <th>RANG :</th>
                <th>NOM :</th>
                <th>PRENOM :</th>
                <th>AGE :</th>
                <th>PAYS :</th>
                <th>PERIODE D'ACTIVITE :</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $json_data = file_get_contents('datas/FOOT.json');
            $players = json_decode($json_data, true);

            foreach ($players as $player) {
                echo '<tr>';
                echo '<td>' . $player['Rang'] . '</td>';
                echo '<td>' . $player['Nom'] . '</td>';
                echo '<td>' . $player['Prénom'] . '</td>';
                echo '<td>' . $player['Âge'] . '</td>';
                echo '<td>' . $player['Pays'] . '</td>';
                echo '<td>' . $player['Période d\'activité'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
    <script>
            $(document).ready(function() {
                $('#tableau').DataTable( {
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json'
                    }
                } );
            } );
    </script>
</main>

<?php
// Appel du Pied de Page
require ('footer.php');
?>
</body>

