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
    <link rel="icon" type="image/png" href="../images/InFoot.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Graduate&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lemon&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
    $pageActive = "galerie";
    require('../header.php');
    ?>

    <main class="image-tel-main">
        <div class="galerie-background">
        <h1>GALERIE</h1>

<div class="image-tel-form">
    <?php
// Vérification de sélection d'un fichier
// Récupération des attributs du fichier (nom,type,taille)
if (!empty($_FILES)) {
$image_nom=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_taille=$_FILES['image']['size'];
$image_temporaire=$_FILES['image']['tmp_name'];
$image_error=$_FILES['image']['error'];
} else {
echo 'Vous devez sélectionner un fichier';
}

// Début Vérification de la conformité
$affichage_erreurs='';
$erreurs=0;

// Test si pas d'erreur de sélection
if ($image_error == 0) {
        // Test format du fichier en fonction de l'extension
    if ($image_type != 'image/jpeg') {
    $affichage_erreurs .='Le fichier n\'est pas au format jpeg ou extension invalide<br>';
    $erreurs++;
    }

    // Test format du fichier avec la fonction exif_imagetype
        if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
    $affichage_erreurs .='Ce fichier n\'est pas une image jpeg<br>';
    $erreurs++;
    }

     // Test taille du fichier
    $taille_max = 500 * 1024; // 500 Ko en octets
    if (filesize($image_temporaire) > $taille_max) {
     $affichage_erreurs .= 'La taille du fichier dépasse la limite de 500 Ko<br>';
    $erreurs++;
        }

} else {
$affichage_erreurs='Impossible de télécharger le fichier, erreur de sélection<br>';
}

if ($erreurs == 0) {									// Si fichier conforme
    // On récupére le nombre de fichiers dans images/galerie
$nbFichiers=-2;                         				// Le dossier contient deux fichier cachés . et ..
$dossier= opendir("../images/galerie");
while ($fichier = readdir($dossier)) {
$nbFichiers++;
}

// On renomme le fichier - imageN.jpg
$image_num=$nbFichiers+1;
$image_nom='image'.$image_num.'.jpg';

// On fixe le nom complet de la destination (chemin relatif/imageN.jpg)
$destination="../images/galerie/".$image_nom;

// On déplace le fichier dans son emplacement définitif
if (move_uploaded_file($image_temporaire, $destination)) {
$erreurs=0;
} else {
$affichage_erreurs='Erreur de téléchargement<br>';
$erreurs++;
}
}

// On affiche les erreurs
if ($erreurs != 0) {
echo $affichage_erreurs;
echo '<button class="retour-button" onclick="window.location.href=\'../galerie.php\'">Retour à la Galerie</button>';
} else {
echo 'Téléchargement terminé avec succès<br>';
echo '<button class="retour-button" onclick="window.location.href=\'../galerie.php\'">Retour à la Galerie</button>';

}
    ?>  
</div>
</main>

    <?php
    require('../footer.php');
    ?>

</body>
</html>