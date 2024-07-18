<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie | InFoot</title>
    <link rel="icon" type="image/png" href="images/InFoot.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Graduate&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lemon&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    $pageActive = "galerie";
    require('header.php');
    ?>

    <main>
    <div class="galerie-background">
        <h1>GALERIE</h1>

        <!-- Affichage du nombre d'images -->
        <?php
        $nbFichiers = count(glob("images/galerie/*.{jpg,jpeg,png,gif}", GLOB_BRACE));
        echo 'Il y a ' . $nbFichiers . ' images ' . 'sur la page.';
        ?>

        <!-- Formulaire d'upload -->
        
        <form class="test" action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
            <label for="image">Choisir un fichier</label>
            <input type="file" name="image" id="image" />
            <input type="submit" value="Télécharger" />
        </form>

        <!-- Affichage du message de confirmation -->
        <?php
        if (isset($_SESSION['upload_message'])) {
            echo '<p>' . $_SESSION['upload_message'] . '</p>';
            unset($_SESSION['upload_message']); // Efface le message pour ne pas l'afficher à nouveau
        }
        ?>

        <!-- Affichage des images -->
        <div class="gallery-container">
            <?php
            $files = glob("images/galerie/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            foreach ($files as $file) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $file . '" alt="">';
                echo '</div>';
            }
            ?>
        </div>

    </main>

    <?php
    require('footer.php');
    ?>

</body>

</html>
